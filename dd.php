<?php
if(isset($_POST['submit'])){
include("database.php");
$username=filter_input(INPUT_POST, "unmae", FILTER_SANITIZE_SPECIAL_CHARS);
$password=filter_input(INPUT_POST, "pword", FILTER_SANITIZE_SPECIAL_CHARS);

if(empty("unmae"))
{
    echo "Username empty!!";
}
else if(empty("pword"))
{
    echo "Password empty!!";
}
else{
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO bank (user, pass) VALUES('$username','$hash')";
    mysqli_query($conn,$sql);
    echo "Row inserted";
}}
?>
<html>
    <head><title>Facebook</title>
</head>
<body>
    <form method="post">
    <h3>Facebook</h3>
    <label>Username</label>
    <input type="text" name="unmae"><br><br>
    <label>Password</label>
    <input type="password" name="pword"><br><br>
    <input type="submit" name="submit" value="Register">
</form>
</body>
</html>


<?php
mysqli_close($conn);
?>

