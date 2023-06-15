<?php


namespace App\Usecase\Car;

use App\Http\Payload;
use App\Models\Car;

class EditUsecase
{
    public function run(Car $car): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('car'));
    }
}
