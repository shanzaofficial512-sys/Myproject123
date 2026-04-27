<?php
$page_title = "Submit Your MCQs for Practice | SkillSphere";
$page_description = "Submit your MCQs for PPSC, FPSC, NTS, CSS competitive exam preparation. Contribute to our MCQ database.";

$success_message = '';
$error_message   = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name          = trim($_POST['name'] ?? '');
    $username      = trim($_POST['username'] ?? '');
    $email         = trim($_POST['email'] ?? '');
    $password      = trim($_POST['password'] ?? '');
    $subject       = trim($_POST['subject'] ?? '');
    $mobile        = trim($_POST['mobile'] ?? '');
    $short_profile = trim($_POST['short_profile'] ?? '');

    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // TODO: Save to database or send email
        $success_message = 'Thank You for Your Contribution!';
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Submit MCQs CSS -->
<link rel="stylesheet" href="css/submitmcqs.css">

<!-- Hero Banner -->
<section class="submit-hero">
    <h1>Submit <span>Your MCQs</span> for Practice</h1>
</section>

<!-- Form Section -->
<section class="submit-mcqs-section">
    <h2>Submit Your MCQs</h2>

    <?php if ($error_message): ?>
        <div style="color:#c0392b; margin-bottom:16px; font-weight:600;">
            <?php echo htmlspecialchars($error_message); ?>
        </div>
    <?php endif; ?>

    <div class="submit-form-box">
        <form method="POST" action="">

            <div class="submit-form-grid">

                <!-- Left Column -->
                <div class="left-col">
                    <input
                        type="text"
                        name="name"
                        placeholder="Name"
                        value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                        style="margin-bottom:14px; display:block;"
                    >
                    <input
                        type="email"
                        name="email"
                        placeholder="User Email"
                        value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                        style="margin-bottom:14px; display:block;"
                    >
                    <input
                        type="text"
                        name="subject"
                        placeholder="Subject"
                        value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>"
                        style="margin-bottom:14px; display:block;"
                    >
                    <textarea
                        name="short_profile"
                        placeholder="Short Profile"
                    ><?php echo htmlspecialchars($_POST['short_profile'] ?? ''); ?></textarea>
                </div>

                <!-- Right Column -->
                <div class="right-col">
                    <input
                        type="text"
                        name="username"
                        placeholder="User Name"
                        value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                        style="margin-bottom:14px; display:block;"
                    >

                    <!-- Password with toggle -->
                    <div class="password-wrapper" style="margin-bottom:14px;">
                        <input
                            type="password"
                            name="password"
                            placeholder="User Password"
                            id="passwordField"
                        >
                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            title="Show/Hide Password"
                        >
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </button>
                    </div>

                    <input
                        type="tel"
                        name="mobile"
                        placeholder="Mobile"
                        value="<?php echo htmlspecialchars($_POST['mobile'] ?? ''); ?>"
                        style="margin-bottom:14px; display:block;"
                    >

                    <!-- Note -->
                    <div class="note-box">
                        <p class="note-title">Note...</p>
                        <p class="note-text">Your present city, academic qualifications, and desired job role?</p>
                    </div>

                    <!-- Register Button -->
                    <div class="submit-form-actions">
                        <button type="submit" class="btn-register">Register Now</button>
                    </div>
                </div>

            </div>

            <!-- Thank You Message -->
            <p class="submit-thankyou">
                <?php if ($success_message): ?>
                    <?php echo htmlspecialchars($success_message); ?>
                <?php else: ?>
                    Thank You for Your Contribution!
                <?php endif; ?>
            </p>

        </form>
    </div>
</section>

<!-- Password Toggle Script -->
<script>
function togglePassword() {
    var field = document.getElementById('passwordField');
    if (field.type === 'password') {
        field.type = 'text';
    } else {
        field.type = 'password';
    }
}
</script>

<?php include 'includes/footer.php'; ?>
