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
            if($_POST){
                if(isset($_POST["password"]) and isset($_POST["userid"])){
                    if($_POST["userid"] === "Major"){
                        if($_POST["password"] == md5($_POST["password"])){
                            $blocked = array("0e215962017", "0e730083352", "0e807097110","0e1137126905","0e1284838308");
                            if(!in_array($_POST["password"],$blocked,true)){
                                $myfile = fopen("flag.txt", "r") or die("Unable to open file!");
                                echo "<p>Well you earned it </p>";
                                echo fread($myfile,filesize("flag.txt"));
                                fclose($myfile);
                            }else{
                                echo "<p>I can give you the motivation to keep trying but not the flag</p>";
                            }
                            
                        }else{
                            echo "<p>How can you be this close and yet this far</p>";
                        }
                        
                    }else{
                        echo "<p>Who do you think you are</p>";
                    }
                    
                }else{
                    echo "<p>Well this is not acceptable</p>";
                }
            }
        ?>
    </body>
</html>