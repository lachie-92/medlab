{{-- MAIN NAVIGATION --}}
<nav class="navbar navbar-default medlab_navbar_wrapper">
    <div class="container-fluid medlab_navbar_container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#medlab-main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="medlab_navbar_brand" href="/">

            </a>
        </div>

        <div class="collapse navbar-collapse" id="medlab-main-navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle medlab_navbar_dropdown">
                        Home
                    </a>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    <a href="/about" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
                        About Us
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/about/about-medlab">About Medlab</a></li>
                    </ul>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    <a href="/contact" class="dropdown-toggle medlab_navbar_dropdown">
                        Contact
                    </a>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    <a href="/nutraceuticals/products" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
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
                        <li role="separator" class="divider"></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/nutraceuticals/praceducationalresource">Practitioner Educational Resource</a></li>
                    </ul>
                </li>
                <li class="separator visible-md visible-lg">
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
                        Education
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/education/publications">Publications</a></li>
                    </ul>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    <a href="/research" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
                        Research
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research">Research</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/medlab-cell-line">Medlab's Probiotic Genera</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/medlab-delivery-platform">NanoCelle Delivery System</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/why-medlab">Why Medlab</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/the-medlab-solution">The Medlab Solution</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/patents">Patents</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/clinical-trials">Clinical Trials</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/research/scientific-team">Scientific Team</a></li>
                    </ul>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
                        Corporate
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left medlab_navbar_dropdown_menu">
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate">Corporate Center</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate/asx-announcements">ASX announcements</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate/corporate-governance">Corporate Governance</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate/share-price">Share Price</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate/executive-team">Executive Team</a></li>
                        <li><a class="medlab_navbar_dropdown_menu_item" href="/corporate/consulting-team">Consulting Team</a></li>
                    </ul>
                </li>
                <li class="vr"></li>
                <li class="dropdown">
                    @if (Auth::user())
                    <a href="/account" class="dropdown-toggle medlab_navbar_dropdown">
                        My Account
                    </a>
                    @else
                    <a href="/account/login" class="dropdown-toggle medlab_navbar_dropdown" @if (empty($disableDropdown)) data-toggle="dropdown" @endif>
                        Login or Register
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>



