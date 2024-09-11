<html>
    <head>
        <title> Remember me</title>
    </head>
    <style>
        .lay{
            background-color: aqua;
            font-family: cursive;
        }
      
       
    </style>

    <body>
        <form  method="post">
        <div class="lay">
            <center>
            <table>
                
                <th>PHP login using Remember me function</th>
                <tr>
                    <td><label>Username</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="uname"
                    value="<?php if(isset($_COOKIE['uname']))
                    {
                        echo $_COOKIE['uname'];
                    } ?>"
                    ></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                </tr>
                <tr>
                <td><input type="text" name="pword"
                    value="<?php if(isset($_COOKIE['pword']))
                    {
                        echo $_COOKIE['pword'];
                    } ?>"
                    ></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="remember" value="Remember me">Remember Me</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                </tr>
                
            </table>
    </center>
            </div>
        </form>
    </body>
    <?php
    if(isset($_POST['submit']) && isset($_POST['remember']))
    {
      
            $username = $_POST['uname'];
            $password = $_POST['pword'];

            setcookie("Username",$username,time()+86400);
            setcookie("Password",$password,time()+86400);
        }
        else{
            echo "Cookie already exists !!!";
        }
    
   
    
    ?>
</html>