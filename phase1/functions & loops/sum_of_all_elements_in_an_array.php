<!--  26. Sum of all elements in an array. -->
  <?php

      $n = fgets(STDIN);
      $n = trim($n);

      // taking array input by loops like c++. Ager example gulo te ami first a string niyesi then oi tare explode kore array te convert koresi. then output dekhanor somoy abar implode koresi.

      $arr = [];

      for ($i = 0; $i < $n; $i++) {
          $num     = fgets(STDIN);
          $num     = trim($num);
          $num     = (int) $num;
          $arr[$i] = $num;
      }

      $sum = 0;
      for ($i = 0; $i < $n; $i++) {
          $sum += $arr[$i];
      }

      echo "Sum of all elements in array: " . implode(" ", $arr) . " is $sum\n";

  ?>