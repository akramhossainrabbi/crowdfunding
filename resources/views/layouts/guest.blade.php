<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CrowdFunding') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/flickity.min.css') }}">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </head>
    <body>
        <x-header />
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <x-footer />
    </body>

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/flickity.pkgd.min.js') }}"></script>
    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                var flkty = new Flickity(this.$refs.carousel, {
                    freeScroll: true,
                    wrapAround: true,
                    pageDots: false
                });
                flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                this.active = i;
                
                this.$nextTick(() => {
                    let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
                    flkty.resize();
                });
                }
            }
        }
    </script>
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/custom.js') }}"></script>
</html>