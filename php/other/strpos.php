<?php
echo $str = "today is good day to die";
echo "<hr>";
$find = "good";
$pos = 0;
//=================While寫法======================
// while(mb_substr($str,$pos,mb_strlen($find)) != $find){
//     $pos=$pos+1;
// }
// echo "answer: $find is at ".($pos+1)." postion in $str";
// echo "<hr>";
//===================FOR寫法======================
// for ($i = 0; $i < mb_strlen($str); $i++) {
//     if (mb_substr($str, $i, strlen($find)) == $find) {
//         echo "answer: $find is at ".($i+1)." postion in $str";
//         break;
//     }
// }
//         echo "<hr>";
//===============偷雞函式94爽=====================
// echo "answer: '$find' is at ".(strpos($str, $find)+1)." postion in $str";