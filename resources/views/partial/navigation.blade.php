<!-----------------------------------------------------------------------------------
--
-- Login Navigation
--
------------------------------------------------------------------------------------->
<nav class="medlab_navbar_login_wrapper">
    <div class="container medlab_navbar_login_container">
        <ul class="nav navbar-nav col-md-9 col-sm-8 col-xs-8">
            <li>
                <a href="mailto:hello@medlab.co?Subject=Medlab Inquiry" class="medlab_navbar_login_item">
                    <span class="glyphicon glyphicon-envelope medlab_navbar_login_glyphcon" aria-hidden="true"></span>
                    hello@medlab.co
                </a>
                <a href="#" class="medlab_navbar_login_item">
                    <span class="glyphicon glyphicon-earphone medlab_navbar_login_glyphcon" aria-hidden="true"></span>
                    1300 369 570
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/medlabAUS"  target="_blank" class="medlab_navbar_login_item">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/medlab-pty-ltd?trk=prof-following-company-logo" target="_blank" class="medlab_navbar_login_item">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/medlab_clinical/" target="_blank" class="medlab_navbar_login_item">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://twitter.com/medlabclinical" target="_blank" class="medlab_navbar_login_item">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav col-md-3 col-sm-4 col-xs-4">
            <li>
                @if (Auth::guest())
                    <a href="/account/login" class="medlab_navbar_login_item">
                        Login | Register
                    </a>
                @else
                    <li class="dropdown">
                        <a href="#" class="medlab_navbar_login_item dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->customer->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/account">My Account</a></li>
                            <li><a href="/account/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif

                <a href="/shoppingcart/cart" class="medlab_navbar_login_item medlab_navbar_login_shopping">
                    <span class="glyphicon glyphicon-shopping-cart medlab_navbar_login_glyphcon" aria-hidden="true"></span>
                    @if ($shoppingCart->subtotal != 0)
                        ${{ round($shoppingCart->subtotal*11/10, 2) }}
                    @else
                        $0.00
                    @endif
                </a>
            </li>
        </ul>
    </div>
</nav>


<!-----------------------------------------------------------------------------------
--
-- Main Navigation
--
------------------------------------------------------------------------------------->
<nav class="navbar navbar-default medlab_navbar_wrapper">
    <div class="container medlab_navbar_container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#medlab-main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="medlab_navbar_brand" href="/">
                <img class="img-responsive medlab_navbar_logo" alt="Brand" src="/img/logo_site.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="medlab-main-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/about" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        About Us
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/about-medlab">About Medlab</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/news">News</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/who-we-are">Who we are</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/our-past">Our Past</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/a-new-era">A New Era...</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/executive-team">Executive Team</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/consulting-team">Consulting Team</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/scientific-team">Scientific Team</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/board-of-directors">Board of Director</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/letter-from-ceo">Letter From CEO</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/careers">Careers</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/research" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        Research
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research">Research</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/medlab-cell-line">Medlab's Probiotic Genera</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/medlab-delivery-platform">Medlab Delivery Platform</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/why-medlab">Why Medlab</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/the-medlab-solution">The Medlab Solution</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/patents">Patents</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/clinical-trials">Clinical Trials</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/nutraceuticals/products" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        Products
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><p align="center">Nutraceuticals</p></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/products">Name</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/categories">Categories</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/ingredients">Ingredients</a></li>
                        <li role="separator" class="divider"></li>
                        <li><p align="center">Pharmaceuticals</p></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/developement">Products in Development</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/ems/nanabis">SAS</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/praceducationalresource">Practitioner Educational Resource</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/nrgbiotic">NRGBiotic Showcase</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        Investors
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/investor">Investor Center</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/investor/asx-announcements">ASX announcements</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/investor/corporate-governance">Corporate Governance</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/investor/share-price">Share Price</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        Education
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/education/publications">Publications</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/education/webinars">Webinars</a></li>
                        @if ( (Auth::guest() == false) && (Auth::user()->group == 'Practitioner') )
                            <li><a class="medlab_navbar_dropdown_menu_item" href="/education/practitioner-education">Practitioner Education</a></li>
                            @endif

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle medlab_navbar_dropdown" data-toggle="dropdown">
                        Efficacy
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/efficacy/efficacy">Magazine & Articles</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



