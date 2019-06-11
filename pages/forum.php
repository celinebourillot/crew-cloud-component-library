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
                    <li><a href="">Crew room</a></li>
                    <li>Crew forum</li>
                </ul>

            </div>

        </div>

        <div class="normal-padding">
            <?php
                include '../components/generic/hero.php'; 
            ?>
        </div>

        <div class="normal-padding">
            <div class="d-flex justify-sides">
                <a href="" class="simple-link">Back to questions</a>
                <a href="" class="simple-link">
                    <div class="d-flex align-items">
                        <span class="icon icon--default icon-icon_f02f"></span> Print page
                    </div>
                </a>
            </div>
        </div>

        <div class="normal-padding">
            <?php
                include '../components/forum/question.php'; 
            ?>
        </div>
        
        <div class="normal-padding">
            <?php
                include '../components/forum/question-list.php'; 
            ?>
        </div> 

    </section>
</main>

<?php

include '../components/generic/footer.php';

?>