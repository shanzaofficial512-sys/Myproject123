// Dashboard slider - prev/next button click
const slider   = document.getElementById('subjectsSlider');
const prevBtn  = document.getElementById('prevBtn');
const nextBtn  = document.getElementById('nextBtn');

const scrollAmount = 220;   // Ek card ki width (200) + gap (20)

// Next button - right scroll
nextBtn.addEventListener('click', function() {
    slider.scrollLeft += scrollAmount;
});

// Previous button - left scroll
prevBtn.addEventListener('click', function() {
    slider.scrollLeft -= scrollAmount;
});