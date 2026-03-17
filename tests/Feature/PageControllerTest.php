<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    public static function publicPageProvider(): array
    {
        return [
            'home' => ['/', 'banners.home'],
            'auctions' => ['/auctions', 'banners.acutions'],
            'salvage' => ['/salvage', 'banners.salvage'],
            'drive' => ['/drive', 'banners.drive'],
            'about' => ['/about', 'banners.about'],
            'contact' => ['/contact', 'banners.contact'],
            'login' => ['/login', 'rpmlogin.login'],
        ];
    }

    #[DataProvider('publicPageProvider')]
    public function test_public_pages_are_served_through_blade_views(string $uri, string $view): void
    {
        $response = $this->get($uri);

        $response->assertOk();
        $response->assertViewIs($view);
    }
}
