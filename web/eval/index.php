<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <!-- userid is Major -->
        <h1>My Calculator</h1>
        <form action="index.php" method="post">
            Expression <input type="text" name="exp"><br>
            <input type="submit">
        </form>
        <?php 
            if($_POST){
                if(isset($_POST["exp"])){
                    if(strlen($_POST["exp"]>25)){
                        "Well Well Well";
                    }else{
                        eval("echo ".$_POST["exp"].";");
                    }
                }
            }
        ?>
    </body>
</html>