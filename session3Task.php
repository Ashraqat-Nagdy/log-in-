<!-- Create a form with the following inputs (name, email, password, address,
 linkedin url) Validate inputs then return message to user . 
* validation rules ... 
name  = [required ]
email = [required,email]
password = [required,min length = 6]
address = [required,length = 10 chars]
linkedin url = [required | url] -->




<?php 

if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $linkedin = $_POST['linkedin'];




    $errors = [];

     if(empty($name)){
         $errors['Name']  = "Field Required";
     }

     if(empty($email)){
         $errors['Email'] = "Field Required";
     }

    if(strlen($password) < 6){
        $errors['Password']  = "Password Length must be at least 6 chars";
    }
     if (strlen($address)<10) {
        $errors['Address'] = "Address Lenth Must Be 10 Chars";
    }
    
    if (empty($linkedin)) {
        # code...
        $errors['Linkedin'] = "Field Required";
    }
     
     if(count($errors) > 0){
         foreach ($errors as $key => $value) {
             echo '* '.$key.' : '.$value.'<br>';
         }
     }else{

        echo 'Valid Data .... ';
     }


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
 
 
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post" >

  

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  

  

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputAddress">Your Address</label>
    <input type="text"   class="form-control" id="exampleInputAddress" name="address" placeholder="Enter Address">
    </div>

     <div class="form-group">
    <label for="exampleInputLI">Write Your LinkedIn Link</label>
    <input type="url"   class="form-control" id="exampleInputLI" name="linkedin" placeholder="Enter your Linked In">
</br>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
