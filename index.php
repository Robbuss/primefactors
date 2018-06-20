<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

include('form.php');

$request = Request::createFromGlobals();

$number = $request->get('number');
$prime = new Prime();
$primeFactors = $prime->generate($number);

$response = new Response(sprintf('Prime factorization of number = %s', htmlspecialchars(implode(", ",$primeFactors), ENT_QUOTES, 'UTF-8')));

$response->send();