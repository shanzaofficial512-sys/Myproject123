<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php
$page_title       = "Daily Current Affairs for Competitive Exam Preparation | SkillSphere";
$page_description = "Daily current affairs MCQs for PPSC, FPSC, NTS, CSS competitive exam preparation. Pakistan current affairs organized by month.";

// MCQs Data
$mcqs = [
    [
        'question' => 'Which country is known as the Land of the Rising Sun?',
        'options'  => ['A' => 'China', 'B' => 'South Korea', 'C' => 'Japan'],
        'correct'  => 'C',
        'link'     => '#',
    ],
    [
        'question' => 'Who was the first president of the United States?',
        'options'  => ['A' => 'Abraham Lincoln', 'B' => 'Thomas Jefferson', 'C' => 'George Washington'],
        'correct'  => 'C',
        'link'     => '#',
    ],
    [
        'question' => 'Who won the Nobel Peace Prize in 2020?',
        'options'  => ['A' => 'Greta Thunberg', 'B' => 'World Health Organization', 'C' => 'Malala Yousafzai'],
        'correct'  => 'B',
        'link'     => '#',
    ],
    [
        'question' => 'Who is the co-founder of Microsoft?',
        'options'  => ['A' => 'Bill Gates', 'B' => 'Steve Jobs', 'C' => 'Jeff Bezos'],
        'correct'  => 'A',
        'link'     => '#',
    ],
    [
        'question' => 'Who won the FIFA World Cup in 2018?',
        'options'  => ['A' => 'Brazil', 'B' => 'Germany', 'C' => 'France'],
        'correct'  => 'C',
        'link'     => '#',
    ],
    [
        'question' => 'What is the chemical symbol for water?',
        'options'  => ['A' => 'O2', 'B' => 'H2O', 'C' => 'CO2'],
        'correct'  => 'B',
        'link'     => '#',
    ],
];

// Topics list
$topics = [
    'Foreign Relations and International Affairs Mcqs',
    'Social Issues and Development Mcqs',
    'National Security and Defence Mcqs',
    'Economy and Finance Mcqs',
    'Law and Judiciary Mcqs',
];

// Months for dropdown
$months = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December',
];

$selected_month = $_GET['month'] ?? '';
?>

<?php include 'includes/header.php'; ?>

<!-- Current Affairs CSS -->
<link rel="stylesheet" href="css/current-affairs.css">

<!-- Hero Banner -->
<section class="ca-hero"   data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <h1>Daily <span>Current Affairs</span> for<br>Competitive Exam Preparation</h1>
</section>

<!-- Main Content -->
<div class="ca-content">

    <!-- Why current affairs -->
    <h2 data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">Why current affairs are essential for competitive exams ?</h2>
    <p data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
        Current affairs are essential for competitive exams because they assess a candidate's awareness of national and
        international events, which is crucial for roles requiring decision-making and analytical skills. They help aspirants
        stay informed about politics, economy, science, and technology, which are frequently included in exams. Additionally,
        knowledge of current affairs enhances a candidate's ability to write essays, participate in group discussions, and perform
        well in interviews. Staying updated not only improves general knowledge but also boosts confidence, making it a key
        component of competitive exam preparation.
    </p>

    <!-- Current Affairs of Pakistan -->
    <h2 data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">Current Affairs Of Pakistan</h2>
    <p data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        Current affairs of Pakistan encompass the latest developments in politics, economy, society, and international relations,
        reflecting the country's dynamic environment. Key events include government policies, political shifts, economic challenges,
        and major social issues. Regular updates highlight national and international news, political decisions, economic reforms,
        and advancements in technology and culture. Understanding these affairs is crucial for exam aspirants, as they often form
        the basis of questions in competitive exams like PPSC, FPSC, and others.
    </p>

    <!-- Search Row -->
    <div class="ca-search-row"   data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <span class="ca-search-label">Find Updates on Specific Subjects</span>
        <div class="ca-search-input-wrap">
            <input type="text" placeholder="Search Here" id="caSearchInput">
            <button class="ca-search-btn" type="button" title="Search">&#128269;</button>
        </div>
        <button class="btn-pdf" type="button">Download PDF summaries</button>
    </div>

    <!-- MCQ Topics -->
    <h2>Multiple Choice Questions on Pakistan Current Affairs</h2>
    <ul class="ca-topics-list">
        <?php foreach ($topics as $i => $topic): ?>
        <li data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
            <span class="topic-num"><?php echo $i + 1; ?></span>
            <?php echo htmlspecialchars($topic); ?>
        </li>
        <?php endforeach; ?>
    </ul>

    <!-- Organized by Month Block -->
    <div class="ca-month-block">
        <h3>Current Affairs of Pakistan Organized by Month</h3>
        <p>Now it's time to share your latest Current Affairs MCQs with us.</p>
        <a href="submit-mcqs.php" class="btn-submit-here">Submit Here</a>
    </div>

    <!-- Month Dropdown -->
    <div class="ca-month-select-row">
        <label for="monthSelect">Organized by Month</label>
        <select id="monthSelect" class="ca-month-select" onchange="filterByMonth(this.value)">
            <option value="">Choose Month</option>
            <?php foreach ($months as $month): ?>
            <option value="<?php echo htmlspecialchars($month); ?>"
                <?php echo ($selected_month === $month) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($month); ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- MCQ Cards Grid -->
    <div class="ca-mcq-grid" id="mcqGrid"   data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <?php foreach ($mcqs as $mcq): ?>
        <div class="ca-mcq-card" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <!-- Question Row -->
            <div class="ca-mcq-question-row">
                <span class="mcq-icon">&#10003;</span>
                <span class="ca-mcq-question-text"><?php echo htmlspecialchars($mcq['question']); ?></span>
                <span class="ca-mcq-arrow">&#8679;</span>
            </div>
            <!-- Options -->
            <div class="ca-mcq-options-row" >
                <?php foreach ($mcq['options'] as $label => $text): ?>
                <span class="ca-mcq-option <?php echo ($label === $mcq['correct']) ? 'correct' : ''; ?>">
                    <?php echo htmlspecialchars($label); ?>) <?php echo htmlspecialchars($text); ?>
                </span>
                <?php endforeach; ?>
            </div>
            <!-- Understand link -->
            <a href="<?php echo htmlspecialchars($mcq['link']); ?>" class="ca-mcq-understand-link">
                Understand More About This Mcqs..
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Finish and Submit -->
    <div class="ca-finish-row"  >
        <button class="btn-finish" type="button" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">Finish and Submit</button>
    </div>

</div>

<script>
function filterByMonth(month) {
    if (month) {
        var url = new URL(window.location.href);
        url.searchParams.set('month', month);
        window.location.href = url.toString();
    }
}
  AOS.init();
</script>
<script>
  AOS.init();
</script>

<?php include 'includes/footer.php'; ?>
