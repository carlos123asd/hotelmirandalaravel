@extends('layouts.indexapp')

@section('title', 'Rooms')

@section('content')
    <!--header about-->
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit aboutheader__tit--dim">Ultimate Room</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>Rooms
            </span>
        </div>
    </section>

    <!--Sliders + pagination-->
    <div class="swiper sliderRooms">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
        @foreach($rooms as $room)
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ $room->photos[0]->uri }}" alt="">
            <div class="contentAuxRoom">
                <div class="slider__content__topbar">
                    <div class="slider__content__topbar__img"></div>
                    <div class="slider__content__topbar__img2"></div>
                    <div class="slider__content__topbar__img3"></div>
                    <div class="slider__content__topbar__img4"></div>
                    <div class="slider__content__topbar__img5"></div>
                    <div class="slider__content__topbar__img6"></div>
                    <div class="slider__content__topbar__img7"></div>
                </div>
                <h2 class="room__tit">{{ $room->type_room.' #'.$room->room_number }}</h2>
                <p class="room__p">{{ $room->description }}</p>
                <div class="room__content">
                    <span class="room__content__precio">${{$room->price}}/Night</span>
                    <span class="room__content__state">Booking Now</span>
                </div>
            </div>
          </div>
        @endforeach
        </div>
        <div class="sliderRooms__contentPagination">
            <div class="swiper-button-prev swiper-but-room"></div>
            <div class="swiper-pagination swiper-pagination-bull"></div>
            <div class="swiper-button-next swiper-but-room"></div>
        </div>
    </div>
@endsection