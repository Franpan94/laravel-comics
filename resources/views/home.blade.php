@extends('layouts.main')

@section('main-content')
  <div class="bg-main-card d-flex-wrap position-relative">
    @foreach($cartoons as $cartoon)
      <div class="width-dc">
        <img src="{{ $cartoon -> image }}" alt="img" class="widthimg">
        <span class="d-block font">{{ $cartoon -> title }}</span>
        <span class="d-block">{{ $cartoon -> type }}</span>
      </div>
      <div class="bg-series position-absolute cursor">Load More</div>
    @endforeach  
  </div>

  <div class="bg-tag d-flex justify-around pb-2">
    <ul class="d-flex text">
      <li class="padding-5 li-dc">
        <img src="/assets/img/buy-comics-digital-comics.png" alt="img" class="width-img vertical-align padding-5">
        <a href="#">digital comics</a>
      </li>
      <li class="padding-5 li-dc">
        <img src="/assets/img/buy-comics-merchandise.png" alt="img" class="width-img vertical-align padding-5">
        <a href="#">dc merchandise</a>
      </li>
      <li class="padding-5 li-dc">
        <img src="/assets/img/buy-comics-subscriptions.png" alt="img" class="width-img vertical-align padding-5">
        <a href="#">subscription</a>
      </li>
      <li class="padding-5 li-dc">
        <img src="/assets/img/buy-comics-shop-locator.png" alt="img" class="width-img vertical-align padding-5">
        <a href="#">comic shop locator</a>
      </li>
      <li class="padding-5 li-dc">
        <img src="/assets/img/buy-dc-power-visa.svg" alt="img" class="width-img vertical-align padding-5">
        <a href="#">dc power visa</a>
      </li>
    </ul>
  </div>

  <section class="bg justify-around">
    <section class="d-flex">
      <ul>
        <h3 class="pt-10">DC COMICS</h3>
        <li class="li-color">Characters</li>
        <li class="li-color">Comics</li>
        <li class="li-color">Movies</li>
        <li class="li-color">TV</li>
        <li class="li-color">Games</li>
        <li class="li-color">Videos</li>
        <li class="li-color">News</li>
        <ul class="ml-30">
          <h3 class="pt-10">SHOP</h3>
          <li class="li-color">DC</li>
          <li class="li-color">MAD Magazine</li>
        </ul>
      </ul>
      <ul>
        <h3 class="pt-10">DC</h3>
        <li class="li-color">Shop DC</li>
          <li class="li-color">Shop DC Collectibles</li>
          <li class="li-color">Terms Of Use</li>
          <li class="li-color">Privacy Policy (New)</li>
          <li class="li-color">Ad Choices</li>
          <li class="li-color">Advertising</li>
          <li class="li-color">Jobs</li>
          <li class="li-color">Subscriptions</li>
          <li class="li-color">Talent Workshops</li>
      </ul>
      <ul>
        <h3 class="pt-10">SITES</h3>
        <li class="li-color">Digital Comics</li>
        <li class="li-color">CPSC Certificates</li>
        <li class="li-color">Ratings</li>
        <li class="li-color">Shop help</li>
        <li class="li-color">Contact Us </li>
      </ul>
   </section>
   <div class="bg-logo"></div>
  </section>
@endsection