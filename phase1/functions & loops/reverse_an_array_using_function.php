<!--  27. Reverse an array using a function. -->
  <?php

      function arrayReverse($arr, $n)
      {
          $nArray = [];

          for ($i = $n - 1; $i >= 0; $i--) {
              $nArray[$i] = $arr[$i];
          }

          return $nArray;

      }

      $n = fgets(STDIN);
      $n = trim($n);

      $arr = [];

      for ($i = 0; $i < $n; $i++) {
          $num = fgets(STDIN);
          $num = trim($num);
          $num = (int) $num;

          $arr[$i] = $num;
      }

      $result = arrayReverse($arr, $n);

      echo "Array: " . implode(" ", $arr) . " is reversed as Reversed Array: " . implode(" ", $result) . "\n";

  ?>