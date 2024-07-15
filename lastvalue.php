

<?php
 $host = 'localhost';
 $username="root";
 $password="";
 $pdo=new PDO("mysql:host=localhost; dbname=regiset; charset=utf8",$username,$password);
$conn=mysqli_connect('localhost','root','','regiset');
$sql=mysqli_query($conn,"SELECT * FROM USER ORDER BY ID DESC LIMIT 1");
$print_data=mysqli_fetch_row($sql);
echo  "      Row :";
echo $print_data[0];
echo "   last value:";
echo $print_data[1];


?>
