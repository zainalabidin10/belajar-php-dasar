<?php
interface Animal{
    public function makesound();
}
class Cat implements Animal{
    public function makesound(){
        echo "meow";
    }
}

class Cow implements Animal{
    public function makesound(){
        echo "mouu";
    }
}

class Wolf implements Animal{
    public function makesound(){
        echo "auuuu";
    }
}

class mouse implements Animal{
    public function makesound(){
        echo "squeak";
    }
}
 $cat = new cat();
 $cow = new cow();
 $wolf = new wolf();
 $mouse  = new mouse();
 $animal = array ($cat, $cow, $wolf, $mouse);

 foreach($animal as $animal){
    $animal ->makesound();
 }
?>