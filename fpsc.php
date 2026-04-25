<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/fpsc.css">


<!-- ============ Hero Start ============ -->
<section class="fpsc-hero">
    <h1>Ace Your <span class="golden">FPSC Exam</span><br> with Past Papers</h1>
    <button class="hero-btn">Access Past Papers</button>
</section>
<!-- ============ Hero End ============ -->


<!-- ============ Description ============ -->
<section class="fpsc-section">
    <p class="intro-text">
        Unlock your potential with our extensive collection of FPSC past papers, tailored to help you excel in all major exams. From General Knowledge and English to Current Affairs and subject-specific tests, our repository is organized by year, subject, and exam type for effortless navigation. Practice with authentic past papers to familiarize yourself with exam patterns, sharpen your time management skills, and focus on high-yield topics. Whether you're preparing for CSS, general recruitment, or departmental exams, our platform provides detailed solutions, expert tips, and essential resources to boost your confidence. Start your journey to FPSC success today.
    </p>


    <!-- ============ Benefits ============ -->
    <h2 class="main-heading">If Focused on Benefits of Past Papers</h2>

    <h3 class="sub-heading">Why Practice with FPSC Past Papers?</h3>
    <ul class="benefits-list">
        <li>Past papers help candidates familiarize themselves with the format and structure of the exam.</li>
        <li>Recognizing frequently asked topics allows for focused preparation on high-priority areas.</li>
        <li>Simulating exam conditions with past papers builds the ability to manage time effectively during the real exam.</li>
        <li>Practicing past papers reduces anxiety by making candidates feel more prepared and experienced.</li>
        <li>Self-assessment through past papers helps aspirants pinpoint areas that need improvement.</li>
    </ul>


    <!-- ============ Categorization ============ -->
    <h2 class="main-heading">Categorization of Past Papers</h2>

    <h3 class="sub-heading">By Subject/Topic:</h3>
    <p>Organize past papers into categories like General Knowledge, Current Affairs, English, or specific job-related subjects.</p>

    <h3 class="sub-heading">By Year:</h3>
    <p>Allow users to access papers by the year they were conducted.</p>

    <h3 class="sub-heading">By Exam Type:</h3>
    <p>Differentiate between CSS, PMS, or FPSC-specific exams for clarity.</p>


    <!-- ============ Application ============ -->
    <h2 class="main-heading">How to Submit Your Application for FPSC Exams</h2>
    <p>Submit your application for FPSC exams, first, visit the official FPSC website and create an account. Once registered, log in and navigate to the "Examinations" section where you'll find a list of available exams. Choose the relevant exam category and read the instructions carefully before filling out the application form. Ensure that you provide accurate personal details, educational qualifications, and exam preferences. After completing the form, upload the required documents, such as educational certificates and photographs, as per the specifications. Pay the application fee through the available online payment methods, and submit your application. Finally, make sure to take a printout of the application form and fee receipt for future reference.</p>

    <button class="action-btn">Apply Now</button>


    <!-- ============ FAQ ============ -->
    <h2 class="main-heading">Explore Our Frequently Asked Questions</h2>

    <div class="faq-list">

        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-label">Question</div>
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">1</span>
                <span class="faq-text">How can I download FPSC past papers from this website?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>To download FPSC past papers, visit the FPSC Past Papers section on the website, select the desired subject or year, and click the download button. Ensure you are logged in if required for access.</p>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">2</span>
                <span class="faq-text">How do I apply for FPSC exams?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>Visit the official FPSC website, create an account, choose your exam category, fill out the application form, upload required documents, and pay the fee online to complete your application.</p>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">3</span>
                <span class="faq-text">Where Can I Find My PPSC Exam Result?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>You can find your PPSC exam result on the official PPSC website under the "Results" section. Enter your roll number or CNIC to view your result.</p>
            </div>
        </div>

    </div>

    <button class="action-btn">Get Answer</button>

</section>


<?php include 'includes/footer.php'; ?>


<script src="js/navbar.js"></script>
<script src="js/footer.js"></script>

<!-- FAQ accordion script -->
<script>
function toggleFaq(element) {
    const answer = element.nextElementSibling;
    answer.classList.toggle('active');
    element.classList.toggle('open');
}
</script>

</body>
</html>