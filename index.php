<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$number = $request->get('number');

if($number){
    if($number > 999999999){
        $responseString = 'Whoaa easy there cowboy! What do you think I am? <br>Some kind of Supercomputer? Try a small number or I get overheated!';
    }else{
        $prime = new Prime();
        $primeFactors = $prime->generate($number);
        $primeNumber = $prime->reverse($primeFactors);
        $isPrime = $prime->isPrime($primeFactors);
        
        if($isPrime){
            $responseString = $primeNumber .' is not a prime number. <br>';
            $responseString .= 'Factors: '.implode(" * ", $primeFactors) . ' = ' . $primeNumber;
        }else{
            $responseString = $primeNumber . ' is definitely a prime number<br>';
        }
    }
    $response = new Response($responseString);
}

include('form.php');
