<?php
$var=TRUE;
echo gettype($var)."\n";
$var2=true;
echo gettype($var2)."\n";
$var3=12;
echo gettype($var3)."\n";
$var3=12.0;
echo gettype($var3)."\n";
$var3="12";
echo gettype($var3)."\n";
var_dump($var3);

echo (int)(1.0+2.1);


echo "ni
ho
a";

echo "\nhello ".$var3;
echo '\nhello $var3';


$str = <<<EOF
Hello man)
I am here
EOF;

echo $str;


$str="fuck you mother";

echo "\n".$str[-1];
echo "\n".$str{20};

$nullValue=null;

$nullValue=Null;
?>
