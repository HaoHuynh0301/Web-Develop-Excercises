<?php 
    if(isset($_GET["name"]) && isset($_GET["age"])) {
        echo "<h1>Done</h1>";
    } else echo ("<h1>No data</h1>");
?>

<html>
    <body>
        <form action="backend.php" method="POST">
            <p>Name: <input type="text" name="name"></p>
            <p>Age: <input type="text" name="age"></p>
            <input type="submit" value="Send" id="btn_submit">
        </form>
    </body>
</html>