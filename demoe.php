<html>
    <head>
        <title>List Cookies</title>
</head>
<body>
    <form action = "retrieved5.php"method="post">
        <table>
            <tr>
        <td><label>Click here to list the cookies below...</label></td></tr>
        <tr><td><input type="submit" name="submit" value="List Cookies"></td></tr>
</table>
</form>
</body>
<?php


?>

<?php
if(isset($_POST['submit']) && !isset($_COOKIE))
{
    setcookie("Food1", "Hamburger", time()+86400);
    setcookie("Food2", "Pizza", time()+86400);
    setcookie("Food3", "Fried Rice", time()+86400);
    setcookie("Food4", "Shawarma", time()+86400);
    setcookie("Food5", "Pasta", time()+86400);

    foreach($_COOKIE as $key => $value)
    {
        echo"<li> $key => $value </li><br>";
    }
    
}

else{
    echo "Temporarily Cookies not found!!!";
}


?>
</html>