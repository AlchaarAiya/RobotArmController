<?PHP 

$host="localhost";
$user="root";
$pwd="";
$db="robotarm";

if (isset($_POST["save"]))
{
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    $m5 = $_POST['m5'];
    $m6 = $_POST['m6'];    
    
    $con = mysqli_connect($host, $user, $pwd, $db);

    $query = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
    VALUES ($m1, $m2, $m3, $m4, $m5, $m6)";

    if ($con->query($query) === TRUE) 
    {
        echo "<script>alert('Motor Values Saved Successfully');</script>";
        echo "<script>window.location='index.html';</script>";

    } 
    else 
    {
        echo "Error: " . $query . "<br>" . $con->error . " <hr>";
    }
}
else if(isset($_POST["ON"]) || isset($_POST["OFF"]))
{
    if (isset($_POST["ON"]))
    {
        $res = "on";
    } 
    else if (isset($_POST["OFF"]))
    {
        $res = "off";
    }

    $con = mysqli_connect($host, $user, $pwd, $db);

    $query = "INSERT INTO robotstate (currentstate)
    VALUES ('$res')";



    if ($con->query($query) === TRUE) 
    {
        echo "<script>alert('Robot State Updated Successfully');</script>";
        echo "<script>window.location='index.html';</script>";

    } 
    else 
    {
        echo "Error: " . $query . "<br>" . $con->error . " <hr>";
    }

}
else
{
    echo "<script>alert('Error Ocuured! Kindly try again later');</script>";
    echo "<script>window.location='index.html';</script>";
}



?>