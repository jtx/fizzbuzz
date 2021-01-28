<?php

for ($num = 1; $num <= 100; $num++) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz\n";

        continue;
    } elseif ($num % 3 == 0) {
        echo "Fizz\n";

        continue;
    } elseif ($num % 5 == 0) {
        echo "Buzz\n";

        continue;
    }

    echo "{$num}\n";
}
