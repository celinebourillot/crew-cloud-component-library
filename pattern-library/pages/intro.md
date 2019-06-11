# Documentation

Pattern Library for Crew Cloud new design.
<h3>Live template pages</h3>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/login.php" target="_blank">Login</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/homepage.php" target="_blank">Homepage</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/boutique.php" target="_blank">Boutique</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/product.php" target="_blank">Single Product</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/training-academy.php" target="_blank">Training</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/training-topic.php" target="_blank">Training Modules</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/sales-incentives.php" target="_blank">Sales Incentives</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/forum.php" target="_blank">Forum (single question and question list)</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/events.php" target="_blank">Events</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/faqs.php" target="_blank">FAQs</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/news.php" target="_blank">News</a><br/>
<a href="https://cosmosdigital.co.uk/crew-cloud/pages/omg-awards.php" target="_blank">OMG Awards</a>

<h3>Grid System</h3>

This project uses the grid system from Bulma :<br/>
<a href="https://bulma.io/documentation/columns/" target="_blank">Bulma Grid Documentation</a>

<h3>Sliders and carousels</h3>

All the slider and carousels are built with Slick slider.
The parameters of each carousel can be found in src/js/main.js.
For more information on the options available :<br/>
<a href="https://kenwheeler.github.io/slick/" target="_blank">Slick Carousel Documentation</a>

<h3>Class Helpers</h3>

This project uses class helpers and variables to set up font sizes and paddings/margins easily to make sure they are consistent accross all the pages and components.

Font sizes can be found in src/scss/helpers/_typography.scss

Padding/Margin and other helpers are in src/scss/helpers/_helpers.scss

<h3>Responsive Breakpoints</h3>

The available breakpoints are as follow :

    piad: 320px,
    mb: 576px, 
    mobile: 769px, // Bulma mobile
    tablet: 1023px, // Bulma tablet
    desktop: 1215px, // Bulma desktop
    wide: 1407px, // Bulma widescreen

They can be used with the mq mixin, or with Bulma classes.

mq mixins example use :

    //apply until tablet breakpoint
    @include mq($until: tablet) {
        font-size: $s2-text;
        line-height: $s2-lh;
    }
    // apply from desktop breakpoint up
    @include mq($from: desktop) {
        font-size: $s2-text;
        line-height: $s2-lh;
    }

<a href="https://bulma.io/documentation/modifiers/responsive-helpers/" target="_blank">Bulma Responsive Helpers Documentation</a>