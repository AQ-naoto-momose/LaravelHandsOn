<?php

namespace tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // テストユーザー作成
        $this->user = User::factory()->create();
    }

    /**
     * @test
     */
    public function testUserLogin(): void
    {
        $response = $this->json(Request::METHOD_POST, route('login'), [
            'email' => $this->user->email,
            'password' => 'password',
        ]);

        $response->assertStatus(Response::HTTP_NO_CONTENT);

        $this->assertAuthenticatedAs($this->user);
    }
}
