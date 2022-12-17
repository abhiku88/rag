<form  method= "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group" style="margin-bottom: 10px">
  <label for = "InputName">Name</label>
  <input type ="text" name= "Name" placeholder= "your good Name ">
  </div> 
  <div class="form-group" style="margin-bottom: 10px">
  <label for = "InputEmail">Email</label>
  <input type ="text" name= "email" placeholder= "your email address"> 
  </div>
  <div class="form-group" style="margin-bottom: 10px">
  <label for = "InputPhone">Phone</label>
  <input type ="text" name= "phone" placeholder= "phone">
  </div>
  <div class="form-group" style="margin-bottom: 10px">
  <label for = "InputAddress">Address</label> 
  <input type ="text" name= "address" placeholder= "Address">
  </div>
  <div class="form-group" style="margin-bottom: 10px">
  <label for = "InputMessage">Message</label>
  <input type ="text" name= "message" placeholder= "discription"> 
  </div>
  <div class="form-group" style="margin-bottom: 10px">
  <button type = "esubmit"> Submit </button>
  </div>
</form> 
 
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['phone'];
$message= $_POST['address'];
$message= $_POST['message'];

$to = "anhishekkumar18@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  phone = " . $phone . "\r\n  Address = " . $address . "\r\n Message =" . $message;
$headers = "From: anhishekkumar18@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
}
    
    


?>



