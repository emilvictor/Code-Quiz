<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HistoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_history()
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get('/history');
        $response->assertSeeText('History');
        $response->assertStatus(200);
    }
}
