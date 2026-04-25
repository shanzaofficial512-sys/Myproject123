<?php
$messageSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $messageSent = true;
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Contact page CSS -->
<link rel="stylesheet" href="css/contact.css">


<!-- ============ Contact Hero Start ============ -->
<section class="contact-hero">
    <h1>Reach Out <span class="golden">for Support</span><br> and Queries</h1>
    <button class="hero-btn">Contact Us Now</button>
</section>
<!-- ============ Contact Hero End ============ -->


<!-- ============ Contact Form Section Start ============ -->
<section class="contact-section">
    <div class="contact-box">

        <!-- Left: Form -->
        <div class="form-section">
            <h2>Drop Us a Message</h2>

            <?php if($messageSent): ?>
                <div class="success-msg">Message Sent Successfully!</div>
            <?php endif; ?>

            <form method="POST" action="">
                <input type="text"  name="name"    placeholder="Your Name"    class="contact-input" required>
                <input type="email" name="email"   placeholder="Your Email"   class="contact-input" required>
                <input type="text"  name="phone"   placeholder="Phone Number" class="contact-input">
                <input type="text"  name="subject" placeholder="Subject"      class="contact-input">
                <textarea name="message" placeholder="Your Message" class="contact-input contact-textarea" required></textarea>

                <button type="submit" class="send-btn">Send Message</button>
            </form>
        </div>

        <!-- Right: Map -->
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps?q=Karachi&output=embed"
                width="100%"
                height="100%"
                style="border:0; border-radius:6px;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

    </div>
</section>
<!-- ============ Contact Form Section End ============ -->


<!-- ============ Footer ============ -->
<?php include 'includes/footer.php'; ?>


<!-- JavaScript Files -->
<script src="js/navbar.js"></script>
<script src="js/footer.js"></script>

</body>
</html>