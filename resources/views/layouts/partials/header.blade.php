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
                    <img src="/img/logo_white.png" class="hidden max-h-7 dark:block" alt="{{ config('app.name') }}" />
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
