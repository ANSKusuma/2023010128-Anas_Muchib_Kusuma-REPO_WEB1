<!-- Header -->
<?php include "../header.php" ?>

<?php
if (isset($_POST['create']))) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // SQL query to insert user data into the users table
    $query = "INSERT INTO users(usename, email, password) VALUES('{$user}','{$email}','{$pass}')";
    $add_user = mysqli_query($conn, $query);

    // displaying proper message for the user to see whether the query executed perfectly
    if (!$add_user) {
        echo "Something went wrong" . mysqli_error($conn);
    } else {
        echo "<script type='text/javascript'>alert('User added successfully!')";
    }
}
?>

<h1 class="text-center">Add User details </h1>
<div class="conteiner">
    <form action="" mothod="post">
        <div class="form-group">
            <label for="user" class="form-label">Username</label>
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Username</label>
            <input type="text" name="user" class="form-control" required>
        </div>
    </form>
</div>