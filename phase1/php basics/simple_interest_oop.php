<!-- Calculate simple interest using class and oop -->
 <!-- using simple interest formula SI=P*R*T*(1/100) where p=principal, r=rate, t=time -->
<?php

    class SimpleInterest
    {
        public $p, $r, $t;
        public function __construct($p, $r, $t)
        {
            $this->p = $p;
            $this->r = $r;
            $this->t = $t;
        }

        public function interest()
        {
            $si = $this->p * $this->r * $this->t * (1 / 100);
            return $si;
        }
    }

    $p = trim(fgets(STDIN));
    $r = trim(fgets(STDIN));
    $t = trim(fgets(STDIN));

    $simpleInterestObject = new SimpleInterest($p, $r, $t);
    $result               = $simpleInterestObject->interest();
    echo "Simple interest is: $result\n";

?>