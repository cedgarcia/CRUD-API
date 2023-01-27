<?php require_once 'dbconfig.php'; ?>


<?php
if (isset($_POST['insert'])) {
    // Posted Values
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
    // Query for Insertion
    $sql = "INSERT INTO tblusers(FirstName,LastName,EmailId,ContactNumber,Address) VALUES(:fn,:ln,:eml,:cno,:adrss)";
    //Prepare Query for Execution
    $query = $dbh->prepare($sql);
    // Bind the parameters
    $query->bindParam(':fn', $fname, PDO::PARAM_STR);
    $query->bindParam(':ln', $lname, PDO::PARAM_STR);
    $query->bindParam(':eml', $emailid, PDO::PARAM_STR);
    $query->bindParam(':cno', $contactno, PDO::PARAM_STR);
    $query->bindParam(':adrss', $address, PDO::PARAM_STR);
    // Query Execution
    $query->execute();
    // Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        // Message for successfull insertion
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // Message for unsuccessfull insertion
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="insertrecord" method="post">

        <div><b>First Name</b>
            <input type="text" name="firstname" class="form-control" required>
        </div>
        <div><b>Last Name</b>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div><b>Email id</b>
            <input type="email" name="emailid" class="form-control" required>
        </div>
        <div><b>Contactno</b>
            <input type="text" name="contactno" class="form-control" maxlength="10" required>
        </div>

        <div><b>Address</b>
            <textarea class="form-control" name="address" required></textarea>
        </div>


        <input type="submit" name="insert" value="Submit">

    </form>
</body>

</html>