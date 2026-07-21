<?php
$page_css = '../assets/css/auth.css';
include '../includes/header.php';
?>

<section class="auth-section">
    <div class="container">

        <div class="card auth-card auth-card--wide">
            <div class="auth-card__header">
                <h1 class="section-heading">Create an Account</h1>
                <p>Register to book appointments and manage your health records.</p>
            </div>

            <form action="#" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="register-name">Full Name</label>
                        <input type="text" id="register-name" name="full_name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email Address</label>
                        <input type="email" id="register-email" name="email" placeholder="Enter your email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="register-phone">Phone Number</label>
                    <input type="tel" id="register-phone" name="phone" placeholder="Enter your phone number">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" id="register-password" name="password" placeholder="Create a password">
                    </div>
                    <div class="form-group">
                        <label for="register-confirm-password">Confirm Password</label>
                        <input type="password" id="register-confirm-password" name="confirm_password" placeholder="Re-enter your password">
                    </div>
                </div>

                <fieldset class="role-group">
                    <legend>Register As</legend>
                    <label class="checkbox-label">
                        <input type="radio" name="role" value="patient" checked>
                        Patient
                    </label>
                    <label class="checkbox-label">
                        <input type="radio" name="role" value="doctor">
                        Doctor
                    </label>
                </fieldset>

                <div class="form-group">
                    <label for="register-department">Department</label>
                    <select id="register-department" name="department">
                        <option value="">Select a department</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="neurology">Neurology</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="orthopedics">Orthopedics</option>
                        <option value="dermatology">Dermatology</option>
                        <option value="radiology">Radiology</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>

            <p class="auth-footer">
                Already have an account? <a href="login.php">Login here</a>
            </p>
        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>