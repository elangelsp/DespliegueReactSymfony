<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class RECUAController
{
#[Route('/api/recua', name: 'api_recua')]
public function index(): Response
{
return new Response('Symfony de Angel Cabrera Martos Responde a la llamada de
React');
}
}
