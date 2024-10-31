@extends('layouts.indexapp')

@section('title', 'Room List')

@section('content')
<!--header about-->
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit aboutheader__tit--dim">Ultimate Room</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="../../index.html">Home&nbsp;|&nbsp;</a>Rooms
            </span>
        </div>
    </section>

    <!--Sliders + pagination-->
    <div class="swiper sliderRoomList">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper wrapperAling">
          <!-- Slides -->
          @foreach($rooms as $room)
            <div class="swiper-slide room roomlist">
                <img class="room__imgRoom room__imgRoom--dim room__imgRoom--dimlist" src="{{ $room->photos[0]->uri }}" alt="">
                <div class="contentAuxRoom contentAuxRoom--list">
                    <div class="contentAuxList">
                        <div class="slider__content__topbar slider__content__topbar--list">
                            @foreach($room->amenities as $amenity)
                            <img class="slider__content__topbar__img" src="{{ $amenity->icon }}" alt="{{ $amenity->name }}" />
                            @endforeach
                        </div>
                        <h2 class="room__tit room__titlist">{{ $room->type_room.' #'.$room->room_number }}</h2>
                        <p class="room__p room__plist">{{ $room->description }}</p>
                    </div>
                    <div class="room__content">
                        <span class="room__content__precio room__content__precio--list">${{$room->price}}<span>/Night</span></span>
                        <a href="{{ route('rooms.details', ['id' => $room->id]) }}" style="text-decoration: none;color:#bdbdbd" ><span class="room__content__state">Booking Now</span></a> <!--CAMBIAR A BOOK NOW AL HACER MOUSE OVER-->
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