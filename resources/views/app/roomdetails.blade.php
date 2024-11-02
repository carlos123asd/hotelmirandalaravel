@extends('layouts.indexapp')

@section('title', 'Room Details')

@section('content')
    <!--header about-->
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit aboutheader__tit--dim">Ultimate Room</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="../../index.html">Home&nbsp;|&nbsp;</a>Room Details
            </span>
        </div>
    </section>
    <!--Check Availability-->
    <section class="doublebed">
        <div class="doublebed__content">
            <div>
                <div class="contentRoomInfoDetails">
                    <div>
                        <h3 class="doublebed__content__sub">{{ '#'.$room->room_number }}</h3>
                        <h2 class="doublebed__content__tit">{{ $room->type_room }}</h2>
                    </div>
                    <span class="doublebed__content__precio">${{$room->price}}<span>/Night</span></span>
                </div>
                <img class="doublebed__content__img" src="{{ $room->photos[0]->uri }}" alt="Photo Room">
            </div>
            <form class="contentAuxDetailsAvailability" action="/bookings" method="POST">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <h4 class="doublebed__content__avaible">Check Availability</h4>
                <h5 class="doublebed__content__labelin">Check In</h5>
                <div class="doublebed__content__contentin doublebed__content__contentindetails">
                    <div class="formavailability__content__calendar__content detailmod">
                        <div>
                            <span class="formavailability__content__calendar__content__span"></span>
                            <input id="datestartdetails" class="formavailability__content__calendar__content__input inputdate" type="date">
                        </div>
                    </div>
                    <input class="formavailability__content__calendar__inputtxt detailsinputdate" id="inputDataIndetails" name="checkin" value="{{ $in }}" placeholder="{{ $in }}" type="text">
                </div>
                <h5 class="doublebed__content__labelout">Check Out</h5>
                <div class="doublebed__content__contentin doublebed__content__contentindetails">
                    <div class="formavailability__content__calendar__content detailmod">
                        <div>
                            <span class="formavailability__content__calendar__content__span"></span>
                            <input id="dateenddetails" class="formavailability__content__calendar__content__input inputdate" type="date">
                        </div>
                    </div>
                    <input class="formavailability__content__calendar__inputtxt detailsinputdate" id="inputDataIndetails" name="checkout" value="{{ $out }}" placeholder="{{ $out }}" type="text">
                </div>
                <input type="submit" class="doublebed__content__btn" value="Check Availability">
            </form>
            <p class="doublebed__p">{{ $room->description }}</p>
        </div>
    </section>

    <!--Amenities-->
    <section class="amenities">
        <h2 class="amenities__tit">Amenities</h2>
        <div class="amenities__content">
            <ul class="amenities__content__list1">
                @foreach($room->amenities as $amenity)
                    <li><img src="{{ asset($amenity->icon) }}" alt=""/>{{ $amenity->name }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="founder">
        <div class="founder__img">
            <div class="founder__img__circle">
                <img class="founder__img__circle__check" src="../../sources/imgs/check.svg" alt="">
            </div>
        </div>
        <h3 class="founder__nombre">Rosalina D. William</h3>
        <h2 class="founder__puesto">Founder, Qux Co.</h2>
        <p class="founder__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>

    <section class="cancelation">
        <h2 class="cancelation__tit">Cancellation</h2>
        <p class="cancelation__p">{{ $room->cancellation }}</p>
    </section>

    <section class="relatedrooms">
        <h2 class="relatedrooms__tit">Related Rooms</h2>
        <!--Sliders-->
        <div class="slider sliderroomdetails">
                <div class="swiper-wrapper">
                    @foreach($roomsRelated as $roomRelated)
                    <div class="room swiper-slide detailslide">
                        <div class="contentAuxDetails">
                            <div class="slider__content__topbar--display">
                                <div class="auxcontentimgstopbarDetails">
                                    @foreach($roomRelated->amenities as $amenity)
                                    <img class="slider__content__topbar__imgs" src="{{ asset($amenity->icon) }}" alt="{{ $amenity->name }}">
                                    @endforeach
                                </div>
                            </div>
                            <img class="room__imgRoom--list" src="{{ $roomRelated->photos[0]->uri }}" alt="">
                        </div>
                        <div class="contentAuxDetailsRoomTxt">
                            <h2 class="room__tit">{{ $roomRelated->type_room.' #'.$roomRelated->room_number }}</h2>
                            <p class="room__p">{{ $roomRelated->description }}</p>
                            <div class="room__content auxflexprices">
                                <span class="room__content__precio">${{$roomRelated->price}}/Night</span>
                                <span class="room__content__state">Booking Now</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev swiper-button-next--pos"></div>
                <div class="swiper-button-next swiper-button-next--pos"></div>
        </div>
    </section>
@endsection