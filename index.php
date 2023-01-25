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