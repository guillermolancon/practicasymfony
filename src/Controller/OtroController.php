<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OtroController extends AbstractController
{
    private $logger;
    Public function __construct(LoggerInterface $logger)
    {
        $this-> logger = $logger;
    }

 /**
  * @Route("/cu", name="curso_nombre")
  */
 
  public function hola(Request $request) 
  {
    $title = $request ->get('title');  
    $this->logger->info('list action called');
    $response = new JsonResponse();
    $response -> setData ([
        'success' => true, 
        'data' => [
                'id' => 1,
                'title'=> 'no habra mas penas ni olvido'
            ],
            [
                'id'=> 2,
                'title' => 'el nombre del vient'
            ],
            [
                'id' => 3,
                'title'=> $title,
            ]


    ]);
    return $response; 

  }
}