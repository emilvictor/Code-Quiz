<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class QuizTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_quiz_form()
    {
        $response = $this->get('/quiz/php');
        $response->assertSeeText('php quiz');
        $response->assertStatus(200);
    }

    public function test_submit_quiz_form()
    {
        $user = User::factory()->create();
        // How to test this dynamically?
        // quiz/{id}/result
        $this
            ->actingAs($user)
            ->followingRedirects()
            ->post('quiz/php/result', [
                "answer1" => 1,
                "answer2" => 1,
                "answer3" => 1,
                "answer4" => 1,
                "answer5" => 1,
            ]);

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get('quiz/php/result');

        $response->assertSeeText('Result php');
    }
}
