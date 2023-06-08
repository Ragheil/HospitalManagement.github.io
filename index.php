<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="favicon.png">
    <link rel="stylesheet" href="style.css">
   <script type="text/javascript"></script>
    <title>Patient Entry</title>
</head>
<body>
    <center>
<div class="form-box">
<br><span><h1>Patient Entry</h1></span>

<form action ="insertrec.php" method = "post" class="form">

<div class="input-group">
   
    <label class="label" for="patient_no" > Patient ID :</label>
    <input class="input" type="text" name="patient_no" id ="patient_no">

    <label class="label" for="patient_name	" > Patient Name :</label>
    <input class="input" type="text" name="patient_name	" id ="patient_name	">

    <label class="label" for="age"> Age :</label>
    <input class="input" type="text" name="age" id ="age">

    <label class="label" for="sex"> Sex :</label>
    <input class="input" type="text" name="sex" id ="sex" >

    <label for="address"> address :</label>
    <input class="input" type="text" name="address" id ="address" >

    <label class="label" for="city"> City :</label>
    <input class="input" type="text" name="city" id ="city" >

    <label for="cars">Choose a car:</label>


    <label class="label" for="phone_number"> Phone Number :</label>
    <input class="input" type="text" name="phone_number" id ="phone_number" >

    <label class="label" for="entry_date"> Entry Date :</label>
    <input class="input" type="date" name="entry_date" id ="entry_date" >

    <label class="label" for="refer_doctor"> refer_doctor :</label>
    <input class="form-control" type="text" name="refer_doctor" id ="refer_doctor" >
 

    <label class="label" for="diagnosis"> Diagnosis :</label>
    <input class="input" type="text" name="diagnosis" id ="diagnosis" >

    <label class="label" for="department_name"> Department Name :</label>
    <input class="input" type="text" name="department_name" id ="department_name" >

</div>
<br>
<input type="submit" value ="Submit" class="btn btn-success">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for asd.." title="Type in a name"  class="form-control">

</form>
<br>
</div>

<?php




$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}







$query = "SELECT * FROM pat_entry";
echo '<table id=myTable class="table table-bordered table-striped">
        
        <tr id= myTable class="thead-dark">
            <th> <font face="Arial">patient_no</font></th>
            <th> <font face="Arial">patient_name</font></th>
            <th> <font face="Arial">age</font></th>
            <th> <font face="Arial">sex</font></th>
            <th> <font face="Arial">address</font></th>
            <th> <font face="Arial">city</font></th>
            <th> <font face="Arial">phone_number</font></th>
            <th> <font face="Arial">entry_date</font></th>
            <th> <font face="Arial">refer_doctor</font></th>
            <th> <font face="Arial">diagnosis</font></th>
            <th> <font face="Arial">department_name</font></th>
            <th> <font face="Arial">action</font></th>
        </tr>';
        
    if($result = $conn->query($query)){
        while($row = $result->fetch_assoc()){
            $field1name = $row["patient_no"];
            $field2name = $row["patient_name"];
            $field3name = $row["age"];
            $field4name = $row["sex"];
            $field5name = $row["address"];
            $field6name = $row["city"];
            $field7name = $row["phone_number"];
            $field8name = $row["entry_date"];
            $field9name = $row["refer_doctor"];
            $field10name = $row["diagnosis"];
            $field11name = $row["department_name"];
       echo '<tr>
                <td>'.  $field1name. '</td>
                <td>'.  $field2name. '</td>
                <td>'.  $field3name. '</td>
                <td>'.  $field4name. '</td> 
                <td>'.  $field5name. '</td> 
                <td>'.  $field6name. '</td> 
                <td>'.  $field7name. '</td> 
                <td>'.  $field8name. '</td> 
                <td>'.  $field9name. '</td> 
                <td>'.  $field10name. '</td> 
                <td>'.  $field11name. '</td> 
             </tr>';
          
        }
        $result->free();
    }

?>
<script>
function myFunction(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td){
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display = "";
            } else{
                tr[i].style.display = "none";
            }
        }
       }
    }
</script>
</table>
</center>
</body>
</html>