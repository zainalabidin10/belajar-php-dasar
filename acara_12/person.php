<?php

abstract class person {
    abstract public function greet();
}

class English extends person  {
    

    public function greet(){
        return "iam english";
    }
}

class German extends person {

    public function greet(){
        return "ich bin Deutscher";
    }
}

class French extends person {

    public function greet(){
        return "je suis Allemand";
    }
}

$bahasa1 = new English();
$bahasa2 = new German();
$bahasa3 = new French();

echo "Bahasa 1 : ".$bahasa1->greet()."<br>";
echo "Bahasa 2 : ".$bahasa2->greet()."<br>";
echo "Bahasa 3 : ".$bahasa3->greet()."<br>";
?>