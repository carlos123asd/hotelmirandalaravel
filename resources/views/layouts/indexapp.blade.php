<!-- resources/views/layouts/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Puedes usar yield para el título -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js" defer></script>
    @vite([
        'resources/css/app.css',
        'resources/css/index/index.css',
        'resources/css/aboutPage/about.scss',
        'resources/css/aboutUs/about.scss',
        'resources/css/aboutUs/imgAboutUs.scss',
        'resources/css/contact/contact.scss',
        'resources/css/estadisticas/estadisticas.scss',
        'resources/css/facilities/facilities.scss',
        'resources/css/footer/footer.scss',
        'resources/css/form/availability.scss',
        'resources/css/header/headerHome.scss',
        'resources/css/introvideo/video.scss',
        'resources/css/menu/menu.scss',
        'resources/css/nav/nav.scss',
        'resources/css/offers/offers.scss',
        'resources/css/room/room.scss',
        'resources/css/roomdetails/roomdetails.scss',
        'resources/css/sliderRooms/slider.scss',
        'resources/css/sliderStandar/sliderStandarNavigation.scss',
    ])
</head>
<body>
    <main>
        @yield('content') <!-- Aquí se insertará el contenido variable -->
    </main>

    <footer>
        <div class="footer">
            <div class="contentfooter1">
                <div>
                    <div class="footer__logo">H</div>
                    <span class="footer__name">HOTEL<br><span>MIRANDA</span></span>
                </div>
                <p class="footer__p">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div>
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="facebook" width="20px" height="20px" fill="white" viewBox="-192 -192 2304.00 2304.00" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="3.84"/>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M1168.737 487.897c44.672-41.401 113.824-36.889 118.9-36.663l289.354-.113 6.317-417.504L1539.65 22.9C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l62.045-451.233H1126.66v-69.152c0-54.937 14.214-96.112 42.078-122.058" fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Aquí irían los otros íconos de redes sociales y el resto del footer... -->
                </div>
            </div>
            <div class="footer__copy">
                <span class="footer__copy__tit">Copyright By@Example - 2020</span>
                <span class="footer__copy__sub">Terms of use | Privacy Environmental Policy</span>
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js') <!-- Cargar app.js que gestiona otros JS -->
</body>
</html>
