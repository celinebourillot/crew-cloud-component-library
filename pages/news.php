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
                    <li>News</li>
                </ul>

            </div>

        </div>

        <div class="normal-padding">
            <?php
                include '../components/generic/hero.php'; 
            ?>
        </div>

        <div class="normal-padding">

            <div class="columns is-gapless is-multiline">
                <div class="column is-8 is-12-touch">
                    <div class="small-padding">
                        <div class="box">
                            <div class="medium-padding">
                                <?php
                                    include '../components/cards/card-news.php'; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4 is-12-touch">
                    <div class="small-padding">
                        <div class="card is-secondary">
                            <div class="medium-padding">
                                <h4>Search news</h4>
                                <div class="sidebar__search search">
                                    <input type="text" placeholder="Search" />
                                    <div class="btn btn--icon">
                                        <span class="icon icon-icon_f002"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="normal-margin-top">Categories</h4>

                        <ul class="list list--arrows">
                            <li><a href="">News</a></li>
                            <li><a href="">Beauty</a></li>
                            <li><a href="">Incentives</a></li>
                            <li><a href="">Noticeboard</a></li>
                            <li><a href="">OMG</a></li>
                            <li><a href="">Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php

include '../components/generic/footer.php';

?>