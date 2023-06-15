<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Models\Car;

class DeleteUsecase
{
    public function run(Car $car): Payload
    {
        try {
            \DB::beginTransaction();
            $car->delete();

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();

            return (new Payload())
                ->setStatus(Payload::FAILED);
        }

        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}
