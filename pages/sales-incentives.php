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
                    <li>Sales incentives</li>
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
                include '../components/sales/current-incentives.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/sales/expired-incentives.php'; 
            ?>
        </div>
       
    </section>
</main>

<?php

include '../components/generic/footer.php';

?>