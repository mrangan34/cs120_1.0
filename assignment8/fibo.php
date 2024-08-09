<?php

    function generateFibonacci($n) {
        $fib = [0, 1]; // Starting values

        if ($n <= 0) {
            return [];
        } else if ($n == 1) {
            return [0];
        }

        while (count($fib) < $n) {
            $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
        }

        return array_slice($fib, 0, $n);
    }

   
    $n = isset($_GET['n']) ? intval($_GET['n']) : 0;

    $fibSequence = generateFibonacci($n);

    $response = [
        'length' => $n,
        'fibSequence' => $fibSequence
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
?>
