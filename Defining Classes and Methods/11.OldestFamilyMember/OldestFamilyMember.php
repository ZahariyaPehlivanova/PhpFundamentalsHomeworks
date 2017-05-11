<?php
require_once "Family.php";
require_once "Person.php";

$family = new Family();
$numOfLines = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $numOfLines; $i++) {
    $memberDetails = explode(" ", trim(fgets(STDIN)));
    $member = new Person($memberDetails[0], intval($memberDetails[1]));
    $family->addMember($member);
}
echo $family->getOldestMember();