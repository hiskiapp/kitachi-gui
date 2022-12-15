@extends('layouts.app')
@section('title', 'Home')
@section('body')

    <body class="overflow-x-hidden bg-jacarta-900 font-body text-jacarta-500" itemscope itemtype="http://schema.org/WebPage">
        <!-- Header -->
        <header class="js-page-header page-header--transparent fixed top-0 z-20 w-full backdrop-blur transition-colors">
            <div class="flex items-center px-6 py-6 xl:px-24">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex-1 shrink-0">
                    <img src="img/logo_white.png" class="max-h-7" alt="{{ config('app.name') }}" />
                </a>

                <!-- Menu / Actions -->
                <div
                    class="js-mobile-menu invisible lg:visible fixed inset-0 z-10 flex-[3_3_0%] items-center bg-jacarta-800 opacity-0 lg:relative lg:inset-auto lg:flex lg:bg-transparent lg:opacity-100">
                    <!-- Mobile Logo / Menu Close -->
                    <div
                        class="t-0 fixed left-0 z-10 flex w-full items-center justify-between bg-jacarta-800 p-6 lg:hidden">
                        <!-- Mobile Logo -->
                        <a href="{{ url('/') }}" class="shrink-0">
                            <img src="img/logo_white.png" class="max-h-7" alt="{{ config('app.name') }}" />
                        </a>

                        <!-- Mobile Menu Close -->
                        <button
                            class="js-mobile-close group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 border-transparent bg-white/[.15] transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent"
                            aria-label="close mobile menu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-4 w-4 fill-white transition-colors group-hover:fill-white group-focus:fill-white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                            </svg>
                        </button>
                    </div>

                    <!-- CTA / Mobile Socials -->
                    <div class="mt-10 w-full lg:hidden">
                        <!-- CTA -->
                        <a href="https://deepnote.com/workspace/hiskiapp-491275ec-846d-4455-a0a6-b4cf0204a85f/project/Citra-f2eda121-a31c-4eae-98e6-26bf996b9585/%2FMain.ipynb"
                            class="mb-8 block rounded-full bg-white py-3 px-8 text-center font-semibold text-accent shadow-white-volume transition-all hover:bg-accent-dark hover:text-white hover:shadow-accent-volume">
                            Deepnote
                        </a>
                        <hr class="my-5 h-px border-0 bg-jacarta-600" />

                        <!-- Socials -->
                        <div class="flex items-center justify-center space-x-5">
                            <a href="#" class="group">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook"
                                    class="h-5 w-5 fill-jacarta-300 group-hover:fill-white" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="group">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                                    class="h-5 w-5 fill-jacarta-300 group-hover:fill-white" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="group">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="discord"
                                    class="h-5 w-5 fill-jacarta-300 group-hover:fill-white" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="group">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                                    class="h-5 w-5 fill-jacarta-300 group-hover:fill-white" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="group">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok"
                                    class="h-5 w-5 fill-jacarta-300 group-hover:fill-white" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="hidden flex-1 justify-end lg:flex">
                    <a href="https://deepnote.com/workspace/hiskiapp-491275ec-846d-4455-a0a6-b4cf0204a85f/project/Citra-f2eda121-a31c-4eae-98e6-26bf996b9585/%2FMain.ipynb"
                        class="rounded-full bg-white py-3 px-8 text-center font-semibold text-accent shadow-white-volume transition-all hover:bg-accent-dark hover:text-white hover:shadow-accent-volume">
                        Deepnote
                    </a>
                </div>

                <!-- Mobile Menu Actions -->
                <div class="ml-auto flex lg:hidden">
                    <!-- Mobile Menu Toggle -->
                    <button
                        class="js-mobile-toggle group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
                        aria-label="open mobile menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero -->
            <section class="hero relative py-20 md:pt-32">
                <picture class="pointer-events-none absolute inset-0 -z-10">
                    <img src="img/gradient_dark.jpg" alt="gradient dark" class="h-full w-full" />
                </picture>
                <img src="img/patterns/pattern_donut.png" alt="pattern donut" class="absolute right-0 top-0 -z-10" />

                <div class="container">
                    <div class="mx-auto max-w-2xl pt-24 text-center">
                        <h1 class="mb-6 font-display text-5xl text-white lg:text-6xl">Selamat Datang di
                            <br>{{ config('app.name') }} App!
                        </h1>
                        <p class="mx-auto mb-8 max-w-md text-lg leading-normal text-jacarta-50">
                            Sebuah tempat yang menyediakan fitur deteksi alat dapur dan bahan yang bermanfaat bagi para
                            pecinta masak.
                        </p>
                    </div>
                </div>
            </section>
            <!-- end hero -->

            <div class="relative mx-auto max-w-[90rem]">
                <img src="img/nft-game/crypto_icons.png" class="pointer-events-none absolute -top-1/4 animate-fly"
                    alt="" />
                <div class="container">
                    <figure
                        class="relative overflow-hidden rounded-3xl before:absolute before:inset-0 before:bg-jacarta-900/25">
                        <img src="img/nft-game/nft_game_video_poster.jpg" class="w-full" id="thumb-cam"
                            alt="video" />
                        <video id="main-cam" class="w-full z-100 hidden" playsinline></video>
                        <button
                            class="js-video-modal-trigger absolute top-1/2 left-1/2 flex h-24 w-24 -translate-y-1/2 -translate-x-1/2 items-center justify-center rounded-full border-2 border-white transition-transform will-change-transform hover:scale-90"
                            id="btn-cam">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-8 w-8 fill-white">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M19.376 12.416L8.777 19.482A.5.5 0 0 1 8 19.066V4.934a.5.5 0 0 1 .777-.416l10.599 7.066a.5.5 0 0 1 0 .832z">
                                </path>
                            </svg>
                        </button>
                    </figure>
                    <div class="mx-auto mt-5 max-w-2xl pt-6 text-center">
                        <button type="button"
                            class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
                            id="submit-cam">Submit</button>
                    </div>
                </div>
            </div>
            <!-- end intro video -->

            <!-- Characters Slider -->
            <section class="relative pb-12 pt-24 lg:py-36">
                <picture class="pointer-events-none absolute inset-0 -z-10">
                    <img src="img/gradient_creative.jpg" alt="gradient" class="h-full w-full" />
                </picture>
                <div class="container">
                    <h2 class="mx-auto mb-16 max-w-md text-center font-display text-3xl text-white">
                        Dataset yang sudah dilatih di Jaringan Saraf Tiruan:
                    </h2>
                </div>
                <div class="relative px-6 pb-16 sm:px-0">
                    <!-- Slider -->
                    <div class="swiper coverflow-slider-2 !py-5">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_1.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Garpu</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1633_19343)">
                                                                    <path
                                                                        d="M8 15.333a5 5 0 01-3.426-8.642C5.47 5.85 7.666 4.333 7.333 1c4 2.667 6 5.333 2 9.333.667 0 1.667 0 3.333-1.646.18.515.334 1.069.334 1.646a5 5 0 01-5 5z"
                                                                        fill="url(#paint0_linear_1633_19343)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1633_19343"
                                                                        x1="8" y1="15.333" x2="7.667"
                                                                        y2="1.333" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF2D2D" />
                                                                        <stop offset="1" stop-color="#FFD439" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1633_19343">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Besi</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_2.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Mangkok</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6313)">
                                                                    <path
                                                                        d="M12.268 1.133l-1.855 1.689c.864.26 1.658.71 2.327 1.315 2.341 2.134 2.341 5.592 0 7.726-1.728 1.573-4.399 2.574-8.01 3.004l1.854-1.689a6.091 6.091 0 01-2.327-1.315c-2.341-2.134-2.355-5.58 0-7.726 1.728-1.573 4.4-2.574 8.012-3.004h-.001zm-3.77 4.2c-1.656 0-3 1.194-3 2.667 0 1.473 1.344 2.667 3 2.667 1.657 0 3-1.194 3-2.667 0-1.473-1.343-2.667-3-2.667z"
                                                                        fill="url(#paint0_linear_1739_6313)"></path>
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6313"
                                                                        x1="8.496" y1="14.867" x2="8.241"
                                                                        y2="1.45" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#DCF4A9"></stop>
                                                                        <stop offset="1" stop-color="#7CE2C3"></stop>
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6313">
                                                                        <path fill="#fff" transform="translate(.5)"
                                                                            d="M0 0h16v16H0z"></path>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Kaca</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_3.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Panci</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1633_19343)">
                                                                    <path
                                                                        d="M8 15.333a5 5 0 01-3.426-8.642C5.47 5.85 7.666 4.333 7.333 1c4 2.667 6 5.333 2 9.333.667 0 1.667 0 3.333-1.646.18.515.334 1.069.334 1.646a5 5 0 01-5 5z"
                                                                        fill="url(#paint0_linear_1633_19343)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1633_19343"
                                                                        x1="8" y1="15.333" x2="7.667"
                                                                        y2="1.333" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF2D2D" />
                                                                        <stop offset="1" stop-color="#FFD439" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1633_19343">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Besi</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_4.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Piring</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6313)">
                                                                    <path
                                                                        d="M12.268 1.133l-1.855 1.689c.864.26 1.658.71 2.327 1.315 2.341 2.134 2.341 5.592 0 7.726-1.728 1.573-4.399 2.574-8.01 3.004l1.854-1.689a6.091 6.091 0 01-2.327-1.315c-2.341-2.134-2.355-5.58 0-7.726 1.728-1.573 4.4-2.574 8.012-3.004h-.001zm-3.77 4.2c-1.656 0-3 1.194-3 2.667 0 1.473 1.344 2.667 3 2.667 1.657 0 3-1.194 3-2.667 0-1.473-1.343-2.667-3-2.667z"
                                                                        fill="url(#paint0_linear_1739_6313)"></path>
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6313"
                                                                        x1="8.496" y1="14.867" x2="8.241"
                                                                        y2="1.45" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#DCF4A9"></stop>
                                                                        <stop offset="1" stop-color="#7CE2C3"></stop>
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6313">
                                                                        <path fill="#fff" transform="translate(.5)"
                                                                            d="M0 0h16v16H0z"></path>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Kaca</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_5.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Sendok</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1633_19343)">
                                                                    <path
                                                                        d="M8 15.333a5 5 0 01-3.426-8.642C5.47 5.85 7.666 4.333 7.333 1c4 2.667 6 5.333 2 9.333.667 0 1.667 0 3.333-1.646.18.515.334 1.069.334 1.646a5 5 0 01-5 5z"
                                                                        fill="url(#paint0_linear_1633_19343)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1633_19343"
                                                                        x1="8" y1="15.333" x2="7.667"
                                                                        y2="1.333" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF2D2D" />
                                                                        <stop offset="1" stop-color="#FFD439" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1633_19343">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Besi</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1633_19371)">
                                                                    <path
                                                                        d="M3.757 4.424L8 .181l4.243 4.243a6 6 0 11-8.486 0z"
                                                                        fill="url(#paint0_linear_1633_19371)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1633_19371"
                                                                        x1="8" y1="14.667" x2="7.717"
                                                                        y2=".516" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#2DFFF2" />
                                                                        <stop offset="1" stop-color="#3D39FF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1633_19371">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Nasi</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_6.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Sumpit</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6306)">
                                                                    <path
                                                                        d="M4.557 8.667a4 4 0 117.889 0h-7.89zM1.835 10H8.5v1.333H1.835V10zm8 0h5.333v1.333H9.835V10zm1.333 2.667h2.667V14h-2.667v-1.333zm-8 0h6.667V14H3.168v-1.333zm4.667-12h1.333v2H7.835v-2zm-4.99 2.619l.942-.943 1.414 1.414-.942.943-1.414-1.413v-.001zm10.37-.943l.942.943L12.743 4.7l-.942-.943 1.414-1.414zm2.62 4.99v1.334h-2V7.333h2zm-12.667 0v1.334h-2V7.333h2z"
                                                                        fill="url(#paint0_linear_1739_6306)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6306"
                                                                        x1="8.502" y1="14" x2="8.305"
                                                                        y2=".972" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FFC42D" />
                                                                        <stop offset="1" stop-color="#FFF7DC" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6306">
                                                                        <path fill="#fff" transform="translate(.5)"
                                                                            d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Kayu</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1739_6537)">
                                                                    <path
                                                                        d="M10.666 1.333v1.334H10v2.162c0 .772.167 1.534.49 2.234l2.855 6.184a1 1 0 01-.908 1.42H3.563a1 1 0 01-.909-1.42L5.51 7.063c.323-.7.49-1.462.49-2.234V2.667h-.666V1.333h5.333zm-2 1.334H7.333v2.666h1.333V2.667z"
                                                                        fill="url(#paint0_linear_1739_6537)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1739_6537"
                                                                        x1="8" y1="14.667" x2="7.735"
                                                                        y2="1.641" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#8054FF" />
                                                                        <stop offset="1" stop-color="#FF68D5" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1739_6537">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Plastik</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <a href="javascript:void(0);"
                                        class="animate-gradient--no-text-fill block animate-gradient overflow-hidden rounded-2.5xl !bg-clip-border p-[2px] text-center shadow-md transition-shadow hover:shadow-lg">
                                        <div class="rounded-[1.125rem] bg-jacarta-900 p-8">
                                            <img src="img/nft-game/gradient_glow_small.png" alt=""
                                                class="absolute inset-0" />
                                            <figure class="relative my-4 mb-14">
                                                <img src="/img/nft-game/kitachi_set_7.png" alt="item 1"
                                                    class="swiper-lazy inline-block" height="212" width="182" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </figure>
                                            <div class="relative rounded-2lg bg-jacarta-700 p-5">
                                                <h3 class="mb-3 text-lg font-semibold leading-none text-white">Wajan</h3>
                                                <div class="flex justify-center space-x-5">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="mr-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-jacarta-900">
                                                            <svg width="16" height="16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1633_19343)">
                                                                    <path
                                                                        d="M8 15.333a5 5 0 01-3.426-8.642C5.47 5.85 7.666 4.333 7.333 1c4 2.667 6 5.333 2 9.333.667 0 1.667 0 3.333-1.646.18.515.334 1.069.334 1.646a5 5 0 01-5 5z"
                                                                        fill="url(#paint0_linear_1633_19343)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1633_19343"
                                                                        x1="8" y1="15.333" x2="7.667"
                                                                        y2="1.333" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FF2D2D" />
                                                                        <stop offset="1" stop-color="#FFD439" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_1633_19343">
                                                                        <path fill="#fff" d="M0 0h16v16H0z" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="font-display text-sm font-semibold text-white">Besi</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>

                    <!-- Slider dots -->
                    <div class="swiper-pagination-2 mt-4 text-center"></div>
                </div>
            </section>
            <!-- end characters slider -->

            <!-- Statistic / Promo -->
            <section class="relative py-12 lg:py-36">
                <picture
                    class="pointer-events-none absolute inset-0 -z-10 after:absolute after:bottom-0 after:h-1/3 after:w-full after:bg-gradient-to-t after:from-[#010107]">
                    <img src="img/gradient_creative.jpg" alt="gradient" class="h-full w-full -scale-y-100" />
                </picture>
                <div class="container -mt-20 lg:pb-32">
                    <h2 class="mb-12 max-w-5xl font-display text-5xl text-white lg:text-[6rem]">
                        Kelompok 1
                    </h2>
                    <p class="mb-20 max-w-4xl text-3xl font-medium text-white lg:ml-36">
                        Pengolahan Citra Digital
                    </p>
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                        <div>
                            <div>
                                <span
                                    class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold">100</span>
                            </div>
                            <span class="text-lg text-white">Jumlah Dataset</span>
                        </div>
                        <div>
                            <div>
                                <span
                                    class="text-fill-transparent inline-block bg-gradient-to-r from-[#FFE993] to-[#FFB770] bg-clip-text font-display text-5xl font-semibold">up
                                    to 85%</span>
                            </div>
                            <span class="text-lg text-white">Tingkat Akurasi</span>
                        </div>
                    </div>
                </div>

                <!-- Promo 1 -->
                <div class="container pt-32">
                    <div class="items-center justify-between lg:flex">
                        <div class="relative text-center lg:w-1/2">
                            <img src="img/nft-game/gradient_glow_large_1.png" alt="" loading="lazy"
                                class="absolute scale-150" />
                            <img src="img/nft-game/na_1.png" alt="" loading="lazy"
                                class="relative -top-10 inline-block" />
                            <img src="img/hero/3D_elements.png" alt="" loading="lazy"
                                class="absolute top-10 animate-fly" />
                        </div>
                        <div class="lg:w-[45%] lg:pl-16">
                            <h2 class="mb-6 font-display text-2xl text-white">
                                Temukan. Koleksi. Beli.
                            </h2>
                            <p class="mb-12 text-jacarta-200">
                                Temukan berbagai katalog alat dapur yang dapat kamu koleksi dan beli disini sesuai dengan
                                kebutuhanmu.
                            </p>
                            <span class="text-sm text-jacarta-400">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                {{ config('app.name') }} — Made by
                                Kelompok 1
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end statistic / promo -->

        </main>

        <!-- JS Scripts -->
        <script src="./js/app.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            'use strict';
            const video = document.getElementById('main-cam');

            const constraints = {
                audio: false,
                video: {
                    width: 640,
                    height: 420
                }
            };

            async function startCam() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia(constraints);
                    handleSuccess(stream);
                    // play video
                    video.play();
                } catch (e) {
                    console.error('navigator.getUserMedia error:', e);
                }
            }

            function handleSuccess(stream) {
                window.stream = stream;
                video.srcObject = stream;
            }

            const btnCam = document.getElementById('btn-cam');
            const thumbCam = document.getElementById('thumb-cam');
            btnCam.addEventListener('click', () => {
                startCam();
                video.classList.remove('hidden');
                btnCam.classList.add('hidden');
                thumbCam.classList.add('hidden');
            });

            // upload image from video when #submit-cam clicked using fetch '/upload'
            const submitCam = document.getElementById('submit-cam');
            submitCam.addEventListener('click', () => {
                // check if camera is on
                if (video.classList.contains('hidden')) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Kamera belum diaktifkan!',
                    });
                    return;
                }
                const canvas = document.createElement('canvas');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                const data = canvas.toDataURL('image/png');
                // pause video
                video.pause();
                // show loading sweetalert
                Swal.fire({
                    title: 'Mohon tunggu...',
                    html: 'Sedang memproses gambar',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // wait for 1 seconds
                setTimeout(() => {
                    // send data to server with fetch (add header csrf token)
                    fetch('/upload', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute(
                                        'content')
                            },
                            body: JSON.stringify({
                                data: data
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Gambar berhasil diupload!',
                                });
                                window.location.href = `/prediction/${data.data.prediction_id}`;
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan!',
                                });
                                video.play();
                            }
                        })
                        .catch(err => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Terjadi kesalahan!',
                            });
                            video.play();
                        });
                }, 1000);
            });
        </script>
    </body>
@endsection
