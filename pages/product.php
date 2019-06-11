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
                    <li><a href="">Boutique</a></li>
                    <li>Emma hardie skincare set</li>
                </ul>

            </div>

        </div>

        <div class="normal-padding">
            <?php
                include '../components/boutique/product-block.php'; 
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