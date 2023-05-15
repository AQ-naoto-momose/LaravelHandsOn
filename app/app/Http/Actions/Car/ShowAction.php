<?php

namespace App\Http\Actions\Car;

use App\Http\Responders\Car\ShowResponder;
use App\Models\Car;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class ShowAction extends Controller
{
    public function __construct(
        private ShowResponder $responder)
    {
    }

    public function __invoke(Car $car): Response
    {
        return $this->responder->handle($car);
    }
}
