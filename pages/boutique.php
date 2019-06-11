<?php

include '../components/generic/header.php';
include '../components/generic/navbar.php';

?>

<main>
    <section class="container">

        <div class="normal-padding">

        <div class="breadcrumb">

            <ul>
                <li><a href="">Homepage</a></li>
                <li><a href="">Product ranges</a></li>
                <li>Boutique</li>
            </ul>

        </div>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/generic/hero.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/boutique/categories.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/boutique/tabs.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/boutique/special-offers.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/generic/feedback-tips.php'; 
            ?>
        </div>

        
    </section>
</main>

<?php

include '../components/generic/footer.php';

?>