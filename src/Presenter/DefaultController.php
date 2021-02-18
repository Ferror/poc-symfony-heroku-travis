<?php
declare(strict_types=1);

namespace App\Presenter;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController extends AbstractController
{
    public function __invoke(): Response
    {
        return new JsonResponse(['action' => 'index'], 200);
    }
}
