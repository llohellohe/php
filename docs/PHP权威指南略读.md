##PHP权威指南略读
###一.PHP5语法基础
基础的语法和JAVA非常的类似，包含:

1.	if/else
2.	while
3.	foreach
4.	switch(支持字符串)

通过define可以定义全局常量，定义的时候，可以通过参数控制是否是区分大小写的。
	define(NAME,VALUE[,CASEINSENCITIVE])

eval()是通过执行字符串执行代码，性能比较低下，不推荐使用。

isset()可以判断变量是否设置，unset()取消变量的设置,empty()判断变量是否为空或者为false。


###二.PHP5的面向对象

同java一样，PHP5也有interface\class\抽象类\抽象方法的概念。

也支持final标记以及静态方法、静态字段。

#####构造和析构函数
	__construct
	和
	__destruct
	
也可以用类名同名的方法做构造函数，但是当和`__construct`同时存在时，以`__construct`为准。

#####访问权限
PHP5支持private/public/protected 属性和字段的访问修饰符，没有声明的话，默认为public 。

但是class没有访问修饰符。


#####类常量
const 可以定义类里面的常量。

访问的时候，类似于静态变量，但是不需要`$`符号。

	CLASS::CONSTANT_VAR
	
	
#####self和parent保留字
用于访问当前类或者父类的成员方法和变量

#####异常处理
try catch throw 


###三.数据库

addslashes可以防止sql注入

mysqli扩展面向长连接，而mysql扩展则是非持续连接的，因此推荐使用mysqli。

连接数据库:面向对象风格

	<?php

	$client=@new mysqli("localhost","root","","lampp");
	
	if($client->connect_errno){
		die("error to connent to db");
	}
	
	$result=$client->query("select * from email limit 0,10");
	
	while($record=$result->fetch_array()){
		echo $record['email']."\n";
	}
	
	$result->free();
	
	$client->close();
	
	?>
	
`@new mysqli` 来忽略连接的异常。


mysqli_fetch_row/fetch_row 返回结果集，但是必须通过下标访问。

mysqli_fetch_array/fetch_array 返回的结果集可以通过列名访问。


####预编译语句

	$prepareStatement=$client->prepare("SELECT * FROM email where email=? and id=?");
	
	$prepareStatement->bind_param('si',$email,$id);
	
	$email="yangqichris@gmail.com";
	
	$id=1;
	
	$prepareStatement->execute();
	
prepare()准备好语句，

bind_param()绑定变量，其中第一个参数为按照顺序的变量的类型。

1.	s 字符创类型
2.	i integer
3.	d double
4.	b blob

###文件操作

1.	fopen()打开文件
2.	fgets()获得行（包含换行符）
3.	feof()判断文件是否到达末尾
4.	fread()读取指定大小的字节
5.	fclose()关闭文件
6.	unlink()删除文件


###编码转换
iconv(SOURCE_CHARSET,DEST_CHARSET,STRING)


