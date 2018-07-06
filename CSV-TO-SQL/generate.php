<?php
$alamat = [
    'Lawang', 'Singosari', 'Arjosari', 'Blimbing', 'Tumpang', 'SoekarnoHatta', 'Sawojajar', 'Bandulan', 'Dinoyo', 'Landungsari', 'Gadang',
];
$girls = ['Emily', 'Hannah', 'Sarah', 'Ashley', 'Taylor', 'Jessica', 'Katie', 'Emma', 'Lauren', 'Samantha', 'Rachel', 'Olivia', 'Kayla', 'Anna', 'Megan', 'Alyssa', 'Alexis', 'Grace', 'Madison', 'Elizabeth', 'Nicole', 'Amanda', 'Abby', 'Victoria', 'Brittany', 'Haley', 'Natalie', 'Julia', 'Danielle', 'Courtney', 'Rebecca', 'Paige', 'Jasmine', 'Sara', 'Stephanie', 'Jennifer', 'Mary', 'Chloe', 'Lily', 'Michelle', 'Erin', 'Shelby', 'Kaitlyn', 'Jenna', 'Sierra', 'Maria', 'Andrea', 'Destiny', 'Kate', 'Allison', 'Autumn', 'Zoe', 'Amy', 'Lexi', 'Sophia', 'Claire', 'Marissa', 'Abigail', 'Molly', 'Laura'];
$boys = ['Michael', 'Jacob', 'Alex', 'Tyler', 'Andrew', 'Daniel', 'John', 'Matthew', 'Ryan', 'Austin', 'David', 'Christian', 'Nick', 'Brandon', 'Jonathan', 'Anthony', 'Ethan', 'Justin', 'Joshua', 'Jordan', 'Jake', 'Jack', 'Dylan', 'James', 'Kyle', 'Kevin', 'Ben', 'Noah', 'Eric', 'Samuel', 'Josh', 'Zach', 'Joseph', 'Logan', 'Adam', 'Aaron', 'Jason', 'Christopher', 'Caleb', 'Brian', 'William', 'Robert', 'Joe', 'Luke', 'Matthew', 'Arunseto', 'Thomas', 'Evan', 'Nicholas', 'Mark','Zachary','Mike','Jose','Steven','Max','Connor','Patrick','Sean','Gabriel','Will'];
$dept = ['TI', 'MI', 'SI', 'DKV'];

$nrp = 161111000;
$tlp = '087859000';
$inAl = 0;
$inDept = 0;
$inG = 0;
$inB = 0;
for ($i = 1; $i <= 120; $i++) {
    if ($i % 2 == 1) {
        echo ($nrp + $i) . "," . $boys[$inB] . ',M,' . $dept[$inDept] . ',' . $alamat[$inAl] . ',';
        $inB++;
    } else {
        echo ($nrp + $i) . "," . $girls[$inG] . ',F,' . $dept[$inDept] . ',' . $alamat[$inAl] . ',';
        $inG++;
    }

    if ($i < 10) {
        echo $tlp . "00" . $i;
    } else if ($i < 100) {
        echo $tlp . "0" . $i;
    } else {
        echo $tlp . "" . $i;
    }
    echo "<br>";

    if (($inAl + 1) <= 10) {
        $inAl++;
    } else {
        $inAl = 0;
    }

    if (($inDept + 1) <= 3) {
        $inDept++;
    } else {
        $inDept = 0;
    }
}
?>