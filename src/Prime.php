<?php

class Prime
{
    public function generate($number)
    {
        $primes = [];
        $candidate = 2;

        while ($number > 1) {
            while ($number % $candidate === 0) {
                $primes[] = $candidate;

                $number /= $candidate;
            }
            $candidate++;
        }

        return $primes;
    }

    public function reverse($prime)
    {
        if (!is_array($prime)) {
            return 'Prime should be an array';
        }
        return array_product($prime);
    }

    public function isPrime($primeFactorArray)
    {
        if (count($primeFactorArray) > 1) {
            return true;
        } else {
            return false;
        }
    }
}
