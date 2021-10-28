<?php include '../views/dbconfig.php'; 
// if(isset($_POST['add'])){

if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])&&isset($_POST['cpass'])){

$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpass = $_POST['cpass'];



$hash1 = password_hash($password,PASSWORD_BCRYPT);
$hash2 = password_hash($cpass,PASSWORD_BCRYPT);
if($password==$cpass){
echo $name.$email.$phone.$password.$cpass;
$query = "INSERT INTO students(name,email,phone,password,cpass) values(?,?,?,?,?)";
$stmt =  $con->prepare($query);
$stmt->bind_param('sssss',$name,$email,$phone,$hash1,$hash2);
$stmt->execute();
        }else{

            echo 'no';
        }
    }

// 
?>