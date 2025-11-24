<!--  36. Implement static properties and methods. -->
  <!-- Class name ar function name jodi Same name hoi tahole seta to Constructor hoye jai. -->
   <!-- Object er khetre this use kora hoi, ar static method er khetre self use kora hoi php te. -->
  <?php

      class Counter
      {
          public static $count = 0;
          // public function __construct($count)
          // {
          //     $this->count = $count;
          // }
          public static function increment()
          {
              self::$count++;
          }

          public static function getCounter()
          {
              return self::$count;
          }
      }

      Counter::increment();
      Counter::increment();
      Counter::increment();
      Counter::increment();

      echo "Static Method call: " . Counter::$count . "\n";
      echo "Static Method Call by getCounter: " . Counter::getCounter() . "\n";

  ?>
