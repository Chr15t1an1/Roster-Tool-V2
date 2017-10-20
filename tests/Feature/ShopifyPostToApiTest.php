<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShopifyPostToApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }


    public function testPostFromShopify()
    {
        $response = $this->call('POST','/api/integrations/shopify/');
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }




}
