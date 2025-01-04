<?php
extract($_POST);
$con=new mysqli('localhost','root','','school');
$sql="INSERT into student(sname,class,mobile) VALUES('$name','$subject','$gender')";
if($con->query($sql)){
    echo "Data Saved";
}else{
    echo "something went wrong";
}
$con->close();
?>