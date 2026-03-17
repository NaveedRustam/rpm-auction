<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LegacyDataController extends Controller
{
    public function datatablesAjax(): JsonResponse
    {
        $records = collect(
            $this->readJsonFile(public_path('assets/json/table-datatable.json'))['data'] ?? []
        )->map(fn (array $row) => [
            $row['full_name'] ?? null,
            $row['email'] ?? null,
            $row['post'] ?? null,
            $row['city'] ?? null,
            $row['start_date'] ?? null,
            $row['salary'] ?? null,
        ])->values();

        return response()->json([
            'draw' => (int) request()->integer('draw', 1),
            'recordsTotal' => $records->count(),
            'recordsFiltered' => $records->count(),
            'data' => $records,
        ]);
    }

    public function fullCalendarEvents(Request $request): JsonResponse
    {
        $start = $request->query('start');
        $end = $request->query('end');

        if (! $start || ! $end) {
            return response()->json([
                'message' => 'Please provide a date range.',
            ], 422);
        }

        $rangeStart = $this->parseDateTime($start);
        $rangeEnd = $this->parseDateTime($end);
        $timezone = $request->filled('timezone')
            ? new DateTimeZone($request->string('timezone')->toString())
            : null;

        $events = $this->readJsonFile(public_path('app-assets/data/fullcalendar/json/events.json'));

        $output = collect($events)
            ->map(fn (array $event) => $this->normalizeEvent($event, $timezone))
            ->filter(fn (array $event) => $this->eventIsWithinRange($event, $rangeStart, $rangeEnd))
            ->values();

        return response()->json($output);
    }

    public function fullCalendarTimezones(): JsonResponse
    {
        return response()->json(DateTimeZone::listIdentifiers());
    }

    private function readJsonFile(string $path): array
    {
        return json_decode(File::get($path), true, 512, JSON_THROW_ON_ERROR);
    }

    private function normalizeEvent(array $event, ?DateTimeZone $timezone): array
    {
        $allDay = array_key_exists('allDay', $event)
            ? (bool) $event['allDay']
            : $this->isAllDayEvent($event);

        $eventTimezone = $allDay ? null : $timezone;

        return [
            'title' => $event['title'],
            'allDay' => $allDay,
            'start' => $this->parseDateTime($event['start'], $eventTimezone),
            'end' => isset($event['end']) ? $this->parseDateTime($event['end'], $eventTimezone) : null,
            'properties' => collect($event)
                ->except(['title', 'allDay', 'start', 'end'])
                ->all(),
        ];
    }

    private function isAllDayEvent(array $event): bool
    {
        $datePattern = '/^\d{4}-\d\d-\d\d$/';

        return preg_match($datePattern, $event['start']) === 1
            && (! isset($event['end']) || preg_match($datePattern, $event['end']) === 1);
    }

    private function parseDateTime(string $value, ?DateTimeZone $timezone = null): DateTime
    {
        $date = new DateTime($value, $timezone ?? new DateTimeZone('UTC'));

        if ($timezone) {
            $date->setTimezone($timezone);
        }

        return $date;
    }

    private function eventIsWithinRange(array $event, DateTime $rangeStart, DateTime $rangeEnd): bool
    {
        $eventStart = $this->stripTime($event['start']);
        $eventEnd = isset($event['end']) ? $this->stripTime($event['end']) : null;

        if (! $eventEnd) {
            return $eventStart < $rangeEnd && $eventStart >= $rangeStart;
        }

        return $eventStart < $rangeEnd && $eventEnd > $rangeStart;
    }

    private function stripTime(DateTime $dateTime): DateTime
    {
        return new DateTime($dateTime->format('Y-m-d'));
    }
}
