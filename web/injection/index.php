<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <!-- userid is Major -->
        <h1>Get the Flag</h1>
        <form action="index.php" method="post">
            userId <input type="text" name="userid"><br>
            password <input type="text" name="password"><br>
            <input type="submit">
        </form>
        <?php 
            if($_POST and isset($_POST["userid"]) and $_POST["password"]){
                $dbhost = 'bivmszmin8qmucoaonsi-mysql.services.clever-cloud.com';
                $dbuser = 'uroo99mdkjhtukaacp9o';
                $dbpass = '2o4kzwohqxpccx7repne1o137xxnoj';
                $db = 'bivmszmin8qmucoaonsi';
                $port = 20151;
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db,$port);
                
                if(! $conn ) {
                die('Could not connect: ' . mysql_error());
                }
                $userid = $_POST["userid"];
                $pass = $_POST["password"];
                $sql = "SELECT * FROM employees WHERE id='$userid' and pass='$pass'";
                $retval = mysqli_query( $conn,$sql );
                
                if(! $retval ) {
                die('Could not get data: ' . mysqli_error());
                }
                $row = mysqli_fetch_array($retval, MYSQLI_NUM);
                if(isset($row) and count($row)>0) {
                    $myfile = fopen("flag.txt", "r") or die("Unable to open file!");
                    echo "<p>Oops how did you.... </p>";
                    echo fread($myfile,filesize("flag.txt"));
                    fclose($myfile);
                }
                
                mysqli_free_result($retval);
                echo "Fetched data successfully\n";
                
                mysqli_close($conn);
            }
        ?>
    </body>
</html>