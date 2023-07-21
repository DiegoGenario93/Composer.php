<?php
require 'vendor/autoload.php';
//Guzzle: Realizar requisições HTTP
use GuzzleHttp\Client;

//DomCrowler: Ler o HTMl
use Symfony\Component\DomCrawler\Crawler;

//Guzzle
$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $resposta -> getBody();

//DomCrowler
//Scrawler = new Crealer()
$crawler = new Crawler($html);//remover HTML dos parenteses
//$crawler -> addHtmlContent($html);
$crawler -> addHtmlContent($html);

$cursos = $crawler ->filter('span.card-curso__nome');

foreach ($cursos as $curso){
    echo $curso->textContent.PHP_EOL;
}





