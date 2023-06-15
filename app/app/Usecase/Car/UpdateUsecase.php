<?php

namespace App\Usecase\Car;

use App\Http\Payload;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class UpdateUsecase
{
    public function run(UpdateRequest $request, Car $car): Payload
    {
        try {
            \DB::beginTransaction();
            $imageUrl = $this->updateImage($request, $car);
            $car->update([
                'name' => $request->get('name'),
                'cc' => $request->get('cc'),
                'sale_date' => $request->get('date'),
                'memo' => $request->get('memo'),
                'image_url' => $imageUrl
            ]);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            return (new Payload())
                ->setStatus(Payload::FAILED);
        }
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }

    private function updateImage(UpdateRequest $request, Car $car): string|null
    {
        if ($request->file('image') === null) {
            return $car->image_url;
        }

        $storage = Storage::disk('public');
        $storage->delete('/image/' . pathinfo($car->image_url, PATHINFO_BASENAME));
        $imageUrl = $storage->putFile('/image', $request->file('image'));

        return $storage->url($imageUrl);
    }
}
