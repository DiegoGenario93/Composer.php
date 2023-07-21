<?php

class BuscardorDeCursos
{
    /**
     * @var \GuzzleHttp\ClientInterface;
     */

    private \GuzzleHttp\ClientInterface $httpClient;
    /**
     * @var \Symfony\Component\DomCrawler\Crawler;
     */

    private \Symfony\Component\DomCrawler\Crawler $crawler;
    public function __construct(\GuzzleHttp\ClientInterface $httpClient, \Symfony\Component\DomCrawler\Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler;
    }

    public function  buscar(string $url):array
{
    $resposta = $this->httpClient->request('GET',$url);
    $html = $resposta ->getBody();
    $this


}

}