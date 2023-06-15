<?php

declare(strict_types=1);

namespace App\Http\Responders\Car;

use App\Http\Payload;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class DeleteResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::FAILED) {
            return $this->responseFactory->redirectToRoute('cars.index')->with('failed_status', '削除に失敗しました。');
        }

        return $this->responseFactory->redirectToRoute('cars.index')->with('succeed_status', '削除が完了しました。');
    }
}
