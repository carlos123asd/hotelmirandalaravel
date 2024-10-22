@extends('layouts.indexapp')

@section('title', 'Room')

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
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
          <div class="swiper-slide room swiperrooms--dim">
            <img class="room__imgRoom room__imgRoom--dim" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
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
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
          </div>
        </div>
        <div class="sliderRooms__contentPagination">
            <div class="swiper-button-prev swiper-but-room"></div>
            <div class="swiper-pagination swiper-pagination-bull"></div>
            <div class="swiper-button-next swiper-but-room"></div>
        </div>
    </div>
@endsection