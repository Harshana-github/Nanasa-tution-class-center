<?php 
require_once 'controllers/authController.php'; 
$status = '';
// verify the user using token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
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
    

    <title>Homepage</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">

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

                <h3>Wellcome, <?php echo $_SESSION['username']; ?></h3>

                <a href="index.php?logout=1" class="logout">logout</a>

                <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning">
                    You need to verify your account.
                    Sign in to your email account and click on the 
                    verification link we just emailed you at
                    <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
                <?php endif; ?>

                <?php if($_SESSION['verified']): ?>
                    <button class="btn btn-block btn-lg btn-primary">I am verified!</button>
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>
</html>