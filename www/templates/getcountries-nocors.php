<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo json_encode($countries = array("campos01", "campo02", "campo03"));