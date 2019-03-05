<?php

include ('autoloader.php');


$user1 = new User();
$user1->setEmail('test@test.com');

echo $user1->getEmail();