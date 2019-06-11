<?php

include '../components/generic/header.php';
include '../components/generic/navbar.php';

?>

<main>
    <section class="container">

        <div class="normal-padding">
            <?php
                include '../components/homepage/hero-slider.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/homepage/related-pages.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/homepage/cta-blocks.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/homepage/homepage-content-blocks.php'; 
            ?>
        </div>
        
    </section>
</main>

<?php

include '../components/generic/footer.php';

?>