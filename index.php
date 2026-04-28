<?php session_start(); ?>
<?php include 'form.php'; ?>
<?php include 'includes/header.php'; ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<!-- ============ Hero Section Start ============ -->
<div class="hero"  data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <h1>Best Place to Prepare <br> for Competitive Exams</h1>
    <p>SkillSphere is a Digital Crack competitive exams for government exams with interactive quizzes, in-depth answers, and previous paper analysis for PPSC and FPSC tests live and MCQs</p>
    <a href="#quiz" class="btn">Prepare For Exams</a>
</div>
<!-- ============ Hero Section End ============ -->


<!-- ============ PPSC Mcqs Section Start ============ -->
<?php
$questions = [
    [
        "question" => "Which is the largest continent by area?",
        "options"  => ["Asia", "Europe", "Africa"],
        "answer"   => "Asia"
    ],
    [
        "question" => "Which planet is known as the Red Planet?",
        "options"  => ["Saturn", "Jupiter", "Mars"],
        "answer"   => "Mars"
    ],
    [
        "question" => "Which gas is most abundant in Earth's atmosphere?",
        "options"  => ["Oxygen", "Nitrogen", "Carbon Dioxide"],
        "answer"   => "Nitrogen"
    ],
    [
        "question" => "Which is the national flower of Pakistan?",
        "options"  => ["Sunflower", "Tulip", "Jasmine"],
        "answer"   => "Jasmine"
    ]
];
?>

<div class="container">

    <!-- Left side: MCQs -->
    <div class="left"  data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <h2>PPSC MCQs</h2>
        <div id="quiz">
            <?php foreach ($questions as $index => $q): ?>
                <div class="question">
                    <p><?php echo ($index + 1) . ". " . $q['question']; ?></p>
                    <div class="options">
                        <?php foreach ($q['options'] as $i => $opt):
                            $label = chr(65 + $i);
                        ?>
                            <span class="option" onclick="checkAnswer(this, '<?php echo $q['answer']; ?>')">
                                <?php echo $label . ") " . $opt; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Right side: Past Papers + Search -->
    <div class="right"  data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <div class="past-papers">
            <h3>PPSC Past Papers</h3>
            <p>Attempt quizzes featuring past papers for PPSC exams and deepen your understanding with topic-wise explanations.</p>
            <button onclick="alert('Redirecting to Past Papers...')">Explore PPSC Papers</button>
        </div>

        <div class="search-section">
            <h3>Search</h3>
            <div class="search-bar">
                <input type="text" placeholder="Search For Notes, PDFs and More">
                <button>&#128269;</button>
            </div>
        </div>
    </div>

</div>
<!-- ============ PPSC Mcqs Section End ============ -->

<!-- ============ Dashboard Section Start ============ -->
<section class="dashboard"  data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">

    <div class="dashboard-header">
        <h2>Dashboard</h2>
    </div>

    <!-- Slider wrapper -->
    <div class="slider-wrapper">

        <!-- Previous button -->
        <button class="slider-btn prev" id="prevBtn">&#10094;</button>

        <!-- Cards container (yahan scroll hota hai) -->
        <div class="subjects" id="subjectsSlider">

            <div class="subject-card">
                <div class="icon">&#128214;</div>
                <h3>Mathematics</h3>
            </div>

            <div class="subject-card">
                <div class="icon">&#129514;</div>
                <h3>Science</h3>
            </div>

            <div class="subject-card">
                <div class="icon">&#127891;</div>
                <h3>English</h3>
            </div>

            <div class="subject-card">
                <div class="icon">&#128187;</div>
                <h3>Computer Study</h3>
            </div>

            <!-- Naye 2 subjects -->
            <div class="subject-card">
                <div class="icon">&#128221;</div>
                <h3>Urdu</h3>
            </div>

            <div class="subject-card">
                <div class="icon">&#127465;&#127472;</div>
                <h3>Pakistan Studies</h3>
            </div>

        </div>

        <!-- Next button -->
        <button class="slider-btn next" id="nextBtn">&#10095;</button>

    </div>

</section>
<!-- ============ Dashboard Section End ============ -->


<!-- ============ Quiz Section ============ -->
<div id="quiz" ></div>
<?php include 'includes/quiz.php'; ?>


<!-- ============ Our Blog Section Start ============ -->

<section class="blog-section"  data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <h2 class="blog-title">Our Blog</h2>

    <!-- WRAP OLD CONTENT -->
    <div id="mainContent" class="fade-section">
        <div class="blog-cards">

            <!-- Blog Card 1 -->
            <div class="blog-card">
                <img src="images/blog1.jpg" alt="Blog 1">
                <div class="blog-content">
                    <p class="blog-author">&#128100; By Admin</p>
                    <h3>Everything You Need To Know About PPSC</h3>
                    <p class="blog-date">&#128197; January , 22 , 2025</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="blog-card">
                <img src="images/blog2.jpg" alt="Blog 2">
                <div class="blog-content">
                    <p class="blog-author">&#128100; By Admin</p>
                    <h3>Boost Your Exam Performance with These Strategies</h3>
                    <p class="blog-date">&#128197; January , 22 , 2025</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="blog-card">
                <img src="images/blog3.jpg" alt="Blog 3">
                <div class="blog-content">
                    <p class="blog-author">&#128100; By Admin</p>
                    <h3>Top Career Choices For A Bright Future</h3>
                    <p class="blog-date">&#128197; January , 22 , 2025</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>

        </div>

        <br>

        <button class="learn-btn" onclick="loadMore()" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">Load More</button>
    </div>

    <!-- NEW CONTENT (HIDDEN FIRST) -->
    <div id="newContent" class="fade-section" style="display:none;">
        <?php include 'new.php'; ?>
        <br>
        <button class="learn-btn" onclick="loadLess()">Load Less</button>
    </div>

</section>
<script>
function loadMore() {
    const main = document.getElementById("mainContent");
    const newC = document.getElementById("newContent");

    // Fade out main
    main.classList.add("fade-out");

    setTimeout(() => {
        main.style.display = "none";
        main.classList.remove("fade-out");

        // Show new content
        newC.style.display = "block";
        newC.classList.add("fade-out");

        // trigger reflow
        newC.offsetHeight;

        newC.classList.remove("fade-out");
        newC.classList.add("fade-in");
    }, 400);
}

function loadLess() {
    const main = document.getElementById("mainContent");
    const newC = document.getElementById("newContent");

    // Fade out new content
    newC.classList.add("fade-out");

    setTimeout(() => {
        newC.style.display = "none";
        newC.classList.remove("fade-out");

        // Show main content
        main.style.display = "block";
        main.classList.add("fade-out");

        main.offsetHeight;

        main.classList.remove("fade-out");
        main.classList.add("fade-in");
    }, 400);
}
</script>
<!-- ============ Our Blog Section End ============ -->


<!-- ============ Footer ============ -->
<?php include 'includes/footer.php'; ?>


<!-- ============ JavaScript Files ============ -->
<script src="js/navbar.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/footer.js"></script>

<!-- PPSC MCQs - check answer script -->
<script>
function checkAnswer(element, correctAnswer) {
    // Option text mein "A) " ya "B) " hata kar sirf word lo
    const selectedText = element.innerText.substring(3).trim();

    if (selectedText === correctAnswer) {
        element.classList.add('correct');     // Green background
    } else {
        element.classList.add('wrong');       // Red background
    }
}
</script>
<script>
  AOS.init();
</script>

</body>
</html>