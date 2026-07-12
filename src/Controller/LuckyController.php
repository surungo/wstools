<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Service\LuckyService;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(LuckyService $luckyService, Request $request): Response
    {
        $qt_chars = $request->query->getInt('qt_chars', 6);
        $number = $luckyService->generateNumber($qt_chars);

        $data = ['number' => $number, 'qt_chars' => $qt_chars, 'length' => strlen((string) $number) ];

        // Status code defaults to 200 OK
        return new JsonResponse($data);
    
    }

    #[Route('/lucky/number_chars')]
    public function number_chars(LuckyService $luckyService, Request $request): Response
    {
        $qt_chars = $request->query->getInt('qt_chars', 6);
        $number_chars = $luckyService->generateNumberChars($qt_chars);
        
        $data = ['number' => $number_chars, 'qt_chars' => $qt_chars, 'length' => strlen($number_chars)];

        // Status code defaults to 200 OK
        return new JsonResponse($data);
    
    }
}