<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Hyde Out</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('dist/styles/vendor.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/styles/main.css') }}">
  </head>
  <body>
    <!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" upgrade your browser to improve your experience.</p>
    -->
    <header class="slide--header">
      <div class="header__wrapper container">
        <nav class="navbar">
          <ul class="navbar__list">
            <li class="navbar__item"><a class="navbar__link" href="about">About</a></li>
            <li class="navbar__item"><a class="navbar__link" href="explore">Explore</a></li>
            <li class="navbar__ittem"><a class="navbar__link" href="map">Map</a></li>
            <li class="navbar__iem navbar__item--logo"><a class="navbar__link" href="#"><img src="{{ asset('dist/images/svg-sprite/page-logo.svg') }}" alt="HydeOut"></a></li>
            <li class="navbar__item"><a class="navbar__link" href="events">Events</a></li>
            <li class="navbar__item"><a class="navbar__link" href="gallery">Gallery</a></li>
            <li class="navbar__item"><a class="navbar__link" href="contact">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <a class="menu-trigger navigate mobile-only" href="menu"><span class="menu-text visually-hidden">Menu</span><span class="menu-icon"><span></span><span></span></span></a>
        <div class="mobile-only page page--menu">
          <nav>
            <ul class="menu">
              <li><a href="about">About</a></li>
              <li><a href="location">Location</a></li>
              <li><a href="explore">Explore</a></li>
              <li><a href="map">Map</a></li>
              <li><a href="events">Events</a></li>
              <li><a href="gallery">Gallery</a></li>
              <li><a href="contact">Contact us</a></li>
            </ul>
          </nav>
        </div>
    </header>
    <section class="page page--landing" id="landing" tabindex="1" style="background: url('{{ $setting->getValue('home_page_background_image','home_page') }}') no-repeat 50% 50% cover; ">
      <div class="landing__wrapper container clearfix">
        <div class="hydepark-logo"></div>
        <h1 class="landing__logo">
          <svg>
            <use xlink:href="#landing-logo"></use>
          </svg>
        </h1>
        <div class="landing__actions">
          <a class="show-events" href="events">Show events</a>
          <a class="go-down" href="about">
            <svg>
              <use xlink:href="#down-arrow"></use>
            </svg>
          </a>
        </div>
        <div class="overlay"></div>
      <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
        </ul>
      </div>
      <div class="explore-circle">
        <a href="explore">
          Explore
          <svg>
            <use xlink:href="#right-arrow"></use>
          </svg>
        </a>
      </div>
    </section>
    <section class="slide slide--about" data-page="about">
      <div class="about__wrapper container clearfix">
        <div class="content">
          <div id="video-gallery">
              <a class="about__video" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="{{$setting->getValue('about_page_image','about_page')}}">
                  <img src="{{$setting->getValue('about_page_image','about_page')}}" alt="HydeOut">
                    <span class="play">
                      <svg class="play-icon">
                        <use xlink:href="#play-icon"></use>
                      </svg>
                    </span>
                  </a>
              </a>
          </div>
          <div class="about__info row row--2">
            <div class="col">
              <h2 class="title">{{ $setting->getValue('about_page_title1','about_page') }}</h2>
              <p class="title">LEISURE. RECREATION. AMUSEMENT</p>
              <p>{{ $setting->getValue('about_page_content1','about_page') }}</p>
            </div>
          </div>
          <div class="show-location"><a class="button button--primary" href="location">Show location</a></div>
        </div>
      </div>
      <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      <ul class="artworks list list--inline">
        <li>
          <svg>
            <use xlink:href="#about-artwork"></use>
          </svg>
        </li>
        <li>
          <svg>
            <use xlink:href="#about-artwork-02"></use>
          </svg>
        </li>
      </ul>
    </section>
    <section class="slide slide--location" data-page="location">
      <div class="location__wrapper container">
        <div class="content">
          <div class="location-img">
            <img src="{{ $setting->getValue('map_page_gif','map_page') }}" alt="Hyde out location">
          </div>
          <div class="row row--2">
            <div class="col">
              <div class="artwork">
                <svg>
                  <use xlink:href="#location-artwork"></use>
                </svg>
              </div>
            </div>
            <div class="col">
              <p class="description">{{ $setting->getValue('map_page_content','map_page')}}</p>
            </div>
          </div>
        </div>
        <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      </div>
      <div class="go-to-gallery">
        <a href="explore">
          <span>Explore</span>
          <svg>
            <use xlink:href="#right-arrow"></use>
          </svg>
        </a>
      </div>
      </div>
    </section>
    <section class="slide slide--map" data-page="map">
      <div class="map__wrapper container">
        <div class="map-text">
          <p>Hyde Out was developed to include an appealing mix of terrains that cater for different generations and types of activities. The landscapes vary from flat, sandy playgrounds for adventurous activities, to outdoor entertainment theatres and spacious, green areas and walking trails that are perfect for picnics and strolls along the central lake.</p>
        </div>
        <div class="row row--2 pins-title__list">
          <div class="col">
            <ol>
              <li class="pins-title__item" data-pin="1">Main Enterance</li>
              <li class="pins-title__item" data-pin="6">Clinic/Admin</li>
              <li class="pins-title__item" data-pin="29">Staff Building</li>
              <li class="pins-title__item" data-pin="32">Toilets</li>
              <li>Attractions
                <ul>
                  <li class="pins-title__item" data-pin="14">Kids Park</li>
                  <li class="pins-title__item" data-pin="4">Fitness Park</li>
                  <li class="pins-title__item" data-pin="5">Dogs Park</li>
                  <li class="pins-title__item" data-pin="7">Events Park</li>
                  <li class="pins-title__item" data-pin="11">Picnic Park</li>
                  <li class="pins-title__item" data-pin="12">Stage</li>
                </ul>
              </li>
            </ol>
          </div>
          <div class="col">
            <ol>
              <li>F&amp;B
                <ul>
                  <li class="pins-title__item" data-pin="9">Main Restaurant</li>
                  <li class="pins-title__item" data-pin="33">Restaurants</li>
                  <li class="pins-title__item" data-pin="10">Food Trucks</li>
                </ul>
              </li>
              <li>Retail
                <ul>
                  {{-- <li class="pins-title__item" data-pin="2">Retail Kiosk</li> --}}
                  <li class="pins-title__item" data-pin="31">Retails</li>
                  <li class="pins-title__item" data-pin="18">Supermarket</li>
                </ul>
              </li>
            </ol>
          </div>
        </div>
        <div class="map-details">
          <div class="map-details__img">
            <img src="{{ asset('dist/images/map-clean.jpg') }}" alt="Hyde Out Map">
            <ul class="pins__list">
              <li class="pins__item" data-pins="1" id="pin-1">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('main_entrance') }}</span>
              </li>
              <li class="pins__item" data-pins="2" id="pin-2">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retail') }}</span>
              </li>
              <li class="pins__item" data-pins="3" id="pin-3">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retail') }}</span>
              </li>
              <li class="pins__item" data-pins="4" id="pin-4">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retail') }}</span>
              </li>
              <li class="pins__item" data-pins="5" id="pin-5">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('main_restaurant') }}</span>
              </li>
              <li class="pins__item" data-pins="6" id="pin-6">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('gym_area') }}</span>
              </li>
              <li class="pins__item" data-pins="7" id="pin-7">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('dogs_park') }}</span>
              </li>
              <li class="pins__item" data-pins="8" id="pin-8">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('admin_clinic') }}</span>
              </li>
              <li class="pins__item" data-pins="9" id="pin-9">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('events_tent') }}</span>
              </li>
              <li class="pins__item" data-pins="10" id="pin-10">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('toilets') }}</span>
              </li>
              <li class="pins__item" data-pins="11" id="pin-11">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li>
              <li class="pins__item" data-pins="12" id="pin-12">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('toilets') }}</span>
              </li>
              <li class="pins__item" data-pins="13" id="pin-13">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="14" id="pin-14">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="15" id="pin-15">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="16" id="pin-16">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="17" id="pin-17">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('food_trucks') }}</span>
              </li>
              <li class="pins__item" data-pins="18" id="pin-18">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li>
              <li class="pins__item" data-pins="19" id="pin-19">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li>
              <li class="pins__item" data-pins="20" id="pin-20">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li>
              <li class="pins__item" data-pins="21" id="pin-21">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('stage') }}</span>
              </li>
              <li class="pins__item" data-pins="22" id="pin-22">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('kids_area') }}</span>
              </li>
              <li class="pins__item" data-pins="23" id="pin-23">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('kids_activity_building') }}</span>
              </li>
              <li class="pins__item" data-pins="24" id="pin-24">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('paintball_building') }}</span>
              </li>
              <li class="pins__item" data-pins="25" id="pin-25">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('paintball_feild') }}</span>
              </li>
              <li class="pins__item" data-pins="26" id="pin-26">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('paintball_feild') }}</span>
              </li>
              <li class="pins__item" data-pins="27" id="pin-27">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants_storage') }}</span>
              </li>
              <li class="pins__item" data-pins="28" id="pin-28">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('supermarket') }}</span>
              </li>
              <li class="pins__item" data-pins="29" id="pin-29">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('staff_building') }}</span>
              </li>
              <li class="pins__item" data-pins="30" id="pin-30">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_retail') }}</span>
              </li>
              <li class="pins__item" data-pins="31" id="pin-31">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retails') }}</span>
              </li>
              <li class="pins__item" data-pins="31" id="pin-32">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retails') }}</span>
              </li>
              <li class="pins__item" data-pins="31" id="pin-33">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('retails') }}</span>
              </li>
              <li class="pins__item" data-pins="32" id="pin-35">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('toilets') }}</span>
              </li>
              <li class="pins__item" data-pins="32" id="pin-36">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('toilets') }}</span>
              </li>
              <li class="pins__item" data-pins="33" id="pin-37">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="33" id="pin-38">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="33" id="pin-39">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="11" id="pin-40">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li>
              {{-- Part of phase 2 --}}
              {{-- <li class="pins__item" data-pins="11" id="pin-41">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('picnic_park') }}</span>
              </li> --}}
              <li class="pins__item" data-pins="33" id="pin-42">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
              <li class="pins__item" data-pins="33" id="pin-43">
                <svg>
                  <use xlink:href="#map-pin"></use>
                </svg>
                <span class="place-name">{{ $point->getValue('restaurants') }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="slide slide--expolore" data-page="explore">
      <div class="explore__wrapper container clearfix">
        <div class="content">
          <div class="explore__gallery clearfix">
            <div class="row row--4">
              <div class="col">
                <div class="content" id="play">
                  <a class="content__img" href="/explore/play">
                    <img class="explore-image" src="{{ $setting->getValue('explore_page_image1','explore_page') }}" alt="Play">
                    <div class="content__title">
                      <h2>Play</h2>
                    </div>
                    <div class="content__icon">
                      <svg>
                        <use xlink:href="#play"></use>
                      </svg>
                    </div>
                    <div class="content__overlay"></div>
                    <div class="content__overlay"></div>
                    <div class="content__overlay--static"></div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="content" id="picnic">
                    <a class="content__img" href="/explore/picnic">
                      <img class="explore-image" src="{{ $setting->getValue('explore_page_image2','explore_page') }}" alt="Picnic">
                      <div class="content__title">
                        <h2>Alfresco</h2>
                      </div>
                      <div class="content__icon">
                        <svg>
                          <use xlink:href="#picnic"></use>
                        </svg>
                      </div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay--static"></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="content" id="eat-and-drink">
                    <a class="content__img" href="/explore/eat-and-drink">
                      <img class="explore-image" src="{{$setting->getValue('explore_page_image4','explore_page') }}" alt="Eat &amp; Drink">
                      <div class="content__title">
                        <h2>Tenants</h2>
                      </div>
                      <div class="content__icon">
                        <svg>
                          <use xlink:href="#eat-and-drink"></use>
                        </svg>
                      </div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay--static"></div>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="content" id="pet">
                    <a class="content__img" href="/explore/pet">
                      <img class="explore-image" src="{{ $setting->getValue('explore_page_image5','explore_page') }}" alt="Pet Time">
                      <div class="content__title">
                        <h2>Eastwind</h2>
                      </div>
                      <div class="content__icon">
                        <svg>
                          <use xlink:href="#pet"></use>
                        </svg>
                      </div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay--static"></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="content" id="exercise">
                    <a class="content__img" href="/explore/exercise">
                      <img class="explore-image" src="{{ $setting->getValue('explore_page_image6','explore_page') }}" alt="Exercise">
                      <div class="content__title">
                        <h2>Exercise</h2>
                      </div>
                      <div class="content__icon">
                        <svg>
                          <use xlink:href="#exercise"></use>
                        </svg>
                      </div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay"></div>
                      <div class="content__overlay--static"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        </div>
      </div>
    </section>
    <section class="slide slide--events" data-page="events">
      <div class="events__wrapper container clearfix">
        <div class="row row--2 row--no-padding equal-height">
            <div class="col">
              <div class="event pastEvent">
                <div class="event__img">
                  <div class="event__image-wrapper">
                    <img src="dist/images/event-thumb.jpg" alt="">
                  </div>
                  <div class="event__content">
                    <h1 class="event__title">Winter Festival</h1>
                    <a class="event__action" href="#">Learn more</a>
                  </div>
                  <div class="event-details">
                    <h1 class="event-details__title">Winter Festival</h1>
                    <p class="event-details__body">At Hyde Out we take entertainment very seriously, and you’re always going to find something interesting happening on our premises. Every weekend and holiday we host exclusive events and performances for kids and adults alike. Make sure to check our events calendar and book your tickets in advance<span class="slogan">They sell out fast!</span></p>
                    <button class="event-details__action">
                      <svg>
                        <use xlink:href="#close-icon"></use>
                      </svg>
                      <span>Close</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <div class="col">
            <div class="events__calendar calendar"></div>
          </div>
        </div>
        <div class="actions">
          <ul class="actions__list list">
            <li class="actions__item go-to-gallery">
              <a href="gallery">
                <span>Go to gallery</span>
                <svg>
                  <use xlink:href="#left-arrow"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      </div>
    </section>
    <section class="slide slide--event" data-event="view-gallery">
      <div class="event__wrapper container clearfix">
        <header class="event__header">
          <div class="event__img">
            <img src="" alt="event">
            <div class="event__title">
              <h1></h1>
            </div>
            <div class="event__date">
              <p></p>
            </div>
            <a class="next-album" href=""><span>Next</span><span>album</span></a>
            <div class="event__overlay--static"></div>
          </div>
        </header>
        <div class="event__gallery">
          <div class="row--4 clearfix" id="aniimated-thumbnials">
            <a class="col content__media" href="{{ asset('dist/images/event-gallery-01.jpg')}}">
              <img src="{{ asset('dist/images/event-gallery-01.jpg')}}" alt="Spring Market">
            </a>
          </div>
        </div>
        <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      </div>
      <div class= "event__img mobile-only">
        <a class="next-album" href=""><span>Next</span><span>album</span></a>
      </div>
    </section>
    <section class="slide slide--gallery" data-page="gallery">
      <div class="gallery__wrapper container clearfix">
        <div class="gallery__events clearfix">
          <div class="row row--3" id="galleryContainer">
            @foreach($data['galleries'] as $gallery)
            <div class="col clickableGallery" data-gallery-id={{ $gallery->
              id }}>
              <div class="event">
                <a class="event__img" href="gallery/view-gallery?galleryId={{ $gallery->id }}">
                  <img src="{{ $gallery->main_image->url() }}" alt="spring market">
                  <div class="event__title">
                    <h2>{{ (isset($gallery->title)) ? $gallery->title : '' }}</h2>
                  </div>
                  <div class="event__date">
                    @if ($gallery->entity_type == 'events')
                      <p>{{ (isset($gallery->entity)) ? $gallery->entity->date : '' }}</p>
                    @endif
                  </div>
                  <div class="event__overlay"></div>
                  <div class="event__overlay"></div>
                  <div class="event__overlay--static"></div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      </div>
    </section>
    <section class="slide slide--contact" data-page="contact">
      <div class="contact__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <form class="contact__form" method="post" action="{{ route('store_message') }}">
              {{ csrf_field() }}
              <h1 class="contact__form__title">General Queries</h1>
              <p class="contact__form__description">{{ $data['contacts']['general_queries_message'] }}</p>
              <a class="contact__form__email" href="mailto:{{ $data['contacts']['general_queries_email'] }}">{{ $data['contacts']['general_queries_email'] }}</a>
              <div class="contact__form__field">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <div class="error">
                  {{ $errors->first('name') }}
                </div>
              </div>
              <div class="contact__form__field">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <div class="error">
                  {{ $errors->first('email') }}
                </div>
              </div>
              <div class="contact__form__field">
                <label for="number"></label>
                <input type="tel" name="number" id="number" placeholder="Number" required>
                <div class="error">
                  {{ $errors->first('number') }}
                </div>
              </div>
              <div class="contact__form__field">
                <label for="message"></label>
                <textarea name="message" id="message" placeholder="Message" required></textarea>
                <div class="error">
                  {{ $errors->first('message') }}
                </div>
              </div>
              <div class="contact__form__submit">
                <button>Submit</button>
              </div>
            </form>
          </div>
          <div class="col">
            <form class="contact__form">
              <h1 class="contact__form__title">Tentant Queries</h1>
              <p class="contact__form__description">{{ $data['contacts']['tentant_quiries_message'] }}</p>
              <a class="contact__form__email" href="mailto:{{ $data['contacts']['tentant_quiries_email'] }}">{{ $data['contacts']['tentant_quiries_email'] }}</a><a href= "tel:{{ $data['contacts']['hotline_number'] }}"class="contact__form__hotline button button--secondary"><svg><use xlink:href="#phone" /></svg> {{ $data['contacts']['hotline_number'] }}</a>
              <h1 class="contact__form__title">Hyde Out is all social!</h1>
              <p class="contact__form__description">Now you can connect with us on your favourite social media platforms, and get instant notifications about our latest news and events. Click on the icons below to subscribe to our pages and follow us.</p>
              <ul class="socials__list right list list--inline">
                <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank"><svg><use xlink:href="#facebook-dark"></use></svg></a></li>
                <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank"><svg><use xlink:href="#instagram-dark"></use></svg></a></li>
                <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank"><svg><use xlink:href="#youtube-icon"></use></svg></a></li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="actions">
        <ul class="actions__list list">
          <li class="actions__item go-to-gallery"><a href="explore"><span>Back to main menu</span>
              <svg>
                <use xlink:href="#right-arrow"></use>
              </svg></a></li>
        </ul>
      </div>
    </section>
    <section class="slide slide--pet" data-explore="pet">
      <div class="pet__wrapper container">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <h1 style="opacity: 0;" class="content__title">{{ $setting->getValue('explore_elements_pet_time_title1','explore_elements_pet_time') }}</h1>
              <h2 class="content__title--secondry">{{ $setting->getValue('explore_elements_pet_time_title2','explore_elements_pet_time') }}</h2>
              <p class="pet-content-content">{{ $setting->getValue('explore_elements_pet_time_content1','explore_elements_pet_time')}}</p>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <div class="content__img">
                <img src="{{ $setting->getValue('explore_elements_pet_time_image1','explore_elements_pet_time') }}" alt="Eat Al Fresco in the inspiring outdoors!">
                <div class="content__img--secondry"><img src="{{ $setting->getValue('explore_elements_pet_time_image2','explore_elements_pet_time')}}" alt="Eat Al Fresco in the inspiring outdoors!"></div>
                <a class="content__icon" href="map">
                  <svg>
                    <use xlink:href="#location-icon"></use>
                  </svg>
                  <span>Find our pet park on the map</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="sponsor-info">
          <div class="sponsor-artwork">
            <svg>
              <use xlink:href="#pet-artwork-02"></use>
            </svg>
          </div>
          <div class="row row--2">
            <div class="col">
              <div class="sponsor-info__logo"><img src="{{ $setting->getValue('explore_elements_pet_time_provider_logo','explore_elements_pet_time') }}" alt=""></div>
            </div>
            <div class="col">
              <p class="sponsor-info__description">{{ $setting->getValue('explore_elements_pet_time_content1','explore_elements_pet_time')}}</p>
              <h2>Working hours:</h2>
              <ul class="list">
                <li>{{ $setting->getValue('explore_elements_pet_time_provider_working_hours1','explore_elements_pet_time')}}</li>
                <li>{{ $setting->getValue('explore_elements_pet_time_provider_working_hours2','explore_elements_pet_time')}}</li>
              </ul>
              <p>{{ $setting->getValue('explore_elements_pet_time_provider_contact_message','explore_elements_pet_time')}} </p>

              <a href="{{ $setting->getValue('explore_elements_pet_time_provider_site','explore_elements_pet_time')}}">{{ $setting->getValue('explore_elements_pet_time_provider_site','explore_elements_pet_time')}}</a>
            </div>
          </div>
        </div>
        <div class="actions">
          <ul class="actions__list">
            <li class="actions__item back-to-main"><a href="/">
                <svg>
                  <use xlink:href="#right-arrow"></use>
                </svg><span>Back to main menu</span></a></li>
            <li class="actions__item go-to-gallery"><a href="gallery">
                <svg>
                  <use xlink:href="#left-arrow"></use>
                </svg><span>Go to gallery</span></a></li>
          </ul>
        </div>
        <ul class="socials__list right list list--vertical">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        <div class="main-artwork">
          <svg>
            <use xlink:href="#pet-artwork-01"></use>
          </svg>
        </div>
      </div>
    </section>
    <section class="slide slide--shop" data-explore="shop">
      <div class="shop__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <h1 class="content__title">{{ $setting->getValue('explore_elements_shop_title1','explore_elements_shop') }}</h1>
              <p class="content__body">{{ $setting->getValue('explore_elements_shop_content1','explore_elements_shop') }}</p>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <div class="content__img">
                <img src="{{ $setting->getValue('explore_elements_shop_image1','explore_elements_shop')}}" alt="">
                <a class="content__icon" href="map">
                  <svg>
                    <use xlink:href="#location-icon"></use>
                  </svg>
                  <span>Find RETAIL AREA on the map</span>
                </a>
                <div class="artwork">
                  <svg>
                    <use xlink:href="#shop-artwork"></use>
                  </svg>
                </div>
                <div class="store-info">
                  <div class="artwork">
                    <svg>
                      <use xlink:href="#shop-artwork-02"></use>
                    </svg>
                  </div>
                  <div class="row row--2">
                    <div class="col">
                      <ul class="list store__list">
                        @foreach($data['stores'] as $store)
                        <li class="store__item {{$loop->first? 'current': '' }}" data-store="store-{{ $store->id }}">{{ $store->title }}</li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="col">
                      <div class="row row--2">
                        @foreach($data['stores'] as $store)
                        <div class="store-data {{$loop->first? 'current': '' }}" id="store-{{ $store->id }}">
                          <div class="row row--2">
                            <div class="col">
                              <div class="store-info__logo"><img src="{{ $store->logo->url() }}" alt="Picnic Store"></div>
                            </div>
                            <div class="col">
                              <p class="store-info__description">{{ $store->content }}</p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <ul class="socials__list right list list--vertical">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        <div class="actions">
          <ul class="actions__list list">
            <li class="actions__item back-to-main"><a href="#">
                <svg>
                  <use xlink:href="#left-arrow"></use>
                </svg><span>Back to main menu</span></a></li>
            <li class="actions__item go-to-gallery"><a href="gallery"><span>Go to gallery</span>
                <svg>
                  <use xlink:href="#right-arrow"></use>
                </svg></a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="slide slide--play" data-explore="play">
      <div class="play__wrapper">
        <div class="container clearfix">
          <div class="row row--2">
            <div class="col">
              <div class="content">
                <h1 class="content__title">{{ $setting->getValue('explore_elements_play_title1','explore_elements_play') }}</h1>
                <p class="content__body">{{$setting->getValue('explore_elements_play_content1','explore_elements_play')}}</p>
                <a class="content__icon" href="map">
                  <svg>
                    <use xlink:href="#location-icon"></use>
                  </svg>
                  <span>Find fagnoon on the map</span>
                </a>
              </div>
            </div>
            <div class="col">
              <div class="content">
                <div class="content__img"><img src="{{ $setting->getValue('explore_elements_play_image1','explore_elements_play') }}" alt="It’s play time!"></div>
              </div>
            </div>
          </div>
          <div class="sponsor-info">
            <div class="sponsor-info__logo"><img src="{{ $setting->getValue('explore_elements_play_provider_logo','explore_elements_play') }}" alt="Fagnoon"></div>
            <p class="sponsor-info__description">{{ $setting->getValue('explore_elements_play_provider_content','explore_elements_play') }}</p>
            <h2>Working hours:</h2>
            <ul>
              <li>{{ $setting->getValue('explore_elements_play_working_hours1','explore_elements_play') }}</li>
              <li>{{ $setting->getValue('explore_elements_play_working_hours2','explore_elements_play') }}</li>
              <li>{{ $setting->getValue('explore_elements_play_working_hours3','explore_elements_play') }}</li>
            </ul>
            <p>Know More about {{ $setting->getValue('explore_elements_play_provider_title','explore_elements_play') }} Egypt</p>
            <p>{{ $setting->getValue('explore_elements_play_provider_contact_message','explore_elements_play') }} </p>
            <a href="{{ $setting->getValue('explore_elements_play_provider_site','explore_elements_play') }}" target="_blank">{{ $setting->getValue('explore_elements_play_provider_site','explore_elements_play') }}</a>
            <ul class="artwork">
              <li>
                <svg>
                  <use xlink:href="#play-artwork-01"></use>
                </svg>
              </li>
              <li>
                <svg>
                  <use xlink:href="#play-artwork-02"></use>
                </svg>
              </li>
            </ul>
          </div>
      <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        </div>
        <div class="actions">
          <ul class="actions__list">
            <li class="actions__item back-to-main">
              <a href="#">
                <svg>
                  <use xlink:href="#right-arrow"></use>
                </svg>
                <span>Back to main menu</span>
              </a>
            </li>
            <li class="actions__item go-to-gallery">
              <a href="gallery">
                <svg>
                  <use xlink:href="#left-arrow"></use>
                </svg>
                <span>Go to gallery</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="slide slide--picnic" data-explore="picnic">
      <div class="picnic__wrapper container">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <div class="content__img">
                <img src="{{ $setting->getValue('explore_elements_picnic_image1','explore_elements_picnic') }}" alt="Eat Al Fresco in the inspiring outdoors!">
                <div class="content__img--secondry"><img src="{{ $setting->getValue('explore_elements_picnic_image2','explore_elements_picnic') }}" alt="Eat Al Fresco in the inspiring outdoors!"></div>
                <div class="back-to-main">
                  <a href="#">
                    <svg>
                      <use xlink:href="#left-arrow"></use>
                    </svg>
                    <span>Back to main menu</span>
                  </a>
                </div>
                <div class="go-to-gallery">
                  <a href="gallery">
                    <span>Go to gallery</span>
                    <svg>
                      <use xlink:href="#right-arrow"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <h1 class="content__title">{{ $setting->getValue('explore_elements_picnic_title1','explore_elements_picnic') }}</h1>
              <p class="content__body">{{ $setting->getValue('explore_elements_picnic_content1','explore_elements_picnic') }}</p>
              <p class="content__body">{{ $setting->getValue('explore_elements_picnic_content2','explore_elements_picnic') }}</p>
              <a class="content__icon" href="map">
                <svg>
                  <use xlink:href="#location-icon"></use>
                </svg>
                <span>Find our picnic park on the map</span>
              </a>
                <ul class="socials__list right list list--vertical">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
            </div>
          </div>
        </div>
        <div class="sponsor-info">
          <div class="sponsor-artwork">
            <svg>
              <use xlink:href="#picnic-artwork-01"></use>
            </svg>
          </div>
          <div class="sponsor-info__logo"><img src="{{ $setting->getValue('explore_elements_picnic_provider_logo','explore_elements_picnic') }}" alt="Fagnoon"></div>
          <p class="sponsor-info__description">{{ $setting->getValue('explore_elements_picnic_provider_content','explore_elements_picnic') }}</p>
          <h2>Working hours:</h2>
          <ul>
            <li>{{ $setting->getValue('explore_elements_picnic_working_hours1','explore_elements_picnic') }}</li>
            <li>{{ $setting->getValue('explore_elements_picnic_working_hours2','explore_elements_picnic') }}</li>
          </ul>
          <p>PICNIC PARK RULES AND REGULATIONS</p>
        </div>
      </div>
    </section>
    <section class="slide slide--exercise" data-explore="exercise">
      <div class="exercise__wrapper container">
        <div class="row">
          <div class="content">
            <div class="content__img">
              <img src="{{ $setting->getValue('explore_elements_exercise_image1','explore_elements_exercise') }}" alt="">
              <h1 class="content__title">{{ $setting->getValue('explore_elements_exercise_title1','explore_elements_exercise') }}</h1>
            </div>
          </div>
        </div>
        <div class="row row--2">
          <div class="col">
            <div class="content--secondry">
              <div class= "mobile-only">
                <h1 class="content__title">{{ $setting->getValue('explore_elements_exercise_title1','explore_elements_exercise') }}</h1>
              </div>
              <p class="content--secondry__body">{{ $setting->getValue('explore_elements_exercise_content1','explore_elements_exercise') }}</p>
              <a class="content__icon" href="map">
                <svg>
                  <use xlink:href="#location-icon"></use>
                </svg>
                <span>FIND {{ $setting->getValue('explore_elements_exercise_provider_title','explore_elements_exercise') }} STARS ON THE MAP</span>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="content--secondry">
              <div class="content--secondry__img"><img src="{{ $setting->getValue('explore_elements_exercise_image2','explore_elements_exercise') }}" alt=""></div>
            </div>
          </div>
        </div>
        <div class="sponsor-info">
          <div class="sponsor-info__logo"><img src="{{  $setting->getValue('explore_elements_exercise_provider_logo','explore_elements_exercise') }}" alt="CrossFit"></div>
          <p class="sponsor-info__description">{{ $setting->getValue('explore_elements_exercise_provider_content','explore_elements_exercise') }}</p>
          <h2>Working hours:</h2>
          <ul class="list">
            <li>{{ $setting->getValue('explore_elements_exercise_working_hours1','explore_elements_exercise') }}</li>
            <li>{{ $setting->getValue('explore_elements_exercise_working_hours2','explore_elements_exercise') }}</li>
            <li>{{ $setting->getValue('explore_elements_exercise_working_hours3','explore_elements_exercise') }}</li>
          </ul>
          <p>{{ $setting->getValue('explore_elements_exercise_provider_contact_message','explore_elements_exercise') }}</p>
          <p>Know More about {{ $setting->getValue('explore_elements_exercise_provider_title','explore_elements_exercise') }}</p>
          <a href="{{ $setting->getValue('explore_elements_exercise_provider_site','explore_elements_exercise') }}" target="_blank">{{ $setting->getValue('explore_elements_exercise_provider_site','explore_elements_exercise') }}</a>
        </div>
        <div class="actions">
            <ul class="actions__list list">
              <li class="actions__item back-to-main"><a href="#">
                  <svg>
                    <use xlink:href="#left-arrow"></use>
                  </svg>
                  <span>Back to main menu</span>
                </a>
              </li>
              <li class="actions__item go-to-gallery"><a href="gallery"><span>Go to gallery</span>
                <svg>
                  <use xlink:href="#left-arrow"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <ul class="socials__list right list list--vertical">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        <div class="artwork">
          <svg>
            <use xlink:href="#exercise-artwork"></use>
          </svg>
        </div>
      </div>
    </section>
    <section class="slide slide--entertain" data-explore="entertain">
      <div class="entertain__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <h1 class="content__title">{{ $setting->getValue('explore_elements_entertain_title1','explore_elements_entertain') }}</h1>
              <p class="content__body">{{$setting->getValue('explore_elements_entertain_content1','explore_elements_entertain')}}</p>
              <a class="content__icon" href="map">
                <svg>
                  <use xlink:href="#location-icon"></use>
                </svg>
                <span>FIND TICKETS MARCHE ON THE MAP</span>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <div class="content__img">
                <img src="{{$setting->getValue('explore_elements_entertain_image1','explore_elements_entertain')}}" alt="">
                <div class="content__img--secondry">
                  <img src="{{$setting->getValue('explore_elements_entertain_image2','explore_elements_entertain')}}" alt="">
                  <a class="back-to-main" href="#">
                    <svg>
                      <use xlink:href="#left-arrow"></use>
                    </svg>
                    <span>Back to main menu</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sponsor-info">
          <div class="sponsor-info__logo"><img src="{{$setting->getValue('explore_elements_entertain_provider_logo','explore_elements_entertain')}}" alt="Fagnoon"></div>
          <p class="sponsor-info__description">{{$setting->getValue('explore_elements_entertain_provider_content','explore_elements_entertain')}}</p>
          <h2>Working hours:</h2>
          <ul class="list">
            <li>{{$setting->getValue('explore_elements_entertain_provider_working_hours1','explore_elements_entertain')}}</li>
            <li>{{$setting->getValue('explore_elements_entertain_provider_working_hours2','explore_elements_entertain')}}</li>
            <li>{{$setting->getValue('explore_elements_entertain_provider_working_hours3','explore_elements_entertain')}}</li>
          </ul>
          <a href="{{$setting->getValue('explore_elements_entertain_provider_site','explore_elements_entertain')}}" target="_blank">{{$setting->getValue('explore_elements_entertain_provider_site','explore_elements_entertain')}}</a>
          <div class="artwork">
            <svg>
              <use xlink:href="#shop-artwork-02"></use>
            </svg>
          </div>
        </div>
        <div class="artwork-1">
          <svg>
            <use xlink:href="#entertain-artwork"></use>
          </svg>
        </div>
      <ul class="socials__list right list list--vertical">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
        <div class="actions">
          <ul class="actions__list list">
            <li class="actions__item go-to-gallery">
              <a href="gallery">
                <span>Go to gallery</span>
                <svg>
                  <use xlink:href="#right-arrow"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="slide slide--eat-and-drink" data-explore="eat-and-drink">
      <div class="eat-and-drink__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <a class="content" href="/explore/eat-and-drink/promenade">
              <div class="content__img">
                <img src="{{ $setting->getValue('explore_elements_eat_and_drink_image1','explore_elements_eat_and_drink') }}" alt="The Promenade" class="foodpark-image" />
                <div class="content__title">
                  <h2>The Promenade</h2>
                </div>
                <div class="content__overlay"></div>
                <div class="content__overlay"></div>
                <div class="content__overlay--static"></div>
              </div>
            </a>
          </div>
          <div class="col">
            <a class="content" href="/explore/eat-and-drink/food-park">
              <div class="content__img">
                <img src="{{ $setting->getValue('explore_elements_eat_and_drink_image2','explore_elements_eat_and_drink') }}" alt="The food park" class="foodpark-image" />
                <div class="content__title">
                  <h2>The food park</h2>
                </div>
                <div class="content__overlay"></div>
                <div class="content__overlay"></div>
                <div class="content__overlay--static"></div>
              </div>
            </a>
          </div>
        </div>
        <ul class="socials__list right list list--inline">
          <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#facebook-dark"></use>
              </svg></a></li>
          <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#instagram-dark"></use>
              </svg></a></li>
          <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
              <svg>
                <use xlink:href="#youtube-icon"></use>
              </svg></a></li>
        </ul>
      </div>
    </section>
    <section class="slide slide--food-park" data-explore="food-park">
      <div class="food-park__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <h1 class="content__title">{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_title1','explore_elements_eat_and_drink_the_food_park') }}</h1>
              <p class="content__description">{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_content1','explore_elements_eat_and_drink_the_food_park') }}</p>
            </div>
          </div>
          <div class="col">
            <div class="content row row--2 row--no-padding">
              <div class="col">
                <ul class="content__logos">
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo1','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo3','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo4','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo5','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo6','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                </ul>
              </div>
              <div class="col">
                <div class="content__img">
                  <img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_image1','explore_elements_eat_and_drink_the_food_park') }}" alt="Food Park">
                  <div class="go-to-gallery">
                    <a href="gallery">
                      <svg>
                        <use xlink:href="#left-arrow"></use>
                      </svg>
                      <span>Go to gallery</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <div class="content__img">
                <div class="artwork">
                  <svg>
                    <use xlink:href="#play-artwork-01"></use>
                  </svg>
                </div>
                <img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_image2','explore_elements_eat_and_drink_the_food_park') }}" alt="Food Park">
                <div class="back-to-main">
                  <a href="#">
                    <svg>
                      <use xlink:href="#right-arrow"></use>
                    </svg>
                    <span>Back to main</span>
                  </a>
                </div>
                <ul class="content__logos">
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_1','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_2','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_3','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_4','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_5','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_6','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_7','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                  <li class="content__logo"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_food_park_logo2_8','explore_elements_eat_and_drink_the_food_park') }}" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <h2 class="content__title">
                {{$setting->getValue('explore_elements_eat_and_drink_the_food_park_title2','explore_elements_eat_and_drink_the_food_park')}}
                <a class="content__icon" href="map">
                  <svg>
                    <use xlink:href="#location-icon"></use>
                  </svg>
                  <span>FIND FOOD PARK ON THE MAP</span>
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
           <ul class="socials__list right list">
        <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
            <svg>
              <use xlink:href="#facebook-dark"></use>
            </svg></a></li>
        <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
            <svg>
              <use xlink:href="#instagram-dark"></use>
            </svg></a></li>
        <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
            <svg>
              <use xlink:href="#youtube-icon"></use>
            </svg></a></li>
      </ul>
    </section>
    <section class="slide slide--promenade" data-explore="promenade">
      <div class="promenade__wrapper container clearfix">
        <div class="row row--2">
          <div class="col">
            <div class="content">
              <h1 class="content__title">{{$setting->getValue('explore_elements_eat_and_drink_the_promenade_title1','explore_elements_eat_and_drink_the_promenade') }}</h1>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <div class="content__img"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_image2','explore_elements_eat_and_drink_the_promenade') }}" alt=""></div>
            </div>
          </div>
        </div>
        <div class="row row--2">
          <div class="col clearfix">
            <div class="row row--2 row--no-padding">
              <div class="col">
                <div class="content">
                  <div class="content__img"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_image1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></div>
                </div>
              </div>
              <div class="col">
                <div class="content--sponsor">
                  <ul class="content--sponsor__logo-list list">
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                    <li class="content--sponsor__logo-list__item"><img src="{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_logo1','explore_elements_eat_and_drink_the_promenade') }}" alt=""></li>
                  </ul>
                  <p class="content--sponsor__description">{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_content1','explore_elements_eat_and_drink_the_promenade') }}</p>
                </div>
              </div>
              <div class="actions list list--inline">
                <ul class="actions__list row row--2">
                  <li class="actions__item back-to-main">
                    <a href="#">
                      <svg>
                        <use xlink:href="#left-arrow"></use>
                      </svg>
                      <span>Back to main menu</span>
                    </a>
                  </li>
                  <li class="actions__item go-to-gallery">
                    <a href="gallery">
                      <span>Go to gallery</span>
                      <svg>
                        <use xlink:href="#right-arrow"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="artwork">
                <svg>
                  <use xlink:href="#promenade-artwork-01"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="content">
              <h2 class="content__title">{{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_title2','explore_elements_eat_and_drink_the_promenade') }}</h2>
              <p class="content__body">
                {{ $setting->getValue('explore_elements_eat_and_drink_the_promenade_content2','explore_elements_eat_and_drink_the_promenade') }}
                <a class="content__icon" href="map">
                  <svg>
                    <use xlink:href="#location-icon"></use>
                  </svg>
                  <span>FIND PROMENADE AREA ON THE MAP</span>
                </a>
                <ul class="socials__list right list list--inline">
                  <li class="socials__item facebook"><a href="{{ $data['contacts']['facebook_link'] }}" target="_blank">
                      <svg>
                        <use xlink:href="#facebook-dark"></use>
                      </svg></a></li>
                  <li class="socials__item instagram"><a href="{{ $data['contacts']['instagram_link'] }}" target="_blank">
                      <svg>
                        <use xlink:href="#instagram-dark"></use>
                      </svg></a></li>
                  <li class="socials__item youtube"><a href="{{ $data['contacts']['youtube_link'] }}" target="_blank">
                      <svg>
                        <use xlink:href="#youtube-icon"></use>
                      </svg></a></li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{ asset('dist/scripts/vendor.js') }}"></script>
    <script src="{{ asset('dist/scripts/main.js') }}"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
    <script>
      window.assetsPath = "{{ asset('dist/') }}/";
      var events = [];
      var colors = {};
      var dateUrl = "{!! url('api/events/calendar') !!}";

      $.get(dateUrl , function(data) {
        events = data.map(function(event) {
          return {
            name: event.title,
            date: event.date
          }
        });
        colors = events.map(function(event) {
          var key = event['name'];
          key = key.split(' ').join(' ');
          colors[key] = '#ffffff';
          return colors;
        });
        colors = colors[0];
        $('.calendar').pignoseCalendar({
          select: function(info, context) {
            var eventUrl = "{!! url('api/events') !!}" + "?date=" + context.current[0]._i;
            $.get(eventUrl, function(event) {
              if (event) {
                if (new Date(event.date) < new Date()) {
                  $('.event').addClass('pastEvent');
                  $('.event__action').text('Go to Gallery');
                  $('.event__action').off('click');
                  $('.event__action').attr('href', 'gallery/view-gallery?galleryId='+event.gallery_id);
                } else {
                  $('.event').removeClass('pastEvent');
                  $('.event__action').text('Learn more');
                  $('.event__action').attr('href', '#');
                  $('.event .event__action').on('click', function(e) {
                    if($(this).attr('href') === '#') {
                      e.preventDefault();
                    }
                    $('.event-details').slideDown('slow').addClass('is-active');
                    $('.event .event__content').fadeOut('slow').removeClass('is-active');
                  });
                  $('.event .event-details__action').on('click', function(e) {
                    e.preventDefault();
                    $('.event-details').slideUp('slow').removeClass('is-active');
                    $('.event .event__content').fadeIn('slow').addClass('is-active');
                  });
                }
                $('.event__title').html(event.title);
                $('.event__img img').attr('src', event.image);
                $('.event__img img').attr('alt', event.title);
                $('.event-details__title').html(event.title);
                $('.event-details__body').html(event.content);
              }
            });
            $('.event-details').slideUp('slow').removeClass('is-active');
            $('.event .event__content').fadeIn('slow').addClass('is-active');
          },
          scheduleOptions: {
            colors: colors
          },
          schedules: events
        });
      }, 'json');
    </script>
  </body>
</html>
