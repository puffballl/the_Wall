<?php
$mysqli = new mysqli('localhost', 'Q', '', 'register_db') or die ('Error connecting');

if ($mysqli->errno) {
  echo 'Error number: ' . $mysqli->errno . '<br>';
}
