<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/ppsc.css">


<!-- ============ Hero ============ -->
<section class="ppsc-hero" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <h1>Master <span class="golden">the Exam with</span> PPSC<br> Past Papers</h1>
    <button class="hero-btn">Access Past Papers</button>
</section>


<!-- ============ Content ============ -->
<section class="ppsc-section" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">

    <h2 class="main-heading">Discover Past Papers for All <br>PPSC Exams</h2>
    <p>These past papers are essential for preparation, as PPSC often designs 70% of its MCQ-based exams using previous papers. Our database includes past papers for a diverse range of roles previously offered by PPSC, providing an extensive variety of MCQ tests to enhance your readiness. Each paper consists of 100 MCQs, divided into manageable sets of 20 questions, allowing for efficient and focused learning. Additionally, detailed explanations accompany each question, helping aspirants understand concepts thoroughly. Candidates can attempt these MCQs to assess their knowledge, instantly view correct answers, and learn from the explanations provided. Below, you'll find PPSC past papers organized by category to support your preparation.</p>


    <h2 class="main-heading">Need Help? Check These FAQs</h2>
    <p>FAQs play a vital role in websites by providing quick and clear answers to common user questions, improving navigation and user experience while reducing the need for direct support. They enhance trust, streamline access to information, and boost SEO by addressing relevant queries. On exam websites, FAQs guide users on topics like registration, study materials, and exam preparation, ensuring accessibility and engagement while fostering credibility.</p>


    <!-- ============ FAQ ============ -->
    <div class="faq-list" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">

        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-label">Question</div>
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">1</span>
                <span class="faq-text">How can I download PPSC past papers from this website?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>To download PPSC past papers, visit the PPSC Past Papers section on the website, select the desired subject or year, and click the download button. Ensure you are logged in if required for access.</p>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">2</span>
                <span class="faq-text">Can I find past papers for specific years or exams?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>Yes, our PPSC past papers are organized by year and exam type, making it easy to find the specific papers you need for your preparation.</p>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">3</span>
                <span class="faq-text">Where can I search for a specific PPSC past paper?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>Use the search bar on the PPSC Past Papers page to quickly find specific papers by entering the subject, year, or exam name.</p>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span class="faq-num">4</span>
                <span class="faq-text">Do I need an account to view the past papers?</span>
                <span class="faq-arrow">&#9662;</span>
            </div>
            <div class="faq-answer">
                <div class="faq-label">Answer</div>
                <p>Some past papers are freely accessible, while others may require you to create a free account on the website to view or download them.</p>
            </div>
        </div>

    </div>

    <button class="action-btn" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">Get Answers</button>

</section>


<?php include 'includes/footer.php'; ?>


<script src="js/navbar.js"></script>
<script src="js/footer.js"></script>

<!-- FAQ accordion -->
<script>
function toggleFaq(element) {
    const answer = element.nextElementSibling;
    answer.classList.toggle('active');
    element.classList.toggle('open');
}
</script>

</body>
</html>