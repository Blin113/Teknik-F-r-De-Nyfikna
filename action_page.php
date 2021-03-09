<DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Welcome</title>
        <link href = "style.css" rel="stylesheet">

    </head>

    <body>

        <?php
            echo "Welcome" .$_POST['fname']. '<br />';
            echo "Your email address is:" .$_POST['email']. '<br />';
            echo "you may now close this page.";
        ?>

    </body>

</html>