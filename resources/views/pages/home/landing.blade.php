@extends('landing')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            Please select your region<br />
            <select>
                <option>Australia</option>
            </select>
        </div>
        <div class="col-sm-6 text-right">
            @if (Auth::user())
            <a class="btn" href="/account">MY ACCOUNT</a>
            @else
            <a class="btn" href="/account/login">LOGIN</a>
            @endif
            <a href="https://www.facebook.com/medlabAUS"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/medlab_clinical/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/medlabclinical"><i class="fa fa-twitter"></i></a>
            <a href="http://www.linkedin.com/company/medlab-pty-ltd?trk=prof-following-company-logo"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 center-block text-left">
            <div class="portal-button products">
                <a href="/nutraceuticals/products">
                    <h1>Products</h1>
                    <img src="/img/front-page/portal-products.png" class="img-responsive" alt="" />
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 center-block text-center">
            <div class="portal-button research">
                <a href="/research">
                    <h1>Research</h1>
                    <img src="/img/front-page/portal-research.png" class="img-responsive" alt="" />
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 center-block text-right">
            <div class="portal-button corporate">
                <a href="/corporate">
                    <h1>Corporate</h1>
                    <img src="/img/front-page/portal-corporate.png" class="img-responsive" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
