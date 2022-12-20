@extends('layouts.app')
@section('title', 'Prediction')
@section('body')

    <body class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope
        itemtype="http://schema.org/WebPage">
        <!-- Header -->
        <header class="js-page-header fixed top-0 z-20 w-full backdrop-blur transition-colors">
            <div class="flex items-center px-6 py-6 xl:px-24">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="shrink-0">
                    <img src="/img/logo.png" class="max-h-7 dark:hidden" alt="{{ config('app.name') }}" />
                    <img src="/img/logo_white.png" class="hidden max-h-7 dark:block" alt="{{ config('app.name') }}" />
                </a>

                <!-- Menu / Actions -->
                <div
                    class="js-mobile-menu invisible lg:visible fixed inset-0 z-10 ml-auto items-center bg-white opacity-0 dark:bg-jacarta-800 lg:relative lg:inset-auto lg:flex lg:bg-transparent lg:opacity-100 dark:lg:bg-transparent">
                    <!-- Mobile Logo / Menu Close -->
                    <div
                        class="t-0 fixed left-0 z-10 flex w-full items-center justify-between bg-white p-6 dark:bg-jacarta-800 lg:hidden">
                        <!-- Mobile Logo -->
                        <a href="{{ url('/') }}" class="shrink-0">
                            <img src="/img/logo.png" class="max-h-7 dark:hidden" alt="{{ config('app.name') }}" />
                            <img src="/img/logo_white.png" class="hidden max-h-7 dark:block"
                                alt="{{ config('app.name') }}" />
                        </a>

                        <!-- Mobile Menu Close -->
                        <button
                            class="js-mobile-close group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
                            aria-label="close mobile menu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Primary Nav -->
                    <nav class="navbar w-full">
                        <ul class="flex flex-col lg:flex-row">
                            <li class="group">
                                <a href="{{ url('/') }}"
                                    class="flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-accent focus:text-accent dark:text-white dark:hover:text-accent dark:focus:text-accent lg:px-5">Back
                                    to Home</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Mobile Connect Wallet / Socials -->
                    <div class="mt-10 w-full lg:hidden">
                        <a href="https://deepnote.com/workspace/hiskiapp-491275ec-846d-4455-a0a6-b4cf0204a85f/project/Citra-f2eda121-a31c-4eae-98e6-26bf996b9585/%2FMain.ipynb"
                            class="js-wallet block w-full rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
                            data-bs-toggle="modal" data-bs-target="#walletModal">
                            Deepnote
                        </a>
                    </div>

                    <!-- Actions -->
                    <div class="ml-8 hidden lg:flex xl:ml-12">
                        <!-- Wallet -->
                        <a href="#"
                            class="js-wallet group flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
                            data-bs-toggle="modal" data-bs-target="#walletModal" aria-label="wallet">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M22 6h-7a6 6 0 1 0 0 12h7v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2zm-7 2h8v8h-8a4 4 0 1 1 0-8zm0 3v2h3v-2h-3z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Actions -->
                <div class="ml-auto flex lg:hidden">
                    <!-- Mobile Menu Toggle -->
                    <button
                        class="js-mobile-toggle group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
                        aria-label="open mobile menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main class="pt-[5.5rem] lg:pt-24">
            <!-- Banner -->
            <div class="relative">
                <img src="/img/collections/collection_banner.jpg" alt="banner" class="h-[18.75rem] object-cover" />
            </div>
            <!-- end banner -->

            <!-- Profile -->
            <section class="relative bg-light-base pb-12 pt-28 dark:bg-jacarta-800">
                <!-- Avatar -->
                <div
                    class="absolute left-1/2 top-0 z-10 flex -translate-x-1/2 -translate-y-1/2 items-center justify-center">
                    <figure class="relative">
                        <img src="{{ $prediction->image }}" alt="collection avatar"
                            class="rounded-xl border-[5px] border-white dark:border-jacarta-600"
                            style="max-height: 180px;" />
                        <div class="absolute -right-3 bottom-0 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                            data-tippy-content="Telah diproses menggunakan jaringan saraf tiruan">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-[.875rem] w-[.875rem] fill-white">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                            </svg>
                        </div>
                    </figure>
                </div>

                <div class="container">
                    <div class="text-center">
                        <h2 class="mb-2 font-display text-4xl font-medium text-jacarta-700 dark:text-white">
                            {{ $prediction->label->name }}</h2>
                        <div class="mb-8">
                            <span class="text-sm font-bold text-jacarta-400">Probabilitas: </span>
                            <a href="javascript:void(0);"
                                class="text-sm font-bold text-accent">{{ $prediction->accuracy }}</a>
                        </div>

                        <div
                            class="mb-8 inline-flex flex-wrap items-center justify-center rounded-xl border border-jacarta-100 bg-white dark:border-jacarta-600 dark:bg-jacarta-800">
                            <a href="#"
                                class="w-1/2 border-r border-jacarta-100 py-4 hover:shadow-md dark:border-jacarta-600 sm:w-32">
                                <div
                                    class="mb-1 flex items-center justify-center text-base font-medium text-jacarta-700 dark:text-white">
                                    <span class="font-bold">{{ $prediction->label->material }}</span>
                                </div>
                                <div class="text-2xs font-medium tracking-tight dark:text-jacarta-400">Bahan
                                </div>
                            </a>
                            <a href="#"
                                class="w-1/2 border-r border-jacarta-100 py-4 hover:shadow-md dark:border-jacarta-600 sm:w-32">
                                <div
                                    class="mb-1 flex items-center justify-center text-base font-medium text-jacarta-700 dark:text-white">
                                    <span class="font-bold">{{ $minPrice }}</span>
                                </div>
                                <div class="text-2xs font-medium tracking-tight dark:text-jacarta-400">Harga Terendah</div>
                            </a>
                            <a href="#" class="w-1/2 rounded-r-xl border-jacarta-100 py-4 hover:shadow-md sm:w-32">
                                <div
                                    class="mb-1 flex items-center justify-center text-base font-medium text-jacarta-700 dark:text-white">
                                    <span class="font-bold">{{ $maxPrice }}</span>
                                </div>
                                <div class="text-2xs font-medium tracking-tight dark:text-jacarta-400">Harga Tertinggi
                                </div>
                            </a>
                        </div>

                        <p class="mx-auto max-w-xl text-lg dark:text-jacarta-300">
                            Pilih dari daftar alat dapur dibawah yang telah diprediksi akan Anda butuhkan untuk memasak
                            makanan yang lezat dan nikmat.
                        </p>
                    </div>
                </div>
            </section>
            <!-- end profile -->

            <!-- Collection -->
            <section class="relative py-24">
                <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                    <img src="/img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
                </picture>
                <div class="container">
                    <!-- Tabs Nav -->
                    <ul class="nav nav-tabs mb-12 flex items-center justify-center border-b border-jacarta-100 dark:border-jacarta-600"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                                id="items-tab" data-bs-toggle="tab" data-bs-target="#items" type="button"
                                role="tab" aria-controls="items" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="mr-1 h-5 w-5 fill-current">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M13 21V11h8v10h-8zM3 13V3h8v10H3zm6-2V5H5v6h4zM3 21v-6h8v6H3zm2-2h4v-2H5v2zm10 0h4v-6h-4v6zM13 3h8v6h-8V3zm2 2v2h4V5h-4z" />
                                </svg>
                                {{--                <span class="font-display text-base font-medium inline-flex">Items From &nbsp;&nbsp; <img src="http://www.google.com/s2/favicons?domain=shopee.co.id"/></span> --}}
                                <span class="font-display text-base font-medium inline-flex">Items</span>
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Items Tab -->
                        <div class="tab-pane fade show active" id="items" role="tabpanel"
                            aria-labelledby="items-tab">
                            <!-- Filters -->
                            <div class="mb-8 flex flex-wrap items-center justify-between">
                                <div class="flex flex-wrap items-center">
                                </div>

                                <!-- Sort -->
                                <div class="dropdown my-1 cursor-pointer">
                                    <div class="dropdown-toggle inline-flex w-48 items-center justify-between rounded-lg border border-jacarta-100 bg-white py-2 px-3 text-sm dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white"
                                        role="button" id="sort" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="font-display">
                                            @if (request()->get('sort') === 'asc')
                                                Price: Low to High
                                            @elseif(request()->get('sort') === 'desc')
                                                Price: High to Low
                                            @else
                                                Recently Added
                                            @endif
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24" class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                                        </svg>
                                    </div>

                                    <div class="dropdown-menu z-10 hidden min-w-[220px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="sort">
                                        <span
                                            class="block px-5 py-2 font-display text-sm font-semibold text-jacarta-300">Sort
                                            By</span>
                                        <a href="{{ route('prediction', ['prediction' => $prediction->id]) }}"
                                            class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm text-jacarta-700 transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Recently Added
                                            @if (!in_array(request()->get('sort'), ['asc', 'desc']))
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" class="mb-[3px] h-4 w-4 fill-accent">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                                </svg>
                                            @endif
                                        </a>
                                        <a href="{{ route('prediction', ['prediction' => $prediction->id, 'sort' => 'asc']) }}"
                                            class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Price: Low to High
                                            @if (request()->get('sort') === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" class="mb-[3px] h-4 w-4 fill-accent">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                                </svg>
                                            @endif
                                        </a>

                                        <a href="{{ route('prediction', ['prediction' => $prediction->id, 'sort' => 'desc']) }}"
                                            class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Price: High to Low
                                            @if (request()->get('sort') === 'desc')
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24" class="mb-[3px] h-4 w-4 fill-accent">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                                </svg>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end filters -->

                            <!-- Grid -->
                            <div class="grid grid-cols-1 gap-[1.875rem] md:grid-cols-2 lg:grid-cols-4">
                                @foreach ($kitchenSets as $kitchenSet)
                                    <article>
                                        <div
                                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                            <figure class="relative">
                                                <a href="{{ $kitchenSet->url }}" target="_blank">
                                                    <img src="{{ $kitchenSet->image ?? '/img/products/item_5.jpg' }}"
                                                        alt="{{ $kitchenSet->name }}" class="w-full rounded-[0.625rem]"
                                                        loading="lazy" />
                                                </a>
                                            </figure>
                                            <div class="mt-7 flex items-center justify-between">
                                                <a href="{{ $kitchenSet->url }}" target="_blank">
                                                    <span
                                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">{{ \Illuminate\Support\Str::limit($kitchenSet->name, 48, '...') }}</span>
                                                </a>
                                            </div>
                                            <div class="mt-2 text-sm">
                                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">Dari
                                                    Rp{{ number_format($kitchenSet->price) }}</span>
                                                <span
                                                    class="text-jacarta-500 dark:text-jacarta-300 text-right">{{ $kitchenSet->sold_total }}
                                                    Terjual</span>
                                            </div>

                                            <div class="mt-8 flex items-center justify-between">
                                                <a href="{{ $kitchenSet->url }}" target="_blank"
                                                    class="group flex items-center">
                                                    <span
                                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">Beli
                                                        Sekarang</span>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            <!-- end grid -->
                            <div class="mt-8 w-full">
                                {!! $kitchenSets->links('pagination::tailwind') !!}
                            </div>
                        </div>
                        <!-- end items tab -->
                    </div>
                </div>
            </section>
            <!-- end collection -->
        </main>

        <!-- Wallet Modal -->
        @include('layouts.partials.wallet')

        <!-- Footer -->
        @include('layouts.partials.footer')

        <!-- JS Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <script src="/js/app.bundle.js"></script>
        <script src="/js/charts.bundle.js"></script>
    </body>
@endsection
