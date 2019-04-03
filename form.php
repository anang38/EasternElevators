<?php include 'connection.php';?>
<?php
date_default_timezone_set('Asia/calcutta');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $cdate = date('m/d/Y');
    $ctime = date('H:i:s');
    $sql ="insert into contact values(NULL,'$name','$number','$email','$message',$cdate','$ctime')";
    $sql1=  mysqli_query($con, $sql);
    if($sql1)
    {
        echo"<script>alert('registration success')</script>";
    }
    else{
        echo"<script>alert('query failed)</script>";
    }
}
?>