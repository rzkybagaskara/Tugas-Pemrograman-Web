<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Redirect</title>
</head>
<body style= "overflow: hidden">
    
    <div class="thanks-message">
        <div class="text-message">
        <h2>Thank you for submitted the form <?php
            echo $_POST['user_name'];
        ?></h2>
        </div>
    </div>

</body>
</html>