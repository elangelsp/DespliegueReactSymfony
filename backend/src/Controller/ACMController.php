<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class INIController
{
#[Route('/api/acm', name: 'api_acm')]
public function index(): Response
{
return new Response('Symfony de Angel Cabrera Martos Responde a la llamada de
React');
}
}
