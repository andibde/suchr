<?php

$input=$_GET['str'];

$product[0]="books";


$value=false;

for($i=0;$i<20;$x++){

	if($input==substr($product[$i],$x,strlen($input)) && !empty($input))
	{



		echo substr($pruduct[$i],0,$x)."<b style='font-size:18px;'>".substr($product[$i],$x,strlen($input))."</b>".
		substr($product[$i],$x+strlen($input))."</br>";
		$value=true;
		}
	}
}

if(empty($input)){echo"Please enter something...";}

if(!$value && !empty($input)){echo"Nothing for: ".$input." :(";}
?>
