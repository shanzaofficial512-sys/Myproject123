<?php
$page_title = "Islamic Studies MCQs - Past Papers | SkillSphere";
$page_description = "Islamic Studies MCQs from PPSC, FPSC, NTS, CSS past papers. Repeated MCQs with answers for competitive exam preparation.";
?>

<?php include 'includes/header.php'; ?>

<!-- Islamic Studies CSS -->
<link rel="stylesheet" href="css/islammcqs.css">

<!-- Hero Banner -->
<section class="islamic-hero" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1499">
    <h1>Your Ultimate <span>Guide to Islamic<br>Studies</span> for Competitive Exams</h1>
</section>

<!-- Intro Paragraph -->
<section class="islamic-intro" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <p >
        Islamic Studies holds a significant place in the preparation of PPSC, FPSC, NTS, CSS, and other government job exams
        in Pakistan. It is an essential component of the General Knowledge (GK) section, contributing valuable marks that can
        influence a candidate's overall ranking. Understanding Islamic teachings, history, and principles is not only beneficial
        for academic success but also plays a crucial role in developing a strong moral foundation for individuals pursuing
        public service roles.
    </p>
</section>

<!-- MCQs Section -->
<section class="islamic-mcqs-section" data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <h2>Repeated MCQs from Islamic Studies Past Papers</h2>

    <?php
    // MCQs Data Array
    // Format: question, options array (label => text), correct option label, understand link
    $mcqs = [
        [
            'question' => 'What is the first pillar of Islam?',
            'options'  => [
                'A' => 'Zakat',
                'B' => 'Salah',
                'C' => 'Shahada',
            ],
            'correct'  => 'C',
            'link'     => '#',
        ],
        [
            'question' => 'What is the meaning of the word "Zakat"?',
            'options'  => [
                'A' => 'Purification',
                'B' => 'Charity',
                'C' => 'Faith',
            ],
            'correct'  => 'A',
            'link'     => '#',
        ],
        [
            'question' => 'How many Makki Surahs are there in the Holy Quran?',
            'options'  => [
                'A' => '114',
                'B' => '86',
                'C' => '26',
            ],
            'correct'  => 'B',
            'link'     => '#',
        ],
        [
            'question' => 'In which year did the Battle of Badr take place?',
            'options'  => [
                'A' => '1 AH',
                'B' => '3 AH',
                'C' => '2 AH',
            ],
            'correct'  => 'C',
            'link'     => '#',
        ],
        [
            'question' => 'How many Surahs are in the Holy Quran?',
            'options'  => [
                'A' => '112',
                'B' => '114',
                'C' => '116',
            ],
            'correct'  => 'B',
            'link'     => '#',
        ],
        [
            'question' => 'Which is the longest Surah of the Holy Quran?',
            'options'  => [
                'A' => 'Surah Al-Imran',
                'B' => 'Surah Al-Nisa',
                'C' => 'Surah Al-Baqarah',
            ],
            'correct'  => 'C',
            'link'     => '#',
        ],
        [
            'question' => 'How many times is the word "Quran" mentioned in the Quran?',
            'options'  => [
                'A' => '70',
                'B' => '68',
                'C' => '72',
            ],
            'correct'  => 'A',
            'link'     => '#',
        ],
        [
            'question' => 'In which city was the Holy Prophet (PBUH) born?',
            'options'  => [
                'A' => 'Madinah',
                'B' => 'Makkah',
                'C' => 'Taif',
            ],
            'correct'  => 'B',
            'link'     => '#',
        ],
        [
            'question' => 'What is the total number of Prophets mentioned in the Holy Quran?',
            'options'  => [
                'A' => '25',
                'B' => '28',
                'C' => '30',
            ],
            'correct'  => 'A',
            'link'     => '#',
        ],
        [
            'question' => 'Which Surah is called the heart of the Holy Quran?',
            'options'  => [
                'A' => 'Surah Al-Fatiha',
                'B' => 'Surah Yaseen',
                'C' => 'Surah Al-Kahf',
            ],
            'correct'  => 'B',
            'link'     => '#',
        ],
    ];
    ?>

    <?php foreach ($mcqs as $index => $mcq): ?>
    <div class="mcq-card">
        <!-- Question Row -->
        <div class="mcq-question-row">
            <span class="mcq-icon">&#10003;</span>
            <span class="mcq-question-text"><?php echo htmlspecialchars($mcq['question']); ?></span>
            <span class="mcq-arrow">&#8679;</span>
        </div>

        <!-- Options Row -->
        <div class="mcq-options-row">
            <?php foreach ($mcq['options'] as $label => $text): ?>
            <span class="mcq-option <?php echo ($label === $mcq['correct']) ? 'correct' : ''; ?>">
                <span class="option-label"><?php echo htmlspecialchars($label); ?>)</span>
                <?php echo htmlspecialchars($text); ?>
            </span>
            <?php endforeach; ?>
        </div>

        <!-- Understand Link -->
        <a href="<?php echo htmlspecialchars($mcq['link']); ?>" class="mcq-understand-link">
            Understand More About This Mcqs..
        </a>
    </div>
    <?php endforeach; ?>

</section>

<?php include 'includes/footer.php'; ?>
