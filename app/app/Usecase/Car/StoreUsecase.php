<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Http\Requests\Car\StoreRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class StoreUsecase
{
    public function run(StoreRequest $request): Payload
    {
        try {
            $imageUrl = $this->uploadImage($request); //追加

            $car = new Car();

            $car->fill([
                'name' => $request->get('name'),
                'cc' => $request->get('cc'),
                'sale_date' => $request->get('date'),
                'memo' => $request->get('memo'),
                'image_url' => $imageUrl
            ]);

            $car->save();

        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error($e);

            return (new Payload())
                ->setStatus(Payload::FAILED);
        }

        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }

    private function uploadImage(StoreRequest $request): string
    {
        if ($request->file('image') === null) {
            return '';
        }

        $storage = Storage::disk('public');
        $path = $storage->putFile('/image', $request->file('image'));

        return $storage->url($path);
    }
}
