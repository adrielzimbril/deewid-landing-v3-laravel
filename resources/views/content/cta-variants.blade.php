@extends('layouts/layoutMaster')

@section('title', 'CTA Variants')

@section('content')
  <section class="pt-32 pb-14">
    <div class="container">
      <div class="relative rounded-2xl bg-light px-6 py-10 md:px-10 md:py-14 overflow-hidden">
        <div
          class="pointer-events-none absolute -top-20 -right-20 h-52 w-52 rounded-full bg-secondary/40 blur-3xl"></div>
        <div
          class="pointer-events-none absolute -bottom-24 -left-24 h-56 w-56 rounded-full bg-primary/25 blur-3xl"></div>

        <div class="relative">
          <span class="inline-flex items-center rounded-full bg-black text-white px-4 py-2 text-sm font-medium">
            {{ __('Design System') }}
          </span>
          <h1 class="mt-5 text-4xl md:text-5xl font-semibold">{{ __('CTA Variants Showcase') }}</h1>
          <p class="mt-4 max-w-3xl text-base md:text-lg">
            {{ __('All call-to-action variants available in V3 are listed below. Keep the CTA components unchanged and reuse the variant that matches each section intent.') }}
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-8">
    <div class="container">
      <div class="grid gap-6 md:grid-cols-3">
        <a href="#cta-primary" class="rounded-xl border bg-white px-5 py-4 transition-all hover:shadow-md">
          <p class="text-sm font-medium text-primary">{{ __('Variant 1') }}</p>
          <h3 class="mt-2 text-lg font-semibold">{{ __('Primary Gradient CTA') }}</h3>
        </a>
        <a href="#cta-secondary" class="rounded-xl border bg-white px-5 py-4 transition-all hover:shadow-md">
          <p class="text-sm font-medium text-primary">{{ __('Variant 2') }}</p>
          <h3 class="mt-2 text-lg font-semibold">{{ __('Secondary Light CTA') }}</h3>
        </a>
        <a href="#cta-compact" class="rounded-xl border bg-white px-5 py-4 transition-all hover:shadow-md">
          <p class="text-sm font-medium text-primary">{{ __('Variant 3') }}</p>
          <h3 class="mt-2 text-lg font-semibold">{{ __('Inline Compact CTA') }}</h3>
        </a>
      </div>
    </div>
  </section>

  <section id="cta-primary" class="pt-4">
    <div class="container">
      <div class="mb-3 inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 1: Primary gradient CTA') }}
      </div>
    </div>
    <x-cta></x-cta>
  </section>

  <section id="cta-secondary" class="pt-2">
    <div class="container">
      <div class="mb-3 inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 2: Secondary light CTA') }}
      </div>
    </div>
    <x-cta-light></x-cta-light>
  </section>

  <section id="cta-compact" class="pt-2 pb-10">
    <div class="container">
      <div class="mb-3 inline-flex items-center rounded-full bg-light px-4 py-2 text-sm font-medium">
        {{ __('Variant 3: Inline compact CTA') }}
      </div>
    </div>
    <x-cta-inner></x-cta-inner>
  </section>
@endsection
