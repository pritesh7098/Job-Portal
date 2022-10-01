
<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location:login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Successfuly.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong .')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
   
    <header>
    <nav>
    <div class="logo">JOB<pp>PORTAL</pp></div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
      <li><a  href="index.php">HOME</a></li>
        <li><a  href="interview.html">INTERVIEW PREP</a></li>
        <li><a  href="about.html">ABOUT US </a></li>
        <li><a  href="contact.html">CONTACT US</a></li>
      </ul>
    </nav>
  </header>

  <main class="background-image">
    <div class="contact ">
        <form action="" method="POST" class="formm">
          <h2>Register</h2>
          <input type="name" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
          <input type="email" name="email" placeholder="Email Id" value="<?php echo $email; ?>" required>
          <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password'] ?>" required>
          <input type="password" name="cpassword" placeholder="Conform password" value="<?php echo $_POST['cpassword'] ?>" required>
        
          <button name="submit" >Register</a></button>
          <p class="login-text">Have an account? <a href="login.php">Login Here</a></p>
        </form>
      </div>
    
  </main>
  
  <footer>
    <p></p> Created By <a>Team04</a>
    |@2022 All rights reserved</p>
  </footer>
  </body>
</html>   