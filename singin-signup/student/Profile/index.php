<?php include 'processForm.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    
                    <h3 class="text-center">Create Profile</h3>

                    <?php if(!empty($msg)): ?>
                        <div class="alert <?php echo $css_class; ?>">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group text-center">
                        <img src="Images/avatar.png" onclick="triggerClick()" id="profileDisplay" />
                        <label for="profileImage">Profile Image</label>
                        <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;" >
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>