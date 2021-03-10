<?php
declare(strict_types=1);

namespace App\Presenter;

use App\Messenger\Envelope\Statistics;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;

final class ResourceController extends AbstractController
{
    public function __invoke(MessageBusInterface $bus): Response
    {
        $bus->dispatch(new Envelope(new Statistics()));

        return new JsonResponse(['action' => 'resource'], 200);
    }
}
