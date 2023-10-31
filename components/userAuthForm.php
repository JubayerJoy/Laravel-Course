<?php
// Check if the user is already authenticated
if(isset($_SESSION['role'])){
    // Redirect the user based on their role
    if($_SESSION['role'] === 'admin'){
        header("Location: pages/admin.php");
        exit();
    } else if($_SESSION['role'] === 'manager'){
        header("Location: pages/manager.php");
        exit();
    } else {
        header("Location: pages/user.php");
        exit();
    }
}
?>

<!-- userAuthForm.php -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">User Authentication</h2>
                    <form action="authenticate.php" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <div class="mt-3 text-center">
                        <span>Don't have an account?</span>
                        <a href="../pages/register.php">Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
