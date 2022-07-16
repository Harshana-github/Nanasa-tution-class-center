<?php 

include 'processForm.php';

$sql = "SELECT * FROM users"; 

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
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

                <table class="table table-bordered">
                    <thead>
                        <th>Profile Image</th>
                        <th>Bio</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td>
                                <img id="profileDisplay" src="images/<?php echo $user['profile_image']; ?>" width="150" height="150"/>
                            </td>
                            <td>
                                <?php echo $user['bio']; ?>
                            </td>
                            
                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
</html>