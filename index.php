<?php
require 'common.php'; // Include the common functions
displayHead("Marvel Rivals - Home"); // Set the page title
displayMenu(); // Display the Bootstrap-styled navbar
?>

<section class="container my-5">
    <h2 class="text-center mb-4">Welcome to the Marvel Rivals Hub</h2>
    <p class="text-center">Marvel Rivals is a brand new 6v6 team-based shooter featuring iconic Marvel characters.</p>
</section>

<!-- Trailer Section -->
<section class="container my-5 text-center">
    <h3 class="text-center mb-4">Click below to Watch the Marvel Rivals Cinematic Trailer</h3>

    <!-- Video Carousel -->
    <div class="ratio ratio-16x9 position-relative">
        <iframe src="https://www.youtube.com/embed/FFWzIbkXxBU" 
            title="Marvel Rivals Cinematic Trailer" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
    </div>
</section>

<?php displayFooter("Marvel Rivals Fan Site by Sa'Cairo Bonner");  // Display the footer ?>
