<?php

namespace App\Http\Actions\Car;

use App\Http\Requests\Car\UpdateRequest;
use App\Http\Responders\Car\UpdateResponder;
use App\Models\Car;
use App\Usecase\Car\UpdateUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class UpdateAction extends Controller
{
    public function __construct(
        private UpdateUsecase $usecase,
        private UpdateResponder $responder)
    {
    }

    public function __invoke(UpdateRequest $request, Car $car): Response
    {
        return $this->responder->handle($this->usecase->run($request, $car));
    }
}
