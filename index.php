<?php

$studentarr = array();

while ($i < 1000) {
    $i++;
    $obj = new stdClass();

    $obj->StudentID = uniqid("Student_");

    $obj->PhoneNumber = rand(1000000000,7000000000);

    $obj->Birthday = new DateTime();

    $obj->Grade = rand(1, 12);


    array_push($studentarr, $obj);


}
$json = json_encode($studentarr);

echo $json;

?>
