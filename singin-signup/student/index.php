<?php 
require_once 'controllers/authController.php'; 
$status = '';
// verify the user using token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

// verify the user using token
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../home/style.css">
    

    <title></title>
</head>
<body>
    
<div class="banner">

<?php echo $status; ?>

<?php if(isset($_SESSION['message'])): ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?>">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
        ?>
    </div>
    <?php endif; ?>

	<div class="navbar">
		<img src="../../home/Images/logo_transparent.png" class="logo">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Class</a></li>
			<li><a href="../checkout/index.html">Payment</a></li>
			<li><a href="#">Feedback</a></li>
			<li><a href="../Contact/contact-us.php">Contact</a></li>
		</ul>
	</div>



	<div class="content">
		<h1>WELCOME , <?php echo $_SESSION['username']; ?></h1>
		<p>                
            <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning">
                    You need to verify your account.
                    Sign in to your email account and click on the 
                    verification link we just emailed you at
                    <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
            <?php endif; ?>
        </p>
		
		<div>
            <a href="index.php?logout=1" class="logout"><button type="button"><span></span>Logout</button></a>
			<?php if($_SESSION['verified']): ?><a href="Profile/index.php"><button type="button"><span></span>My Profile</button></a><?php endif; ?>

		</div>
	</div>
	
</div>

</body>
</html>