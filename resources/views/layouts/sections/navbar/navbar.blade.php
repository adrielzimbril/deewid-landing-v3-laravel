<header class="light fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5"
        id="navbar">
  <div class="container md:p-0">
    <nav class="flex items-center">
      <a href="{{ route('home') }}">
        <img alt="Logo Dark" class="h-10 logo-dark" src="{{ asset('assets/images/logo-dark.svg') }}">
        <img alt="Logo Light" class="h-10 logo-light" src="{{ asset('assets/images/logo-light.svg') }}">
      </a>

      <div class="hidden lg:block mx-auto">
        <ul class="navbar-nav flex gap-x-3 items-center justify-center">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cta.variants') }}">{{ __('CTA Variants') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('store.not-found') }}">{{ __('Store Not Found') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('store.unavailable') }}">{{ __('Store Unavailable') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
          </li>
        </ul>
      </div>

      <div class="hidden lg:flex items-center ms-3">
        <a class="px-4 py-2" href="{{ route('deewid.login') }}">{{ __('Login') }}</a>

        <a
          class="bg-secondary text-colorCodBlack px-5 py-3 rounded-full shadow shadow-secondary/10 inline-flex items-center text-sm"
          href="{{ route('deewid.register') }}"
          target="_blank">{{ __('Get started for free') }}</a>
      </div>

      <div class="lg:hidden flex items-center ms-auto px-2.5">
        <button data-fc-target="mobileMenu" data-fc-type="offcanvas" type="button">
          <i class="fa-solid fa-bars text-2xl text-colorCodBlack"></i>
        </button>
      </div>
    </nav>
  </div>
</header>

<div id="mobileMenu"
  class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
  <div class="flex flex-col h-full divide-y-2 divide-gray-200">
    <div class="p-6 flex items-center justify-between">
      <a href="{{ route('home') }}">
        <img alt="Logo" class="h-8 logo-dark" src="{{ asset('assets/images/logo-dark.svg') }}">
        <img alt="Logo" class="h-8 logo-light" src="{{ asset('assets/images/logo.svg') }}">
      </a>

      <button class="flex items-center px-2" data-fc-dismiss>
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>

    <div class="p-6 overflow-y-scroll h-full">
      <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cta.variants') }}">{{ __('CTA Variants') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('store.not-found') }}">{{ __('Store Not Found') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('store.unavailable') }}">{{ __('Store Unavailable') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
        </li>
      </ul>
    </div>

    <div class="p-6 flex items-center justify-center">
      <a class="bg-secondary w-full p-3 rounded-full flex items-center justify-center text-sm mr-2"
         href="{{ route('deewid.login') }}"
         target="_blank">{{ __('Login') }}</a>
      <a class="bg-secondary w-full p-3 rounded-full flex items-center justify-center text-sm"
         href="{{ route('deewid.register') }}"
         target="_blank">{{ __('Get started for free') }}</a>
    </div>
  </div>
</div>

