<?php include 'dbconfig.php'; 
if(isset($_GET['register'])){

if(isset($_GET['name'])&&isset($_GET['email'])&&isset($_GET['phone'])&&isset($_GET['password'])&&isset($_GET['cpass'])){

$name = $_GET['name'];
$email= $_GET['email'];
$phone = $_GET['phone'];
$password = $_GET['password'];
$cpass = $_GET['cpass'];



$hash1 = password_hash($password,PASSWORD_BCRYPT);
$hash2 = password_hash($cpass,PASSWORD_BCRYPT);
if($password==$cpass){
echo $name.$email.$phone.$password.$cpass;
$query = "INSERT INTO admin(admin_name,email,phone,password,cpass) values(?,?,?,?,?)";
$stmt =  $con->prepare($query);
$stmt->bind_param('sssss',$name,$email,$phone,$hash1,$hash2);
$stmt->execute();
header("location:./index.php");
        }else{

            echo 'no';
        }
    }

}

else if(isset($_GET['login'])){


    if(isset($_GET['email'])&&isset($_GET['password'])){

        $email= $_GET['email'];
        $password = $_GET['password'];

$search_user = "SELECT * from admin where email=?";
$stmt = $con->prepare($search_user);
$stmt->bind_param('s',$email);
$stmt->execute();

$result = $stmt->get_result();
if( $result->num_rows > 0){
$row = $result->fetch_assoc();
$demail = $row['email'];
$dpassword = $row['password'];
$uname = $row['admin_name'];


$verify = password_verify($password,$dpassword);
if($verify){
header('location:home.php');
session_start();
$_SESSION['email'] = $email;
$_SESSION['admin_name'] = $uname;
}else{
    echo 'fail';
}


    }
}
}
?>