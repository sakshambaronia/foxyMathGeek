<?php

$palindrome = $_GET['palindrome'];
$palindrome = strtolower(preg_replace('/\s+/', '', $palindrome));

$lengthOfinput = strlen($palindrome);
$check = 1;

for($i=0;$i<$lengthOfinput;$i++){
    if($palindrome[$i]!=$palindrome[$lengthOfinput-1-$i]){
        $check = 0;
        break;
    }
}

echo json_encode($check);