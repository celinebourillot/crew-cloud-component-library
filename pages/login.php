<?php

include '../components/header.php';

?>


<section class="container">
    <div class="login__logo">
        <span class="icon icon-logo_new"></span>
    </div>

    <div class="columns">
        <div class="column">
            <div class="box">
                <div class="box__title is-primary"><span class="icon icon-icon_f502"></span> Log In</div>
                <div class="medium-padding">
                    <h4>Already registered ?</h4>
                    <p>
                        To gain access to Crew Cloud, enter your email address and
                        password below.
                    </p>
                </div>

                <hr class="separator" />

                <div class="medium-padding">
                    <label for="">Email address</label>
                    <input type="text" name="" id="" />

                    <label for="">Password</label>
                    <input type="text" name="" id="" />

                    <a href="homepage.php" class="btn">
                        <div class="btn__inside">
                            <span class="btn__text">Enter</span>
                            <span class="btn__arrow"></span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="box__title is-secondary"><span class="icon icon-Icon_f4ff"></span> Register</div>
                <div class="medium-padding">
                    <h4>Not registered ?</h4>
                    <p>
                        If you want to register an account on Crew Cloud, please enter
                        your staff number and select the base you belong to.
                    </p>
                </div>

                <hr class="separator" />

                <div class="medium-padding">
                    <label for="">Staff number</label>
                    <input type="text" name="" id="" />

                    <label for="">Based in</label>
                    <input type="text" name="" id="" />

                    <div class="btn">
                        <div class="btn__inside">
                            <span class="btn__text">Register</span>
                            <span class="btn__arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="medium-padding-tb">
        <hr class="separator separator--gray" />
    </div>

    <div class="text-content align-center">
        <h4 class="no-padding">If you have forgotten your password you can reset it here.</h4>

        <div class="btn normal-margin">
            <div class="btn__inside">
                <span class="btn__text">Reset my password</span>
                <span class="btn__arrow"></span>
            </div>
        </div>

        <p>If you have any difficulty registering or logging into your account, please contact the CrewCloud IFR Team via email <a href="crewcloud@alphalsg.co.uk">crewcloud@alphalsg.co.uk</a></p>
    </div>


</section>

</main>

</body>

</html>