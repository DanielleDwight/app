<?php include realpath(__DIR__ . '/app/layout/header.php') ;


if (isset($_POST["submit"])){
    $firstName = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($firstName)) {
        array_push($invalid, "First name should not be empty!");
    }
    if (empty($lastName)) {
        array_push($invalid, "last name should not be empty!");
    }
    if (empty($username)) {
        array_push($invalid, "username should not be empty!");
    }
    if (empty($password)) {
        array_push($invalid, "password should not be empty!");
    }else{
        $password = md5($password);

        $addUser = $userFacade->adduser($firstName, $lastName, $username, $password);
        if ($addUser) {
            array_push($success, 'User has been added successfully!');
        }
    }







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