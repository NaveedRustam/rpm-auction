<?php

namespace Tests\Feature;

use Tests\TestCase;

class StarterKitPageControllerTest extends TestCase
{
    public function test_converted_starter_kit_page_one_is_served(): void
    {
        $response = $this->get('/starter-kit/page-1');

        $response->assertOk();
        $response->assertViewIs('converted.starter-kit.page-1');
        $response->assertSee(route('starter-kit.page-2'), false);
    }

    public function test_converted_starter_kit_page_two_is_served(): void
    {
        $response = $this->get('/starter-kit/page-2');

        $response->assertOk();
        $response->assertViewIs('converted.starter-kit.page-2');
        $response->assertSee(route('starter-kit.page-1'), false);
    }
}
