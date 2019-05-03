<nav class="navbar">
    <div class="columns">
        <div class="column is-narrow navbar__logo">
            <a href="homepage.php"> 
                <span class="icon icon-logo_new"></span>
            </a>
        </div>
        <div class="column">

            <div class="navbar__container">

                <ul class="navbar__menu is-hidden-mobile">
                    <li class="navbar__menu__dropdown"><a href="">Product ranges</a></li>
                    <li><a href="">Sales incentives</a></li>
                    <li class="navbar__menu__dropdown"><a href="">Training</a></li>
                    <li class="navbar__menu__dropdown"><a href="">Crew room</a></li>
                    <li><a href="">News</a></li>
                    <li class="navbar__menu__dropdown"><a href="">OMG!</a></li>
                </ul>

                <div class="navbar__search search">
                    <input type="text" placeholder="Search" />
                    <div class="btn btn--icon">
                        <span class="icon icon-icon_f002"></span>
                    </div>
                </div>

            </div>

        </div>

        <div class="navbar__account column is-narrow">

            <div class="d-flex">
                <span class="icon icon-icon_f502"></span>
                <div class="navbar__account__text">
                    <p class="no-padding"><strong>Welcome</strong></p>
                    <p class="no-padding">Joe Bloggs</p>
                </div>
            </div>

        </div>
    </div>
</nav>

<a role="button" className="navbar-burger burger" aria-label="menu" data-target="mobile-menu">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
</a>

<!--<nav class="navbar-mobile">                   
                    
                <div className={!this.state.isOpen ? "mobile-menu display-none" : "mobile-menu" } ref={this.targetRef}>
                    
                    <button className="close-btn" onClick={this.hideMenu}>X Close</button>
          
                </div>
            </nav>-->