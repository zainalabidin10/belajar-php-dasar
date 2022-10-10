<?php include("index.php"); ?>
<?php
$zainal = new person();
$feby = new person;
$zainal->set_name("Zainal Abidin");
$feby->set_name("Feby Wahyu");
echo "zainal full name: " . $zainal->get_name(),"\n";
echo "feby full name: " . $feby->get_name();
?>
