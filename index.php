<?php

 $obj = new main();
 $text = "my text";
 $obj->printthis($text);

 $array = array(1,2,3,4,5,6,7);
 $obj->printArray($array);

 $input_array = array("FirSt" => 1, "SecOnd" => 4);
 $obj->changeCase($input_array);

 class main
 {	
 	public function __construct()
	{	
		echo 'hello i\'m an Object </br>';
	}

	public function printthis($text) 
	{
		echo '<h1>Print function demo </h1>';
	      	print($text);
	      	echo '<hr>';
	}

	public function printArray($array) 
	{
	        echo '<h1>Array print function</h1>';
		print_r($array);
		echo '<hr>';
	}

	public function changeCase($input_array)
	{
		echo '<h1>Array Case Change Function</h1>';
		print_r(array_change_key_case($input_array,CASE_UPPER));
		echo '<hr>';
	}

	public function __destruct()
	{
		echo '</br> I\'m Done';
	}

 }

?>
