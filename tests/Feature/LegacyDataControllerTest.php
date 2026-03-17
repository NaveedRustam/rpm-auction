<?php

namespace Tests\Feature;

use Tests\TestCase;

class LegacyDataControllerTest extends TestCase
{
    public function test_legacy_datatables_endpoint_is_served_by_laravel(): void
    {
        $response = $this->get('/assets/json/ajax.php');

        $response->assertOk();
        $response->assertJsonStructure([
            'draw',
            'recordsTotal',
            'recordsFiltered',
            'data',
        ]);
    }

    public function test_legacy_app_assets_datatables_endpoint_is_served_by_laravel(): void
    {
        $response = $this->get('/app-assets/data/ajax.php');

        $response->assertOk();
        $response->assertJsonStructure([
            'draw',
            'recordsTotal',
            'recordsFiltered',
            'data',
        ]);
    }

    public function test_legacy_fullcalendar_events_endpoint_is_served_by_laravel(): void
    {
        $response = $this->get('/app-assets/data/fullcalendar/php/get-events.php?start=2014-01-01&end=2014-12-31');

        $response->assertOk();
        $this->assertIsArray($response->json());
    }

    public function test_legacy_fullcalendar_timezones_endpoint_is_served_by_laravel(): void
    {
        $response = $this->get('/app-assets/data/fullcalendar/php/get-timezones.php');

        $response->assertOk();
        $response->assertJsonFragment(['UTC']);
    }
}
