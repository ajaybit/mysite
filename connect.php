<?php

$host="localhost"; // Host name 
$username="aarohedh_mac"; // Mysql username 
$password=".1xThMoZW,.;"; // Mysql password 
$db_name="aarohedh_head"; // Database name 
$tbl_name="tb_cform"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$email=$_POST['email_id'];
$message=$_POST['feedback'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name,email_id,feedback)
    VALUES('$name', '$email', '$message')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<div style='  text-align:center;background-color:skyblue;width:100%;height:100%'><code><h1 style='color:blue;font-size:75px'>Thank You!!!</h1></code><br><h4>Our goal is to improve our service any way we can, and we appreciate your taking the time to fill out our feedback form.</h4><br><p><strong style='color:red'>Declaration:</strong>All information received will always remain confidential...!</p></div>";
//echo "<BR>";
//echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>
<?php

    echo '<script> window.setTimeout("window.close()", 10000); </script>';

?>