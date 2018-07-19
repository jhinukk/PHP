<?php
$array=array("totto","BMW","audi");
print_r($array);
echo "</br>";
?>
<?php
$arr =array("a","b","c");
$str=implode(" ",$arr);
print_r ($str);
echo "</br>";

$exp=explode(" ",$str);
print_r ($exp);
echo "</br>";

?>
<?php
$user=array("Jhon"=>25,"Simon"=>26);
$case=array_change_key_case($user,CASE_UPPER);
print_r ($user);
echo "</br>";
?>
<?php
$array=array(
             "a"=>"aaa",
             "b"=>"bbb","c"=>"ccc","d"=>"ddd","e"=>"eee");
$cr=array_chunk($array,2);
print_r ($cr);
echo "</br>";

?>
<?php
$name=array("jhon","sam");
$age=array(23,21);
$rt=array_combine($name,$age);
print_r ($rt);
echo "</br>";

?>
<?php
$array=array(
             "a"=>"aaa",
             "b"=>"bbb","c"=>"ccc","d"=>"ddd","e"=>"eee");
$cr=array_flip($array);
print_r ($cr);
echo "</br>";
$er=array_keys($array,"ddd");
print_r ($er);
echo "</br>";
?>

<?php
$arr1=array("a"=>"red","b"=>"pink");
$arr2=array("c"=>"green","d"=>"white");
$er=array_merge($arr1,$arr2);
print_r ($er);
echo "</br>";
?>
<?php
$arr1=array("a"=>"red","b"=>"pink");
$arr2=array("c"=>"green","d"=>"white");
$er=array_merge($arr1,$arr2);
$res=array_pad($er,6,"yelow");
print_r ($res);
echo "</br>";
array_push($er,"black");
print_r ($er);
echo "</br>";
array_pop($er);
print_r ($er);
echo "</br>";
$eye=array_reverse($res);
print_r ($eye);
$yu=array_search("green",$res);
print_r ($yu);
?>