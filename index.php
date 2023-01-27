<?php require_once 'dbconfig.php'; ?>



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


    <?php
    $sql = "SELECT FirstName,LastName,EmailId,ContactNumber,Address,PostingDate,id from tblusers";
    // query:
    $query = $dbh->prepare($sql);
    $query->execute();

    //Assign the data which you pulled from the database (in the preceding step) to a variable.
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    // For serial number initialization
    $cnt = 1;
    if ($query->rowCount() > 0) {
        //In case that the query returned at least one record, we can echo the records within a foreach loop:
        foreach ($results as $result) {
    ?><!-- Display Records -->

            <?php echo htmlentities($cnt); ?>
            <?php echo htmlentities($result->FirstName); ?>
            <?php echo htmlentities($result->LastName); ?>
            <?php echo htmlentities($result->EmailId); ?>
            <?php echo htmlentities($result->ContactNumber); ?>
            <?php echo htmlentities($result->Address); ?>
            <?php echo htmlentities($result->PostingDate); ?>
            <a href="update.php?id=<?php echo htmlentities($result->id); ?>"><button><span>EDIT</span></button></a>
            <a href="index.php?del=<?php echo htmlentities($result->id); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span>DELETE</span></button></a></td>
            <br />


    <?php
            // for serial number increment
            $cnt++;
        }
    } ?>
</body>

</html>