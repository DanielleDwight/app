<?php include realpath(__DIR__ . '/app/layout/header.php');


if (isset($_POST["submit"])){
    $FirstName = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo $firstName, $LastName, $username, $password;
    
    }
    




?>



<div class="container">
    <form action="form.php" method="post">
        <input type="text" class="form-control" placeholder="First Name" name="first_name">
        <input type="text" class="form-control" placeholder="last Name" name="last_name">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <input type="password" class="form-control" placeholder="password" name="password">
        <button type="submit" name="submit">Submit</button>




    </form>
    
</div>





<?php include realpath(__DIR__ . '/app/layout/footer.php') ?>