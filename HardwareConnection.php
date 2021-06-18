<?PHP 

    $host="localhost";
    $user="root";
    $pwd="";
    $db="robotarm";

    $con = mysqli_connect($host, $user, $pwd, $db);

    // $query1 = "SELECT * FROM motors";
    $query1 = "SELECT * FROM motors WHERE ID=(SELECT MAX(ID) FROM motors)";
    $query2 = "SELECT * FROM robotstate WHERE ID=(SELECT MAX(ID) FROM robotstate)";

    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);
    
    if($row = mysqli_fetch_assoc($result1))
    {
        echo $row['motor1']."<br/>";
        echo $row['motor2']."<br/>";
        echo $row['motor3']."<br/>";
        echo $row['motor4']."<br/>";
        echo $row['motor5']."<br/>";
        echo $row['motor6']."<br/>";
    }

    if($row = mysqli_fetch_assoc($result2))
        echo $row['currentstate'];
    

?>