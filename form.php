
<?php
$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$name = $email = $address = $password = $imagePath = "";
$error = "";
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["address"]);
        $password = htmlspecialchars($_POST["password"]);

        // Image Upload
        if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] == 0) {
            $fileTmpPath = $_FILES["profile_image"]["tmp_name"];
            $fileName = basename($_FILES["profile_image"]["name"]);
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

            if (!in_array($fileExtension, $allowedExtensions)) {
                throw new Exception("Invalid file type.");
            }

            $newFileName = uniqid("IMG_", true) . "." . $fileExtension;
            $destPath = $uploadDir . $newFileName;

            if (!move_uploaded_file($fileTmpPath, $destPath)) {
                throw new Exception("Error uploading file.");
            }

            $imagePath = $destPath;
        } else {
            throw new Exception("Image is required.");
        }

        // Email send
        $to = $email;
        $subject = "Welcome!";
        $message = "Thank you $name for submitting the form.";
        $headers = "From: your@email.com";

        // if (!mail($to, $subject, $message, $headers)) {
        //     throw new Exception("Email failed (XAMPP issue).");
        // }
        if (!@mail($to, $subject, $message, $headers)) {
    $error = "Email failed (XAMPP issue).";
}

        $msg = "Form submitted & email sent!";

    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>SkillShare</title>

<style>
    /* ✅ Scoped modal styles only */
.modal {
    display: flex;                
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index: 9999;                
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}

.modal-content {
    background: #fff;
    width: 350px;
    max-height: 90vh;   
    overflow-y: auto;   
    padding: 20px;
    border-radius: 8px;
    position: relative;
}

.modal-content .close {
    position: absolute;
    right: 15px;
    top: 10px;
    cursor: pointer;
    font-size: 20px;
}

/* Scoped inputs/textareas inside modal */
.modal-content input,
.modal-content textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}

/* Scoped button inside modal */
.modal-content button {
    background: linear-gradient(to right, #d4b000, #2f7d22);
    color: #fff;
    padding: 10px;
    border: none;
    width: 100%;
}

/* Card inside modal */
.modal-content .card {
    margin-top: 15px;
    text-align: center;
}

.modal-content .card img {
    max-width: 120px;
    border-radius: 50%;
}

/* Messages inside modal */
.modal-content .error { color: red; }
.modal-content .success { color: green; }

</style>
</head>

<body>

<div class="modal">
    <div class="modal-content">

        <span class="close" onclick="closePopup()">&times;</span>

        <h2>Student Form</h2>

        <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        <?php if ($msg) echo "<p class='success'>$msg</p>"; ?>

        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <textarea name="address" placeholder="Permanent Address" required></textarea>
            <input type="password" name="password" placeholder="Password" required>
            <input type="file" name="profile_image" required>
            <button type="submit">Submit</button>
        </form>

        <!-- ✅ Card always show after submit -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="card">
            <?php if ($imagePath): ?>
                <img src="<?php echo $imagePath; ?>">
            <?php endif; ?>
            <h3><?php echo $name; ?></h3>
            <p><?php echo $email; ?></p>
            <p><?php echo $address; ?></p>
        </div>
        <?php endif; ?>

    </div>
</div>

<script>
function closePopup(){
    document.querySelector(".modal").style.display="none";
}
</script>

</body>
</html>