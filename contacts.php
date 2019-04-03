<?php include 'header.php'; ?>
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
    $sql ="INSERT INTO contact VALUES(NULL,'$name','$number','$email','$message','$cdate','$ctime')";
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
<div class="container-fluid" style="background-color:#000080;color:white; font-family: 'Offside', cursive;">
    <h2>Find Our Office | Come and Visit Us !!</h2>
</div>
<div class="container-fluid" style="padding-bottom:15px; background-color:#FFF8DC ">
    <div class="col-sm-5 form">
        <h2>CONTACT FORM</h2>
        <form action="contacts.php" method="POST">
            <div class="form-group">
                <label for="name">Enter Your Name:</label>
                <input type="text" name="name" placeholder="Enter your name" id="name" required="" class="form-control">
            </div>
            <div class="form-group">
                <label for="number">Enter Your Number:</label>
                <input type="number" name="number" placeholder="Enter your number" id="number" required="" class="form-control">
            </div> 
            <div class="form-group">
                <label for="email">Enter Your Valid Email:</label>
                <input type="email" class="form-control" id="email" required="" placeholder="Enter Your Valid Email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea rows="5" class="form-control" id="email" required="" placeholder="Your Message" name="message"></textarea> 
            </div>  
            <input type="submit" name="submit" value="Submit" class="btn btn-success">  
        </form>
    </div>

    <div class="col-sm-1"> </div>

    <div class="col-sm-6 form">
        <h2>OUR OFFICE</h2>  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3070394127753!2d72.87674251387467!3d19.26900948697751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b08a779dadf9%3A0xf09fffc0f594f369!2sLeo%E2%80%99s+Elevator+Components+Marketing+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1527944365534" width="100%" height="410px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<?php include 'footer.php'; ?>

