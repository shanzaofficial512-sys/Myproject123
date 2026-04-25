// Newsletter form submit handle karna
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();    // Page reload se rokna

    const email = document.getElementById('email').value;

    if (email.trim() === "") {
        alert("Please enter a valid email address.");
    } else {
        alert("Thank you for subscribing!");
        document.getElementById('newsletterForm').reset();
    }
});