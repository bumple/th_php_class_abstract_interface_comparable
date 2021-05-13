<?php
include_once 'ComparableCircle.php';

$circleOne = new ComparableCircle(3,'hinh 1');
$circleTwo = new ComparableCircle(4,'hinh 2');
$circleThree = new ComparableCircle(5,'hinh 3');

echo $circleOne->compareTo($circleTwo).'<br>';
echo '-----> compare2'.'<br>';
echo $circleTwo->compareTo($circleOne);