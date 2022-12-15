<footer class="page-footer bg-white dark:bg-jacarta-900">
    <div class="container">
        <div class="flex flex-col items-center justify-between space-y-2 py-8 sm:flex-row sm:space-y-0">
            <span class="text-sm dark:text-jacarta-400">&copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                {{ config('app.name') }} — Made by
                <a href="{{ url('/') }}" class="hover:text-accent dark:hover:text-white">Kelompok 1 PCD</a>
            </span>
        </div>
    </div>
</footer>
