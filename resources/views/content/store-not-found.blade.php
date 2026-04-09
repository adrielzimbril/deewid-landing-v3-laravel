@extends('layouts/layoutMaster')

@section('title', 'Store Not Found')
@section('meta', 'Deewid storefront fallback page for unknown or missing stores.')

@section('content')
  <section class="pt-28 py-16 sm:py-24 overflow-hidden">
    <div class="container rounded-xl items-center relative py-16 sm:py-26 bg-light overflow-hidden">
      <div class="max-w-3xl mx-auto">
        <div class="text-center">
          <div class="lg:col-span-1">
            <div class="relative inline-flex mt-6">
              <a
                class="py-1 px-6 mr-2 rounded-full text-sm bg-colorCodGray/10 focus:outline focus:outline-primary/50 transition-all duration-500"
                href="{{ route('deewid.register') }}">
                {{ __('Create your online store, sell easily') }}
                <i class="fa-solid fa-arrow-right ms-2"></i>
              </a>
            </div>

            <h4 class="text-4xl font-semibold mt-4 mb-6">{{ __('This store does not exist.') }}</h4>

            <p class="text-sm">
              {{ __('The storefront you requested could not be found. Use this branded fallback state to guide visitors back to Deewid or to the merchant onboarding flow.') }}
            </p>

            <div class="inline-flex mt-6">
              <a
                class="py-1 px-4 mr-2 rounded-full border border-primary bg-primary text-white hover:shadow-lg hover:shadow-primary/20 focus:outline focus:outline-primary/50 transition-all duration-500"
                href="{{ route('deewid.register') }}">
                {{ __('Launch with Deewid') }}
                <i class="fa-solid fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-20 mb-10">
    <div class="container">
      <div class="relative text-center">
        <div class="inline-flex mt-6">
          <a
            class="text-sm font-medium py-1 px-6 mr-2 rounded-full shadow focus:outline focus:outline-primary/50 transition-all duration-500"
            href="https://www.oricodes.com/" target="_blank">
            {{ __('Powered by Deewid') }}
            <i class="fa-solid fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
