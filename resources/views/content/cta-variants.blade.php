@extends('layouts/layoutMaster')

@section('title', 'CTA Variants')

@section('content')
  <x-banner-inner title="CTA Variants"></x-banner-inner>

  <section class="py-10">
    <div class="container">
      <div class="max-w-3xl">
        <h2 class="text-3xl font-semibold mb-4">{{ __('Call-to-action variants') }}</h2>
        <p>{{ __('This page previews all CTA blocks available in V3 so you can compare styles quickly and reuse them in other sections.') }}</p>
      </div>
    </div>
  </section>

  <section class="pt-2 pb-6">
    <div class="container">
      <div class="inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 1: Primary gradient CTA') }}
      </div>
    </div>
  </section>
  <x-cta></x-cta>

  <section class="pt-6 pb-6">
    <div class="container">
      <div class="inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 2: Secondary light CTA') }}
      </div>
    </div>
  </section>
  <x-cta-light></x-cta-light>

  <section class="pt-6 pb-6">
    <div class="container">
      <div class="inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 3: Inline compact CTA') }}
      </div>
    </div>
  </section>
  <x-cta-inner></x-cta-inner>
@endsection

