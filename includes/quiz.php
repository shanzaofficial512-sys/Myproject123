<?php
$questions = [
  [
    "question" => "Which country is known as the Land of the Rising Sun?",
    "options" => ["A) China", "B) South Korea", "C) Japan"],
    "answer" => 2
  ],
  [
    "question" => "Which city is known as the 'City of Lights' in Pakistan?",
    "options" => ["A) Lahore", "B) Karachi", "C) Islamabad"],
    "answer" => 0
  ]
];

if (!isset($_SESSION['current'])) {
  $_SESSION['current'] = 0;
  $_SESSION['score'] = 0;
}

$current = $_SESSION['current'];
$total   = count($questions);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['option'])) {
    if ($_POST['option'] == $questions[$current]['answer']) {
      $_SESSION['score']++;
    }
  }
  $_SESSION['current']++;
  $current = $_SESSION['current'];
}

$totalScore       = $total;
$correctAnswers   = $_SESSION['score'];
$incorrectAnswers = $totalScore - $correctAnswers;
$percentage       = ($correctAnswers / $totalScore) * 100;
?>

<!-- Quiz Section Start -->
<section class="quiz-wrapper">
  <div class="quiz-flex">

    <!-- Quiz Section -->
    <div class="quiz-container">
      <h2 class="quiz-title">Start Quiz Button</h2>
      <div class="subtitle">Good Luck</div>

      <?php if ($current == 0): ?>
        <form method="post">
          <button type="submit" class="start-btn">Start The Quiz</button>
        </form>

      <?php elseif ($current < $total): ?>
        <form method="post">
          <div class="question-box">
            <strong><?php echo $questions[$current]['question']; ?></strong>
            <div class="quiz-radio-options">
              <?php foreach ($questions[$current]['options'] as $index => $option): ?>
                <label>
                  <input type="radio" name="option" value="<?php echo $index; ?>" required>
                  <?php echo $option; ?>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <button type="submit" class="next-btn">Next &#10140;</button>
        </form>

      <?php else: ?>
        <h2 class="quiz-title">Quiz Completed!</h2>
        <p>Your score: <?php echo $_SESSION['score']; ?> / <?php echo $total; ?></p>
        <?php session_destroy(); ?>
      <?php endif; ?>
    </div>

    <!-- Result Section -->
    <div class="result-section">
      <h2 class="quiz-title">Result</h2>
      <p>The result section of a quiz on an exams website provides detailed feedback on a user's performance. It typically includes the total score, correct and incorrect answers, and percentage achieved. This helps users identify strengths and areas for improvement, supporting effective preparation.</p>

      <div class="result-details">
        <span><strong>Total Score:</strong> <?php echo $totalScore; ?></span>
        <span><strong>Correct Answers:</strong> <?php echo $correctAnswers; ?></span>
        <span><strong>Incorrect Answers:</strong> <?php echo $incorrectAnswers; ?></span>
        <span><strong>Percentage:</strong> <?php echo round($percentage, 2); ?>%</span>
      </div>

      <div class="btn-group">
        <button class="quiz-btn" onclick="checkAnswer()">Check Your Answer</button>
        <button class="quiz-btn" onclick="backToQuiz()">Back To Quiz</button>
        <button class="quiz-btn try-btn" onclick="tryAgain()">Try Again</button>
      </div>
    </div>

  </div>
</section>

<script>
  function reviewAnswers() { alert("Redirecting to detailed answer review..."); }
  function backToQuiz() { location.reload(); }
  function tryAgain() { window.location.href = "index.php"; }
</script>
<!-- Quiz Section End -->