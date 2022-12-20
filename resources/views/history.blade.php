@extends('layouts.app')
@section('title', 'History')
@section('body')
    <body class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope
        itemtype="http://schema.org/WebPage">
        <!-- Header -->
        @include('layouts.partials.header')

        <main class="pt-[5.5rem] lg:pt-24">
            <!-- Page Title -->
            <section class="relative py-32">
                <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                    <img src="img/gradient.jpg" alt="gradient" class="h-full w-full" />
                </picture>
                <picture class="pointer-events-none absolute inset-0 -z-10 hidden dark:block">
                    <img src="img/gradient_dark.jpg" alt="gradient dark" class="h-full w-full" />
                </picture>
                <div class="container relative z-10">
                    <div class="mx-auto max-w-xl text-center">
                        <h1 class="mb-6 text-center font-display text-4xl font-medium text-jacarta-700 dark:text-white">
                            History
                        </h1>
                        <p class="text-lg leading-normal dark:text-jacarta-200">
                            Daftar riwayat penggunaan aplikasi.
                        </p>
                    </div>
                </div>
            </section>
            <!-- end page title -->

            <!-- Positions -->
            <section class="relative pb-24">
                <div class="container">
                    <!-- Table -->
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-jacarta-500 uppercase border-b dark:border-jacarta-600 bg-jacarta-50 dark:text-jacarta-400 dark:bg-jacarta-800">
                                        <th class="px-4 py-3">No</th>
                                        <th class="px-4 py-3">Tanggal & Jam</th>
                                        <th class="px-4 py-3">Deteksi</th>
                                        <th class="px-4 py-3">Gambar</th>
                                        <th class="px-4 py-3">Probabilitas</th>
                                        <th class="px-4 py-3">IP</th>
                                        <th class="px-4 py-3">Browser</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-jacarta-700 dark:bg-jacarta-800">
                                    @foreach ($predictions as $prediction)
                                    <tr>
                                        <td class="px-4 py-3 text-sm">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ date('d M Y H:i:s', strtotime($prediction->created_at)) }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <a href="{{ route('prediction', $prediction->id) }}" target="_blank">{{ $prediction->label->full_name }}</a>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <a href="{{ $prediction->image }}" target="_blank">
                                                <img src="{{ $prediction->image }}" alt="image" class="h-10" />
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ $prediction->accuracy }}%
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ $prediction->ip }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ $prediction->user_agent }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end table -->

                    <!-- Pagination -->
                    <div class="mt-5">
                        {!! $predictions->links('pagination::tailwind') !!}
                    </div>
                </div>
            </section>
            <!-- end positions -->
        </main>

        <!-- Wallet Modal -->
        @include('layouts.partials.wallet')@include('layouts.partials.wallet')

        <!-- Footer -->
        @include('layouts.partials.footer')

        <!-- JS Scripts -->
        <script src="/js/app.bundle.js"></script>
    </body>
@endsection
