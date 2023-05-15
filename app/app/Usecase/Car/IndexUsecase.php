<?php
namespace App\Usecase\Car;

use App\Http\Payload;
use App\Models\Car;

class IndexUsecase
{
    public function run(): Payload
    {
        $cars = Car::all();

        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('cars'));
    }
}
