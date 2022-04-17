
<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $sql = "INSERT INTO user(firstname,lastname,email,phonenumber,password) VALUES (?,?,?,?,?)";
            $stmtinsert= $db->prepare($sql);
            $result = $stmtinsert -> execute([$firstname,$lastname,$email,$phonenumber,$password]);
            if($result){
                echo 'Saved';
            }else{
            echo 'Failed';
            }
        }
        ?>
    </div>
<div>
   <form action="index.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with correct values.</p>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" name="lastname" required>

            <label for="email"><b>Email Address</b></label>
            <Input type="text" name="email" required>

            <label for="phonenumber"><b>Phone Number</b></label>
            <input type="text" name="phonenumber" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>

            <input type="submit" name = "create" value= "Sign Up">
        </div>
    </form>
</div>
</body>
</html>