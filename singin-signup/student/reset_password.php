<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    

    <title>Reset Password</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="reset_password.php" method="post">
                <h3 class="text-center">Reset your password</h3>
<br>

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>



                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="passwordConf" class="form-control form-control-lg">
                </div>
<br>
                <center>
                <div class="form-group">
                    <button type="submit" name="reset-password-btn" class="btn btn-primary btn-block btn-lg">Reset Password</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>