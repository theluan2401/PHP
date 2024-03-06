<?php
    $cookie_name = 'user';
    $cookie_value = 'The Luan';
    setcookie($cookie_name,$cookie_value,time()+(86400*30),("/"));
?>

<html>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Cookie named " .$_COOKIE[$cookie_name]. "<br/>";
            } else {
                echo "Hello Stranger. <br/>";
            }
                
        ?>
    </body>
</html>
