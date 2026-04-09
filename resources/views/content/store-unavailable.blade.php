@extends('layouts/layoutMaster')

@section('title', 'Store Unavailable')
@section('meta', 'Deewid storefront fallback page for temporarily unavailable stores.')

@section('content')
  <section class="pt-28 py-16 sm:py-24 overflow-hidden">
    <div class="container rounded-xl items-center relative py-16 sm:py-26 bg-light overflow-hidden">
      <div class="max-w-3xl mx-auto">
        <div class="text-center">
          <div class="lg:col-span-1">
            <h4 class="text-4xl font-semibold mt-4 mb-6">{{ __('Sorry, this store is temporarily unavailable.') }}</h4>

            <p class="text-sm">
              {{ __('This storefront exists, but it is temporarily unavailable. Use this state to keep the experience branded while the merchant finishes setup or resolves availability issues.') }}
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

  <section class="overflow-hidden">
    <div class="container">
      <div class="relative rounded p-12 bg-light overflow-hidden">
        <div class="pointer-events-none bg-secondary absolute -left-[90px] -top-[70px] z-[1] h-[250px] w-[200px] rounded-[500px]"></div>
        <div class="pointer-events-none bg-secondary absolute -right-[30px] -bottom-[75px] z-[1] h-[250px] w-[200px] rounded-[450px]"></div>

        <div class="relative lg:flex block justify-center gap-8 place-items-center text-center z-[2]">
          <div class="lg:w-1/2 bg-white rounded-xl py-8 px-6 my-8 shadow text-center place-self-center">
            <h4 class="text-xl mt-2 mb-4">{{ __('Are you the owner of this store?') }}</h4>

            <p class="text-sm text-colorCodGray/70 font-medium">
              {{ __('If you manage this storefront, review your Deewid configuration, reconnect your domain, and verify that your storefront has been published correctly before sending traffic back here.') }}
            </p>
          </div>
          <div class="lg:w-1/2 bg-white rounded-xl py-8 px-6 my-8 shadow text-center place-self-center">
            <h4 class="text-xl mt-2 mb-4">{{ __('Are you the store owner?') }}</h4>

            <p class="text-sm">
              {{ __('Complete the remaining setup steps in your Deewid admin space, confirm your domain mapping, and retry publication once your storefront configuration is ready.') }}
            </p>
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
