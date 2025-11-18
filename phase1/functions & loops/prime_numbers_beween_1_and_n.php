<!--  29. Generate all prime numbers between 1 and n. -->
  <?php
      //   prime condition:
      // 1. must have 2 divisor.
      // 2. it self and 1.
      // 3. so 1 is not prime number because it's doesn't have 2 divisors.

      //   main theory: ami 2 theke suru kore oi number er sqrt() jodi akta diyew nisheshe vag jai tahole oi number ta prime na.
      function findPrimeNumbers($num)
      {
          if ($num <= 1) {
              reutrn;
          } else {
              $primes = [];
              for ($i = 2; $i <= $num; $i++) {
                  $isPrime = true;
                  for ($j = 2; $j <= sqrt($i); $j++) {
                      if ($i % $j == 0) {
                          $isPrime = false;
                          break;
                      }
                  }
                  if ($isPrime) {
                      // php te array push ai vabe kora jai abar string hishebe . dot diye kora jai like .= diye kintu c++ a loop diye korte hoi.
                      $primes[] = $i;
                  }
              }
              return $primes;
          }
      }

      $n = fgets(STDIN);
      $n = trim($n);
      $n = (int) $n;

      $result = findPrimeNumbers($n);

      echo "Prime Numbers are: " . implode(" ", $result) . " \n";

  ?>