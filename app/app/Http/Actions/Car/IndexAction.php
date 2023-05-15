<?php

namespace App\Http\Actions\Car;

use App\Http\Responders\Car\IndexResponder;
use App\Usecase\Car\IndexUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexAction extends Controller
{
    public function __construct(
        private IndexUsecase $usecase,
        private IndexResponder $responder
    ){
    }

    public function __invoke(): Response
    {
        return $this->responder->handle($this->usecase->run());
    }
}
