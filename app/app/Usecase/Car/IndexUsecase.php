<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Http\Requests\Car\IndexRequest;
use App\Models\Car;

class IndexUsecase
{
    public function run(IndexRequest $request): Payload
    {
        $query = Car::query();

        if ($request->get('name') !== null) {
            $query->where('name', 'like', "%{$request->get('name')}%");
        }

        if ($request->get('cc') !== null) {
            $query->where('cc', $request->get('cc'));
        }

        if ($request->get('date_from') !== null && $request->get('date_to') !== null) {
            $query->whereBetween('sale_date', [$request->get('date_from'), $request->get('date_to')]);
        }

        $cars = $query->paginate(10);

        return (new Payload())
            ->setStatus(Payload::SUCCEED)
            ->setOutput(compact('cars'));
    }
}
