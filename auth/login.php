<?php
$page_css = '../assets/css/auth.css';
include '../includes/header.php';
?>

<section class="auth-section">
    <div class="container">

        <div class="card auth-card">
            <div class="auth-card__header">
                <h1 class="section-heading">Welcome Back</h1>
                <p>Login to manage your appointments and health records.</p>
            </div>

            <form action="#" method="post">
                <div class="form-group">
                    <label for="login-email">Email Address</label>
                    <input type="email" id="login-email" name="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" placeholder="Enter your password">
                </div>

                <div class="auth-options">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember_me">
                        Remember Me
                    </label>
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

            <p class="auth-footer">
                Don't have an account? <a href="register.php">Register here</a>
            </p>
        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>