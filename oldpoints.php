<?php

$mysqli = new mysqli("localhost", "root", "VzxOYsqhhp8PgiK", "BluepointsModel");
$mysqli->query("CALL ExpiredPoints()");
$mysqli->query("CALL ExpiredPointsCol()");

?>

