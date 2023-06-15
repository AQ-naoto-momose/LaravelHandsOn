<?php

namespace App\Http\Actions\Car;

use App\Http\Responders\Car\EditResponder;
use App\Models\Car;
use App\Usecase\Car\EditUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class EditAction extends Controller
{
    public function __construct(
        private EditUsecase $usecase,
        private EditResponder $responder
    )
    {
    }

    public function __invoke(Car $car): Response
    {
        return $this->responder->handle($this->usecase->run($car));
    }
}
