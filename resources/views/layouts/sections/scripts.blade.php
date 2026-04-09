<x-back-to-top />

<script src="{{asset('assets/libs/@frostui/tailwindcss/frostui.js')}}"></script>

<script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

@vite([
  'resources/assets/js/theme.js',
])

@livewireScripts

@yield('vendor-script')

@yield('page-script')
