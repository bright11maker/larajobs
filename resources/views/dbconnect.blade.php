<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & MYSQL DB Connection</title>
</head>
<body>
    <div>
        <?php
            if(DB::Connection()->getPdo()){
                echo "Successfully ";

            }else {
                echo "try again";
            }
        ?>
    </div>
    
</body>
</html>