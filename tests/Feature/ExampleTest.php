<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/main');


        $response->assertStatus(200);
    }
    public function test_post_id_get_request()
    {
        $response = $this->get('/post/1');

        $response->assertStatus(200);
    }

    public function test_get_unexisted()
    {
        $response = $this->get('/post/100');

        $response->assertStatus(404);
    }
    protected $items=[];
    public function test_post_constructor($items = []){
        $this->$items=$items;
    }
}
