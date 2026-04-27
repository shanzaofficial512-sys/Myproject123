<!DOCTYPE html>
<html>
<head>
<title>SkillShare</title>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

<script>
(function(){
    emailjs.init("ZsjIJ4yvIyQ5F2KfO"); // Public Key
})();
</script>

<style>
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

.modal-content input,
.modal-content textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}

.modal-content button {
    background: linear-gradient(to right, #d4b000, #2f7d22);
    color: #fff;
    padding: 10px;
    border: none;
    width: 100%;
}

.modal-content .card {
    margin-top: 15px;
    text-align: center;
}

.modal-content .card img {
    max-width: 120px;
    border-radius: 50%;
}

.error { color: red; }
.success { color: green; }

</style>
</head>

<body>

<div class="modal">
    <div class="modal-content">

        <span class="close" onclick="closePopup()">&times;</span>

        <h2>Student Form</h2>

        <p id="statusMsg"></p>

        <form id="studentForm">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <textarea name="address" placeholder="Permanent Address" required></textarea>
            <input type="password" name="password" placeholder="Password" required>
            <input type="file" name="profile_image" accept="image/*" required>
            <button type="submit">Submit</button>
        </form>

        <!-- Preview Card -->
        <div class="card" id="previewCard" style="display:none;">
            <img id="previewImg">
            <h3 id="previewName"></h3>
            <p id="previewEmail"></p>
            <p id="previewAddress"></p>
        </div>

    </div>
</div>

<script>
function closePopup(){
    document.querySelector(".modal").style.display="none";
}

// Handle Form Submit
document.getElementById("studentForm").addEventListener("submit", function(e){
    e.preventDefault();

    const form = this;
    const statusMsg = document.getElementById("statusMsg");

    const name = form.name.value;
    const email = form.email.value;
    const address = form.address.value;
    const password = form.password.value;
    const file = form.profile_image.files[0];

    // Preview Image
    const reader = new FileReader();
    reader.onload = function(e){
        document.getElementById("previewImg").src = e.target.result;
    };
    reader.readAsDataURL(file);

    // Show Preview Card
    document.getElementById("previewName").innerText = name;
    document.getElementById("previewEmail").innerText = email;
    document.getElementById("previewAddress").innerText = address;
    document.getElementById("previewCard").style.display = "block";

    // EmailJS Params
    const templateParams = {
        name: name,
        email: email,
        address: address,
        password: password   // ⚠️ Not recommended in real apps
    };

    // Send Email
    emailjs.send("service_0a2ercb", "template_jyqvtnb", templateParams)
    .then(function(response) {
        statusMsg.innerHTML = "<span class='success'>✅ Email sent successfully!</span>";
        form.reset();
    }, function(error) {
        statusMsg.innerHTML = "<span class='error'>❌ Failed to send email</span>";
        console.log(error);
    });

});
</script>

</body>
</html>