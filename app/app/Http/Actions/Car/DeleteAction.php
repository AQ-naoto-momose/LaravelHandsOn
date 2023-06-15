<?php

namespace App\Http\Actions\Car;

use App\Http\Responders\Car\DeleteResponder;
use App\Models\Car;
use App\Usecase\Car\DeleteUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeleteAction extends Controller
{
    public function __construct(
        private DeleteUsecase $usecase,
        private DeleteResponder $responder)
    {
    }

    public function __invoke(Car $car): Response
    {
        return $this->responder->handle($this->usecase->run($car));
    }
}
