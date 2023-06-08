<!DOCTYPE html>
<html>
<head>
        <title>Crud version 0</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
<h1> Editing data in the database mydb</h1>
<?php 

$conn = mysqli_connect("localhost", "root", "", "mydb");
if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$sql = "DELETE FROM tbluser WHERE custid='" . $_GET["cust"] . "'";
$query = "SELECT * FROM tbluser WHERE custid='" . $_GET["cust"] . "'";
if($result = $conn->query($query)){
    while($row = $result->fetch_assoc()){
        $field1name = $row["firstname"];
        $field2name = $row["lastname"];
        $field3name = $row["email"];
        $field4name = $row["custid"];
        echo '<form action ="insertrec.php" method = "post" ">  
                <input type="text" name="custid" id ="custid" value='.$field4name.'>
                <input type="text" name="firstname" id ="firstname" value='.$field1name.'>
                <input type="text" name="lastname" id ="lastname" value='.$field2name.'>
                <input type="text" name="email" id ="email" value='.$field3name.'>
                <input type="submit" value ="Submit">
              </form>';
        mysqli_query($conn,$sql);
                ;
    }
    $result->free();
}

?>

</div>
</center>
</body>
</html>
