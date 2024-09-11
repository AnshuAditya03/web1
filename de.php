<?php
include("database.php");
?>
<?php
$sql = "SELECT * FROM bank";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['id']."<br>";
        echo $row['name']."<br>";
        echo $row["pass"]."<br>";
        echo $row['reg_date']."<br>";

    }
}
else{
    echo "No users found";
}
?>
<?php
mysqli_close($conn);
?>