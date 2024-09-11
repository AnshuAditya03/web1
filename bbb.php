<html>
    <head>
        <title>BMI Calculator</title>
        <style>
            .bm{
                background-color: grey;
                font-family: cursive;
                width: 500;
            }
            </style>
        <head>
            <body>
                <form method="post">
                    <div class="bm">
                    <table>
                        <center>BMI Calculator</center><br>
                        <tr><td>Height</td>
                    <td><input type="text" name="height"></td></tr>
                    <tr><td>Weight</td>
                   <br>
                    <td><input type="text" name="weight"></td></tr><br>
                    <tr><td><input type="submit" name="submit" value="Submit"></td></tr></div>
</table>
</form>
</body>
</html>

<?php
$a;
function sum($a,$b=70)
{
    global $a;
    static $c=0;
    $b;
    $b=$b/($a*$a);
    $c++;
    echo "Calculated BMI: ".$b."<br>";
    echo "Count ".$c."<br>";
}

if(isset($_POST['submit']))
{
    $a=$_POST['height'];
    $b=$_POST['weight'];
    sum($a, $b);
    sum($a);
    echo "<br>Value outside function Weight".$b;
}
?>
                        