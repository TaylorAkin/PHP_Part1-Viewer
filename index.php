<?php

$studentarr = array();

function randomDateInRange(DateTime $start, DateTime $end) {
    $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
    $randomDate = new DateTime();
    $randomDate->setTimestamp($randomTimestamp);
    return $randomDate;
}

while ($i < 1000) {
    $i++;
    $obj = new stdClass();

    $obj->StudentID = uniqid("Student_");

    $obj->PhoneNumber = rand(1000000000,7000000000);

    $obj->Birthday = randomDateInRange(new DateTime('2009-03-06 17:33:07'),new DateTime('2019-03-06 17:33:07'));

    $obj->Grade = rand(1, 12);


    array_push($studentarr, $obj);


}
$json = json_encode($studentarr);

echo $json;

?>
