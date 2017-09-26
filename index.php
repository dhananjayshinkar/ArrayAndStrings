<?php

 $obj = new main();
 $text = "my text";
 $obj->printthis($text);

 $array = array(1,2,3,4,5,6,7);
 $obj->printArray($array);

 $input_array = array("FirSt" => 1, "SecOnd" => 4);
 $obj->changeCase($input_array);
 
 $chunk_array = array('a', 'b', 'c', 'd', 'e');
 $obj->splitArray($chunk_array);

 $array_count = array(1, "hello", 1, "world", "hello");
 $obj->countArray($array_count);

 $obj->mergeArray($array,$chunk_array);

 $obj->padArray($chunk_array);
 
 $obj->prodArray($array);

 $obj->reverseArray($array);
 
 $obj->addElements($array);

 $obj->arrayValues($array_count);

 /*--string variables--*/

 		$num = 5;
		$location = 'tree';
		$format = 'There are %d monkeys in the %s';
		$obj->formatString($num,$location,$format);

		$name = 'Dhananjay';
		$obj->padString($name);
		$obj->repeatString($location);
		$obj->shuffleString($name);

		$str1='Hello World';
		$obj->splitString($str1);
		$obj->countWord($str1);
		$obj->stringLength($name);
		$obj->reverseString($name);




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
	    echo '<h1>1. Array print function</h1>';
		print_r($array);
		echo '<hr>';
	}

	public function changeCase($input_array)
	{
		echo '<h1>2. Array Case Change Function</h1>';
		print_r(array_change_key_case($input_array,CASE_UPPER));
		echo '<hr>';
	}

	public function splitArray($chunk_array)
	{
		echo '<h1>3. Array Chunk Function</h1>';
		print_r(array_chunk($chunk_array, 2, true));
		echo '<hr>';
	}

	public function countArray($array_count)
	{
		echo '<h1>4. Array Count Function</h1>';
		print_r(array_count_values($array_count));
		echo '<hr>';
	}

	public function mergeArray($array,$chunk_array)
	{
		 echo '<h1>5. Array Merge Function</h1>';
		 print_r(array_merge($array,$chunk_array));
		 echo '<hr>';
	}

	public function padArray($chunk_array)
	{
		 echo '<h1>6. Array Pad Function</h1>';
		 echo '<h4>Before padding</h4>';
		 print_r($chunk_array);
		 echo '<h4>after padding</h4>';
		 print_r(array_pad($chunk_array, 7, -1));
		 echo '<hr>';
	}

	public function prodArray($array)
	{
		 echo '<h1>7. Array Product Function</h1>';
		 echo '<h4>Array Values : </h4>';
		 print_r($array);
		 echo '<br>';
		 echo "product = " . array_product($array) . "\n";
		 echo '<hr>';

	}

	public function reverseArray($array)
	{
		 echo '<h1>8. Array Reverse Function</h1>';
		 echo '<h4>Original Array : </h4>';
		 print_r($array);
		 echo '<br>';
		 echo '<h4>Reversed Array : </h4>';
		 print_r(array_reverse($array));
		 echo '<hr>';
	}

	public function addElements($array)
	{
		echo '<h1>9. Array Sum Function</h1>';
		echo '<h4>Array Elements: </h4>';
		print_r($array);
		echo '<br>';
		echo "sum = " . array_sum($array) . "\n";
		echo '<hr>';
	}

	public function arrayValues($array_count)
	{
		echo '<h1>10. Array Values Function</h1>';
		print_r(array_values($array_count));
		echo '<hr>';
		echo '<h1> String Functions </h1>';
		echo '<hr>';
	}

	public function formatString($num,$location,$format)
	{
		echo '<h1>1. Format String Function</h1>';
		echo sprintf($format, $num, $location);
		echo '<hr>';
	}

	public function padString($name)
	{
		echo '<h1>2. Padding String Function</h1>';
		echo str_pad($name, 20, "--", STR_PAD_BOTH);
		echo '<hr>';
	}

	public function repeatString($location)
	{
		echo '<h1>3. Repeat String Function</h1>';
		echo str_repeat($location, 10);
		echo '<hr>';
	}

	public function shuffleString($name)
	{
		echo '<h1>4. shuffle String Function</h1>';
		echo str_shuffle($name);
		echo '<hr>';
	}

	public function splitString($str1)
	{
		echo '<h1>5. Split String Function</h1>';
		print_r (str_split($str1,5));
		echo '<hr>';
	}

	public function countWord($str1)
	{
		echo '<h1>6. String Word Count Function</h1>';
		echo '<h4>String : </h4>';
		echo $str1;
		echo '<br>';
		echo '<h4>word Count : </h4>';
		print_r (str_word_count($str1,0));
		echo '<hr>';
	}

	public function stringLength($name)
	{
		echo '<h1>7. String length Function</h1>';
		echo '<h4>String : </h4>';
		echo $name;
		echo '<br>';
		echo '<h4>String Length : </h4>';
		echo strlen($name);
		echo '<hr>';
	}

	public function reverseString($name)
	{
		echo '<h1>8. String reverse Function</h1>';
		echo '<h4>String : </h4>';
		echo $name;
		echo '<br>';
		echo '<h4>Reversed string : </h4>';
		echo strrev($name);
		echo '<hr>';
	}

	public function __destruct()
	{
		echo '</br> I\'m Done';
	}

 }

?>
