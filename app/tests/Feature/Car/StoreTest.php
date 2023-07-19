<?php

namespace tests\Feature\Car;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function testCarStore(): void
    {
        $data = [
            'name' => 'test car',
            'cc' => 500,
            'date' => '2020-01-01',
            'memo' => 'test1234',
            'image_url' => 'http://example.com/',
        ];

        $response = $this->json(
            Request::METHOD_POST,
            route('cars.store'),
            $data
        );

        $response->assertValid();

        $response->assertStatus(Response::HTTP_FOUND);

        $this->assertDatabaseHas((new Car)->getTable(), $this->getInsertedTestData($data));

        $response->assertRedirect(route('cars.index'));
    }

    private function getInsertedTestData(array $data): array
    {
        $data['sale_date'] = $data['date'];

        return array_diff_key($data, array_flip(['image_url', 'date']));
    }
}
