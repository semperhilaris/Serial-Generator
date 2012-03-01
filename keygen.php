<?php

include('./class/serialgenerator.class.php');

$generator = new Serialgenerator();


if ($_POST['count']) {
  $count = intval($_POST['count']);
}
if ($_POST['part_count']) {
  $part_count = intval($_POST['part_count']);
  $generator->set_part_count($part_count);
}
if ($_POST['part_length']) {
  $part_length = intval($_POST['part_length']);
  $generator->set_part_len($part_length);
}
if ($_POST['seperator']) {
  $seperator = $_POST['seperator'];
  $generator->set_seperator($seperator);
}
if ($_POST['pool']) {
  $pool = $_POST['pool'];
  $generator->set_pool($pool);
}



$var = $generator->generate_keys($count);

foreach ($var AS $v) {
  print $v."\n";
}

?>