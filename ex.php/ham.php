<?php
function cong($number1, $number2, $number3= false){
	$tong = $number2 + $number1;
	if ($number3 != false) {
		$tong = $tong + $number3;
		// code...
	}
	echo" <br> tổng = ". ($number1 + $number2 + $number3);

}
cong(30,24, 20);
//khi truyền number3 bằng false thì khi gọi hàm có thể truyền tham số cho nó hoặc không                                                                                                    
 function tieng($a, $b , $c = false){
 	$nn =$a + $b;
 	if ($c != false) {
 		$nn += $c;
 		// code...
 	}
 	return $nn;

 }
  $nn = tieng(5, 4);
  $lang = $_GET['lang'];
  if ($lang == 'vn') {
  	echo' <br> tiengvn'.$nn;
  	// code...
  } else if ($lang =='eng') {
  	echo ' <br> tieng_eng'.$nn;
  	// code...
  }else{
  	
  }
  echo " <br> tiếng" .$nn;
?>