<?php
class person {
public $name;
function set_name($new_name) {
$this->name = $new_name;
}
 function get_name() {
return $this->name;
}
}
?>
<?php
$person1 = new Person();
echo "Hai ".$person1->name='zainal abidin';
echo "<hr>";
echo $person1->get_name();
?>
