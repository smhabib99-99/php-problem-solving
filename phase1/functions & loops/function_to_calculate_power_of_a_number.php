<!--  22. Function to calculate power of a number. -->
  <?php

      $base = fgets(STDIN);
      $base = trim($base);
      $base = (int) $base;

      $exponent = fgets(STDIN);
      $exponent = trim($exponent);
      $exponent = (int) $exponent;

      function calculatePowerOfANumber($b, $e)
      {
          $result = 1;
          for ($i = 1; $i <= $e; $i++) {
              $result = $b * $result;
          }
          return $result;
      }

      $powerOfANumber = calculatePowerOfANumber($base, $exponent);

      echo "The power of a Number is $powerOfANumber.\n";

  ?>