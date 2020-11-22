@php

        $home_banner = "style=background-image:url(/assets/images/home-bsn-banner.jpg)";

@endphp
@extends('layouts.template_02')
@section('main')
<main id="main" class="site-main home-main business-main">
<div class="site-banner" {{$home_banner}}>
    <div class="container">
        <div class="site-banner__content">
            <h1 class="site-banner__title">{{__('Business Listing')}}</h1>
            <form action="#" class="site-banner__search layout-02">
                <div class="field-input">
                    <label for="input_search">Find</label>
                    <input class="site-banner__search__input open-suggestion" id="input_search" type="text" placeholder="Ex: fastfood, beer" autocomplete="off">
                    <input type="hidden" name="category[]" id="category_id">
                    <div class="search-suggestions category-suggestion">
                        <ul>
                            <li><a href="#"><span>{{__('Loading...')}}</span></a></li>
                        </ul>
                    </div>
                </div><!-- .site-banner__search__input -->
                <div class="field-input">
                    <label for="location_search">{{__('Where')}}</label>
                    <input class="site-banner__search__input open-suggestion" id="location_search" type="text" placeholder="Your city" autocomplete="off">
                    <input type="hidden" id="city_id">
                    <div class="search-suggestions location-suggestion">
                        <ul>
                            <li><a href="#"><span>{{__('Loading...')}}</span></a></li>
                        </ul>
                    </div>
                </div><!-- .site-banner__search__input -->
                <div class="field-submit">
                    <button><i class="las la-search la-24-black"></i></button>
                </div>
            </form><!-- .site-banner__search -->
        </div><!-- .site-banner__content -->
    </div>
</div>
<div class="container">

    <div class="py-2 d-flex justify-content-center">
        <button class="btn btn-primary mx-3">Dispensaries</button>
        <button class="btn btn-primary mx-3">Delivery Driver</button>
        <button class="btn btn-primary mx-3">Doctor</button>
    </div>{{--buttons--}}
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Pricing</h1>
    {{-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> --}}
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Map Marker </li>
            <li>Phone Number</li>
            <li>Store Hours</li>
            <li>Offer Up To 5 Products On Display </li>
            <li>Company Name & Address</li>
            <li>Company Logo</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>
    </div>

<div class="business-about" style="background-image: url({{asset('assets/images/img_about_1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="business-about-info">
                    <h2>{{__('Who we are')}}</h2>
                    <p>{{__("Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.")}}</p>
                    <a href="#" class="btn">{{__('Read more')}}</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .business-about -->
</main>
@endsection
