<?php
require 'common.php'; // Include the common functions
displayHead("About Marvel Rivals"); // Set the page title
displayMenu(); // Display the Bootstrap-styled navbar
?>

<section class="container my-5">
    <h1 class="text-center mb-4">About Marvel Rivals</h1>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <p class="lead">
                Marvel Rivals is a brand new 6v6 team-based shooter featuring an extensive roster of heroes and villains from the Marvel Universe. Players get the chance to engage in exciting, fast-paced battles, using unique character abilities and synergies to dominate the battlefields before them!
            </p>
            <p>
                The game features a destructible environment, allowing for dynamic combat strategies. With fan favorite heroes like <strong>Wolverine, Spider-Man, and The Hulk</strong>, each match offers a fresh experience as players experiment with different team compositions and mechanics.
            </p>
            <p>
                Whether you're teaming up with friends or climbing the competetive ranks in high-stake ranked matches, <strong>Marvel Rivals</strong> brings an exciting twist to the hero shooter genre. Stay tuned for updates on new maps, game modes, and monthly seasonal events!
            </p>
        </div>
    </div>
</section>

<!-- Carousel Section -->
<section class="container my-5">
    <h2 class="text-center mb-4">Marvel Rivals - Screenshots & Videos</h2>

    <div id="marvelCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#marvelCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#marvelCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#marvelCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 (Image) -->
            <div class="carousel-item active">
                <img src="img/mr2.avif" class="d-block w-100" alt="Marvel Rivals Concept Art">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Marvel Rivals - Concept Art</h5>
                    <p>Explore the breathtaking visuals of Marvel Rivals.</p>
                </div>
            </div>

            <!-- Slide 2 (Image) -->
            <div class="carousel-item">
                <img src="img/mr4.webp" class="d-block w-100" alt="Marvel Rivals Gameplay">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Marvel Rivals - Concept Art</h5>
                    <p>Experience fast-paced 6v6 battles with your favorite heroes.</p>
                </div>
            </div>

            <!-- Slide 3 (Video) -->
            <div class="carousel-item">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/_C2TYefAhSc" title="Marvel Rivals Gamepley Review" allowfullscreen></iframe>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Marvel Rivals - Gameplay Review</h5>
                    <p>Watch the thrilling action unfold in a official gameplay review from IGN.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#marvelCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#marvelCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<?php displayFooter("Marvel Rivals Fan Site by Sa'Cairo Bonner"); ?>