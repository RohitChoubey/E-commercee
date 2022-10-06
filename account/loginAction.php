
<?php
session_start();
include "../addbConfig.php";
$email = $_POST['email'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
	/* print_r($password);
	print_r($email);
	exit(); */
    $sql = mysqli_query($db,"select * from user where email='$email' AND password='$password'");
    if(mysqli_num_rows($sql)==1){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['email'] = $qry['email'];
      //  $_SESSION['nama'] = $qry['nama'];
        $_SESSION['roll'] = $qry['roll'];
		if($qry['roll']=="admin" || $qry['roll']=="Staff" ||$qry['roll']=="manager"){
			header("Location: ../index.php");
        }
    }
	else{
        ?>
        <script language="JavaScript">
            alert('Enter Correct User Name and Password!');
            document.location='login.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['user']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>