<!--  20. Check if an array is a subset of another array. -->
  <?php

      $mainArray = fgets(STDIN);
      $mainArray = trim($mainArray);
      $mainArray = explode(" ", $mainArray);

      $subArray = fgets(STDIN);
      $subArray = trim($subArray);
      $subArray = explode(" ", $subArray);

      $flag = true;

      for ($i = 0; $i < count($subArray); $i++) {
          $found = false;
          for ($j = 0; $j < count($mainArray); $j++) {
              if ($subArray[$i] == $mainArray[$j]) {
                  $found = true;
                  break;
              }
          }
          if (! $found) {
              $flag = false;
              break;
          }
      }

      if (! $flag) {
          echo implode(" ", $subArray) . " is not subset of Main Array " . implode(" ", $mainArray) . "\n";
      } else {
          echo implode(" ", $subArray) . " is subset of Main Array " . implode(" ", $mainArray) . "\n";
      }

  ?>