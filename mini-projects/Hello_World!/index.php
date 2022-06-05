<h1> Hello World! <h1>
<?php
    define("message", "Hello World!", false);
    print message;
    $msg = nl2br("\nLearning PHP\n");
    echo $msg;
    $msg = nl2br(message);
    echo $msg;
?>