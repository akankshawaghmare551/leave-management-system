<?php include 'templates/header.php'; ?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username= $_POST['username'];
        $password= $_POST['password'];

        $user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $result = $conn->query($user);
        if($result){
            header("Location: http://localhost:121/leave-management-system/admin/index.php"); 
            exit();
        }
    }
?>

<!-- Login Form -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3 text-dark">Login</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                        <div class="mb-4">
                            <label for="username" class="form-label">Username/Email</label>
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label for="remember" class="form-label">Remember Me</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary main-bg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'templates/footer.php'; ?>