<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="register.css">
    <title>Document</title>
    <style></style>
   
</head>
<body>
    
        <form action="" method="GET">
        <fieldset> Login FORM</fieldset> 

        

        <label>E- mail </label>

        <input type="email" name="email" id="" placeholder="Username" required>
        <br>
        <label>Password</label>

        <input type="password" name="pass" id="" placeholder="Password" required>
        <br>
        <div class="division">
        <input class="btn" type="submit" value="submit" name="submit">
        </div >
        </form>

 
    
        <div class="division col">
        <?php
        require_once "configer.php";

        if (isset($_GET['submit'])) {
            $email = $_GET['email'];
            $pass = $_GET['pass'];
                    
                $newsql = "SELECT * FROM gmail WHERE email='$email'";
                
                $result = $conn->query($newsql);

            
                    if($result = mysqli_query($conn, $newsql)){

                        if(mysqli_num_rows($result) > 0){
                        
                            echo 'USER LOGIN SUCESSFULL* ';
                            while($row = mysqli_fetch_array($result)){
                              
                                echo '<pre>'; 
                                echo '<h1>'.'welcome '.$row['name'].'</h1>'."<br>";
                                echo 'username = '.($row['email']);
                                echo '</pre>';
                            
                        
                            } 
                        
                        } 
                        
                        else{
                            echo " INVALID USER ";
                        }
                    } 
                }
        ?>    
        </div>       
</body>
</html>

