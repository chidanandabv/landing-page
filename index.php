<?php
if(isset($_POST['name'])){
$server="localhost";
$user="root";
$password="";

$con =mysqli_connect($server,$user,$password);

if(!$con){
    die("connectio to the data base is faild due to".mysqli_connect_error());
}
echo"successed to the db";


$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$emali=$_POST['email'];
$phno=$_POST['phno'];
$desc=$_POST['other'];

$sql="    INSERT INTO `gsctrip`. `trip` (`name`, `gender`, `age`, `email`, `ph.no`, `others`, `date`) VALUES ('$name', '$gender', '$age', '$email', '$phno', '$desc', current_timestamp()); 
";
if($con->query($sql)== true){
    // echo "successesfully inserted";
}
else{
    echo"error: $sql <br> $con->error";

}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="con">
    <h3>welcome to gsc trip form</h3>
    <p>enter your detsil and submit</p>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="text" name="gender" id="name" placeholder="enter your gender">
        <input type="text" name="age" id="age" placeholder="enter your age">
        <input type="email" name="email" id="email" placeholder="enter your email">
        <input type="phone" name="phone" id="phone" placeholder="enter your phone number">
        <textarea type="desc" id="desc" cols="30" rows="10" placeholder="enter something"></textarea>
        <button class="btn">submit</button>
        <button class="btn">reset</button>

    </form>
</div>
    <script src="index.js"></script>
</body>
</html>