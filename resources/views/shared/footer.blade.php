<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <hr>
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-sm-12 mb-4 mb-md-0">
                <a href="https://www.thomasmore.be/" target="_blank"><img src="/assets/img/logo_tm.png" width="100px"
                                                                          height="auto" alt="Thomas More logo"></a>
            </div>
            <div class="col-lg-5 col-sm-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">IT Factory</h5>
                <p>De IT Factory is de gemeenschappelijke richting Elektronica/ICT – Toegepaste Informatica van Thomas
                    More hogeschool campus Geel.
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-sm-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/" class="text-dark">Home</a>
                    </li>
                    <li>
                        <a href="../projecten" class="text-dark">Projecten</a>
                    </li>
                    <li>
                        <a href="../contact" class="text-dark">Contact</a>
                    </li>
                    <li>
                        <a href="http://minecraft.weareitfactory.be/" class="text-dark" target="_blank">Minecraft</a>
                    </li>

                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-sm-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Socials</h5>
                <p>
                    <a href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE" data-toggle="tooltip"
                       data-placement="bottom" title="Thomas More - Toegepaste Informatica" target="_blank"><i
                            class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.facebook.com/ElektronicaICT.ThomasMoreBE" data-toggle="tooltip"
                       data-placement="bottom" title="Thomas More - Elektronica-ICT" target="_blank"><i
                            class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.instagram.com/itfactory_tmcampusgeel/" data-toggle="tooltip"
                       data-placement="bottom" title="IT Factory TM Campus Geel" target="_blank"><i
                            class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://itf.to/discord" title="ITF Discord" data-toggle="tooltip" data-placement="bottom"
                       target="_blank"><i class="fab fa-discord fa-2x"></i></a>
                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © {{date("Y")}} Copyright:
        <a class="text-dark" href="#">IT Factory</a>

        @guest
            <a class="text-dark float-right ml-1 mr-1" href="/login">
                <i class="fas fa-sign-in-alt"></i>
                Login</a>
            <a class="text-dark float-right ml-1 mr-1" href="/register"><i class="fas fa-signature"></i>Register</a>
        @endguest
        @auth
            <a class="text-dark float-right ml-1 mr-1 dropdown-toggle" href="#!" data-toggle="dropdown">
                {{ auth()->user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="/main"><i class="fas fa-home"></i> Main</a>
                @if(auth()->user()->admin)
                    <a class="dropdown-item" href="/admin/cms"><i class="fas fa-database"></i> CMS</a>
                @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/user/profile"><i class="fas fa-user-cog"></i> Update Profile</a>
                <a class="dropdown-item" href="/user/password"><i class="fas fa-key"></i> New Password</a>
                {{--                    <a class="dropdown-item" href="/user/history"><i class="fas fa-box-open"></i>Order history</a>--}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        @endauth
    </div>
</footer>
<!-- Footer -->
