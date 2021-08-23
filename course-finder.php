<?php

require 'vendor/autoload.php';
require 'src/CourseFinder.php';

use Alura\CourseFinder\CourseFinder;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

$crawler = new Crawler();

$buscador = new CourseFinder($client, $crawler);
$cursos = $buscador->find('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}