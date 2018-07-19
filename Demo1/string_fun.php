<?php 

					

					// 1.user defined function




// function add($a,$b){
// 	return $a+$b;
// }
// echo add(10,2);

				

					//2.Binary to ASCII & ASCII to binary conversion



// echo ord("p");
// echo"<br>";
// echo chr(65);

				
					//3. chunk split



//echo chunk_split("Arnab Mitra","2","-");



				
					//4.substr function


// $str= "Hello World!";
// echo substr($str,2)."<br>";
// echo substr($str,2 ,5)."<br>";
// echo substr($str,-2)."<br>";
// echo substr($str,-5,2)."<br>";
// echo substr($str,-9,-2)."<br>";

					

					//5.string repeat



//echo str_repeat("Hello"."<br>", 5);



						//6.string_pad




// echo str_pad("HELLO", 10, ".");
// echo "<br>";
// echo str_pad("HELLO", 10, ".",STR_PAD_LEFT);
// echo "<br>";
// echo str_pad("HELLO", 10, ".",STR_PAD_BOTH);
// echo "<br>";

						

						
						//7.string split




// $string="Hello World";
// $arr=str_split($string);
// echo "<pre>";
// print_r($arr);
// $arr2=str_split($string, 2);
// print_r($arr2);



							//8.string shuffle


// echo str_shuffle("arnab"); 
//(each time u press refresh button the string will shuffle)




							//9.string word count



// $word="I am a good boy";
// echo str_word_count($word); 




							//10.str_chr function


// $string="Hello world";
// echo strchr($string,"w")."<br>";
// echo strchr($string,111)."<br>";
// echo strchr($string,"w",TRUE);
		

							//11.String length


// echo strlen("abcdefghijklmnopqrstuvwxyz");


							//12.strip_tags


// $string="<i><b>Hello</b>World</i>";
// echo $string."</br>";
// echo strip_tags($string);


							//13.strcmp



// $string="HelloWorld";
// $string1="HelloWorld123";

// echo strcmp($string,$string1)."<br>";
// echo strcmp($string1,$string)."<br>";

// $string="HelloWorld";
// $string1="HelloWorld";
// echo strcmp($string1,$string);


					//14. string position


// $string="Hello World";
// echo strpos($string, "o")."<br>"; 
// //(execute from first position)
// echo strrpos($string, "o");


					//15.strstr


//(same as strchr function)






						//16.strtr


// $string="Hello World";
// echo strtr($string, "l", "*")."<br>";
// echo strtr($string, "lo", "*!");




							//17.sub_str_compare


// $str="Hello World";
// $str1= "Hello World!";
// echo substr_compare($str,$str1,0)."<br>";
// echo substr_compare($str,$str1,2 ,5)."<br>";
// echo substr_compare($str,$str1,-2)."<br>";
// echo substr_compare($str,$str1,-5,2)."<br>";



							//18.sub_str_count


// $str= "Hello World!";
// echo substr_count($str,"lo",0)."<br>";
// echo substr_count($str,"l",2,5)."<br>";



							//19.str_replace



// $str= "Hello World!";
// echo str_replace("l", "!", $str)."<br>";
// echo str_replace("l", "$", $str, $count)."<br>";
// echo $count;



							//20.substr_replace


// $str= "Hello World!";
// echo substr_replace($str,"world",0)."<br>";
// echo substr_replace($str,"world",2 ,5)."<br>";
// echo substr_replace($str,"world",-2)."<br>";
// echo substr_replace($str,"world",-5,2)."<br>";


							//21.trim


// $str= "Hello World";
// echo trim($str,"Held")."<br>";
// echo ltrim($str,"Held")."<br>";

// echo rtrim($str,"Held")."<br>";

							//22.md5

// echo md5("a");



							//23.lcfirst,ucfirst,strtoupper,strtolower,ucwords
?>
<?php
$str= "hello world";
$str2="HELLO WORLD";
echo ucfirst($str)."<br>";
echo lcfirst($str2)."<br>";
echo strtoupper($str)."<br>";
echo strtolower($str2)."<br>";
echo ucwords($str);










 ?>