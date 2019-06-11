<div class="tabs-container">
    <div class="title-with-link">

        <ul class='tabs'>
            <li><a href='#tab1'>Featured</a></li>
            <li><a href='#tab2'>New in</a></li>
            <li><a href='#tab3'>Out of stock</a></li>
        </ul>

        <a href="" class="small-link">view all</a>
    </div>
    <div class="tab-container medium-padding">
        <div id='tab1' class="tab-container__tab">
            <?php
                include '../components/boutique/product-slider.php'; 
            ?>
        </div>
        <div id='tab2' class="tab-container__tab">
            <p>This is the 2nd tab.</p>
        </div>
        <div id='tab3' class="tab-container__tab">
            <p>And this is the 3rd tab.</p>
        </div>
    </div>
</div>