<?php
 $var1 = 10;
 $var2 = 20;

 echo $var1.'<br>';
 echo $var1 + $var2.'<br>';

 $array = [10, 20, 30];
 $object = array("name" => "Nick", "age" => 30);
 print_r($array);
 print_r($object);

 echo $array[0].'<br>';
 echo $object["name"].'<br>';

 function add($num1, $num2) {
  //  echo $var1 + $var2;
   return $num1 + $num2;
 }

 // 아래처럼 사용하면 에러:함수에서만 적용되는 지역(매개,로컬)변수
 // echo $num1.$num2;
 // 전역(글로벌)변수:전체에서 쓸 수 있는 변수
 echo add(1,2);
?>
