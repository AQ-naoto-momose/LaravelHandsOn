<?php

namespace tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function testUserRegister(): void
    {
        $data = [
            'name' => 'test user',
            'email' => 'ryo.okazaki@asia-quest.jp',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
        ];

        $response = $this->json(
            Request::METHOD_POST,
            route('register'),
            $data
        );

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas((new User)->getTable(), $this->getInsertedTestData($data));
    }

    private function getInsertedTestData(array $data): array
    {
        return array_diff_key($data, array_flip(['password', 'password_confirmation']));
    }
}
