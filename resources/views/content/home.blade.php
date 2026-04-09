@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
  <section class="pt-28 pb-16">
    <div class="container slg:bg-light rounded-xl lg:py-20 py-10">
      <div class="grid lg:grid-cols-6 grid-cols-1 justify-between items-center gap-6">
        <div class="lg:order-1 order-2 lg:col-span-4">
          <h2
            class="lg:text-8xl/tight md:text-6xl text-4xl font-semibold  mb-7">
            {{ __('Your ready') }}
            <span
              class="text-6xl sbg-gradient-to-r from-secondary bg-black text-white to-accent rounded-full stext-black px-4 py-1 mb-2">made</span>
            {{ __('eCommerce store') }}.
          </h2>
          <p
            class="leading-7">
            {{ __('Welcome to Deewid, your all-in-one solution for creating a stunning and powerful ecommerce store. Empower your online business with our feature-rich platform designed to simplify the entire process.') }}
          </p>

          <div class="flex flex-wrap items-center mt-4 gap-6">
            <a
              class="py-3 px-6 rounded-full bg-secondary focus:outline focus:outline-primary/50 text-colorCodBlack"
              href="{{ route('deewid.register') }}">{{ __('Start for free') }}</a>
          </div>
        </div>

        <div class="lg:order-2 order-first lg:col-span-2">
          <div class="relative rounded-xl bg-light p-4">
            <img alt="img" src="{{ asset('assets/images/hero/hero.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--  <section class="py-6">
      <div class="container">
        <div class="text-center">
          <div>
            <div class="text-center">
              <span class="text-sm font-medium px-3 py-1 bg-light text-colorCodBlack rounded-full">{{ __('Investor') }}</span>
              <h1 class="text-3xl/tight font-medium mt-3 mb-4">{{ __('100+ choose Deewid') }}</h1>
              <p class="relative">{{ __('100+ choose') }} <span
                  class="text-primary">{{ __('Deewid') }}</span> {{ __('to drive performance & engagement.') }}</p>
            </div>

            @php
              $images = [
                'assets/images/brands/amazon.svg',
                'assets/images/brands/google.svg',
                'assets/images/brands/paypal.svg',
                'assets/images/brands/spotify.svg',
                'assets/images/brands/shopify.svg'
              ];
            @endphp
            <div class="flex flex-wrap md:flex-nowrap justify-center gap-10 mt-14">
              @foreach($images as $image)
                <div>
                  <img class="w-28" src="{{ asset($image) }}">
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section> --}}

  <section class="py-10">
    <div class="container bg-light rounded-[1.5rem]">
      <div class="py-16 sm:py-16">
        <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">

          <div class="order-2 lg:order-1">
            <span
              class="text-sm font-medium px-3 py-1 bg-black text-white rounded-full">{{ __('Sell everywhere') }}</span>
            <h1 class="text-5xl/tight capitalize font-medium mt-3 mb-4">{{ __('Build stores effortlessly') }}</h1>
            <p class="relative">
              {{ __('Create a visually stunning online presence without the need for complex coding. Our intuitive drag-and-drop interface empowers you to design and customize your store exactly the way you envision it.') }}
            </p>
            <br>
            <p class="relative">
              {{ __('Choose from a variety of professionally designed templates tailored to suit your industry and captivate your audience from the first click.') }}
            </p>
            <button class="mt-4 flex items-center">
              <a
                class="bg-black text-white rounded-full font-semibold flex-none focus:outline focus:outline-primary/40 px-8 py-3 mt-4"
                href="{{ route('deewid.register') }}">{{ __('Start for free  ') }}
                <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </button>
          </div>

          <div class="order-1 lg:order-2">
            <img src="{{ asset('assets/images/features/hero-dashboard-1.png') }}">
          </div>
        </div>
      </div>
    </div>

    <div class="container my-10 sm:my-40">
      <div class="text-centers grid grid-cols-3 items-end gap-4 smd:max-w-3xl smx-auto">
        <div class="col-span-2">
          <h2
            class="md:text-5xl text-xl font-semibold">{{ __('Redefining Online Selling with Cutting-Edge Features') }}</h2>
        </div>
        <div class="col-span-1">
          <p
            class="font-medium">{{ __('Easily create a quick payment link for your products or services, sell within clicks, and') }}
            <span
              class="text-colorCodBlack">{{ __('get paid quickly') }}</span>.</p>
        </div>
      </div>

      <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 pt-14">
        @php
          $featuresHomeTwo = getJsonData(resource_path('data/features-home-two.json'));
        @endphp
        @foreach($featuresHomeTwo as $feature)
          <div class="group">
            <div class="p-6 rounded-xl bg-light">
              <div
                class="w-16 h-16 bg-light flex items-center justify-center rounded-xl border-2">
                {!! get_svg_icon($feature->icon, 'relative', 'w-12 h-12 text-colorCodBlack') !!}
              </div>
              <h4 class="text-xl font-medium mt-6">{{ $feature->name }}</h4>
              <p class="leading-6 mt-2">{{ $feature->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="container bg-black text-white rounded-[1.5rem] mb-36">
      <div class="py-16 sm:py-20">
        <div class="grid lg:grid-cols-7 grid-cols-1 items-center lg:gap-2 gap-6">
          <div class="relative lg:col-span-3">
            <img class="mx-auto" src="{{ asset('assets/images/features/hero-dashboard.png') }}">
          </div>

          <div class="lg:col-span-4 lg:ps-20">
            <h1 class="text-6xl/tight font-medium mt-3 mb-4 text-white">{{ __('Best features for sale easily') }}</h1>
            <p
              class="mb-4">{{ __('Experience a simplified approach to managing your e-commerce tasks. Automate processes and integrate new tools to streamline operations, saving you time and resources.') }}</p>

            <div class="grid sm:grid-cols-2 grid-cols-1 gap-10">

              @php
                $featuresHomeOne = getJsonData(resource_path('data/features-home-one.json'));
              @endphp

              @foreach($featuresHomeOne as $feature)
                <div>
                  <div class="flex items-center justify-center rounded-xl w-12 h-12 bg-primary border-primary shadow">
                    {!!  get_svg_icon($feature->icon, 'relative', 'w-8 h-8 text-white') !!}
                  </div>
                  <h4 class="text-base mt-3 mb-2 text-white">{{ __($feature->name) }}</h4>
                  <p>{{ __($feature->description) }}</p>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container bg-black text-white rounded-[1.5rem]">
      <div class="py-16 sm:py-20">
        <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">
          <div>
            <img src="{{ asset('assets/images/features/hero-pos.png') }}">
          </div>

          <div>
            <span
              class="text-sm font-medium px-3 py-1 bg-primary text-white rounded-full">{{ __('Grow faster') }}</span>
            <h1 class="text-6xl/tight font-medium mt-3 mb-4 text-white">{{ __('Manage Simply with Deewid') }}</h1>

            @php
              $sectionList = [
                'Connect seamlessly to over a hundred integrations, allowing your customers to choose their preferred payment and shipping options effortlessly.',
                'Save valuable time with automated shipping, tax calculations, and real-time inventory tracking.',
                'Tailor the appearance of your catalog, checkout page, and customer notifications without the need for coding skills.',
                'Enjoy a centralized hub to manage orders, products, promotions, and customer relationships efficiently from a single, user-friendly dashboard.'
                ];
            @endphp

            <div class="flex flex-col gap-5 mt-4 ml-2">
              @foreach($sectionList as $section)
                <div class="flex font-normal">
                  {!! get_svg_icon('check-circle', 'relative', 'w-5 h-5 mr-3 text-white') !!}
                  {{ __($section) }}
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--<section class="py-10">
    <div class="container">
      <div class="text-center">
        <span class="text-sm font-medium py-1 px-3  bg-light text-colorCodBlack rounded-full">Blog</span>
        <h1 class="text-3xl font-medium my-3">Useful Reading</h1>
      </div>

      <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-12">

        @foreach($posts as $key => $post)
          <div class="relative">
            <div class="relative">
              <a href="{{ route('blog.category', $post->category) }}">
                <div class="absolute end-4 top-3">
                  <span
                    class="px-3 py-1 text-sm font-medium text-white rounded bg-primary">{{ $post->category }}</span>
                </div>
              </a>
              <a href="{{ route('blog.post', $post->slug) }}">
                <img class="rounded" src="{{ asset($post->feature_image ) }}">
              </a>
            </div>
            <p class="mt-5">{{ $post->created_at }}</p>
            <h4 class="mt-1 text-lg">
              <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
            </h4>
            <p
              class="font-normal mt-2">{{ getTextPreview($post->content) }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section> --}}

  <x-cta></x-cta>
@endsection
