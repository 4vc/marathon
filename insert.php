<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "cms");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $cho =  $_REQUEST['cho'];
        $id='';
    if(isset($_POST["id"])){
       if($_POST(["id"]) != ''){
            $id = $_POST['id'];
                }
            }
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO cherga VALUES ('$id', '$name', 
            '$phone','$cho')";

          print_r($_POST);

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $phone\n "
                . "$cho\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: viv.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>