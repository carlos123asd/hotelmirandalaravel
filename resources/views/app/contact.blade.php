@extends('layouts.indexapp')

@section('title', 'Contact')

@section('content')
    <!--header about-->
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit aboutheader__tit--dim">New Details</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>Blog
            </span>
        </div>
    </section>

    <!--contact-->
    <section class="contact">
        <div class="contact__contentcontact">
            <div class="contact__contentcontact__imgphone">
                <img src="{{ asset('build/images/imgs/contact/phone.svg') }}" alt="">
            </div>
            <span class="contact__contentcontact__num">01</span>
            <div class="contact__contentcontact__txtphone">
                <span class="contact__contentcontact__txtphone__tit">Phone Number</span>
                <span class="contact__contentcontact__txtphone__num">+36 616348947</span>
                <span class="contact__contentcontact__txtphone__num">+36 616348947</span>
            </div>
        </div>
        <div class="contact__contentcontact">
            <div class="contact__contentcontact__imgphone">
                <img src="{{ asset('build/images/imgs/contact/correo.svg') }}" alt="">
            </div>
            <span class="contact__contentcontact__num">02</span>
            <div class="contact__contentcontact__txtphone">
                <span class="contact__contentcontact__txtphone__tit">Email </span>
                <span class="contact__contentcontact__txtphone__num">hotelmiranda@miranda.com</span>
            </div>
        </div>
        <div class="contact__contentcontact">
            <div class="contact__contentcontact__imgphone">
                <img src="{{ asset('build/images/imgs/contact/map.svg') }}" alt="">
            </div>
            <span class="contact__contentcontact__num">03</span>
            <div class="contact__contentcontact__txtphone">
                <span class="contact__contentcontact__txtphone__tit">Hotel Address</span>
                <span class="contact__contentcontact__txtphone__num">C/Extremadura 127</span>
            </div>
        </div>
    </section>

    <!--Form-->
    <section class="form">
        <div class="formImgAux">
            <img class="form__headerimg" src="{{ asset('build/images/imgs/form/contact.jpg') }}" alt="Contact Us">
        </div>
        <div class="form__inputs">
            <div class="form__inputs__contentname">
                <img class="form__inputs__contentname__img" src="{{ asset('build/images/imgs/form/name.svg') }}" alt="Your Name">
                <input class="form__inputs__contentname__input" type="text" placeholder="Your full name">
            </div>
            <div class="form__inputs__contentname">
                <img class="form__inputs__contentname__img" src="{{ asset('build/images/imgs/form/form2.svg') }}" alt="Your Name">
                <input class="form__inputs__contentname__input" type="text" placeholder="Add phone number">
            </div>
            <div class="form__inputs__contentname">
                <img class="form__inputs__contentname__img" src="{{ asset('build/images/imgs/form/form3.svg') }}" alt="Your Name">
                <input class="form__inputs__contentname__input" type="text" placeholder="Enter email address">
            </div>
            <div class="form__inputs__contentname">
                <img class="form__inputs__contentname__img" src="{{ asset('build/images/imgs/form/form4.svg') }}" alt="Your Name">
                <input class="form__inputs__contentname__input" type="text" placeholder="Enter subject">
            </div>
            <div class="form__inputs__contentname">
                <img class="form__inputs__contentname__img form__inputs__contentname__img--red" src="{{ asset('build/images/imgs/form/form5.svg') }}" alt="Your Name">
                <textarea class="form__inputs__contentname__inputarea" placeholder="Enter message"></textarea>
            </div>
        </div>
        <div class="form__btn">SEND</div>
    </section>
@endsection