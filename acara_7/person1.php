<?php include("index.php"); ?>
<?php
$zainal = new person();
$lala = new person;
$zainal->set_name("zainal abidin");
$lala->set_name("Feby Wahyu");
// directly accessing properties in a class is a no-no.
echo "zainal full name: ".$zainal->name;
?>
