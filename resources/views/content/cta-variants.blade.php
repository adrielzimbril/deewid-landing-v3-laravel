@extends('layouts/layoutMaster')

@section('title', 'CTA Variants')

@section('content')
  <section class="pt-32 pb-10">
    <div class="container">
      <div class="relative rounded-2xl bg-light px-6 py-10 md:px-10 md:py-14 overflow-hidden">
        <div
          class="pointer-events-none absolute -top-20 -right-20 h-52 w-52 rounded-full bg-secondary/40 blur-3xl"></div>
        <div
          class="pointer-events-none absolute -bottom-24 -left-24 h-56 w-56 rounded-full bg-primary/25 blur-3xl"></div>

        <div class="relative max-w-4xl">
          <span class="inline-flex items-center rounded-full bg-black text-white px-4 py-2 text-xs md:text-sm font-medium tracking-wide">
            {{ __('Component Library') }}
          </span>
          <h1 class="mt-5 text-4xl md:text-5xl font-semibold leading-tight">{{ __('CTA Variants Showcase') }}</h1>
          <p class="mt-4 max-w-3xl text-base md:text-lg leading-relaxed">
            {{ __('All call-to-action variants available in V3 are listed below. Keep the CTA components unchanged and reuse the variant that matches each section intent.') }}
          </p>

          <div class="mt-8 flex flex-wrap gap-3">
            <a href="#cta-primary"
               class="inline-flex items-center rounded-full border border-black bg-black px-5 py-2.5 text-sm font-medium text-white transition-all hover:-translate-y-0.5 hover:shadow-md">
              {{ __('Open Variant 1') }}
            </a>
            <a href="#cta-secondary"
               class="inline-flex items-center rounded-full border border-colorCodGray/20 bg-white px-5 py-2.5 text-sm font-medium text-colorCodBlack transition-all hover:-translate-y-0.5 hover:shadow-md">
              {{ __('Open Variant 2') }}
            </a>
            <a href="#cta-compact"
               class="inline-flex items-center rounded-full border border-colorCodGray/20 bg-white px-5 py-2.5 text-sm font-medium text-colorCodBlack transition-all hover:-translate-y-0.5 hover:shadow-md">
              {{ __('Open Variant 3') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-10">
    <div class="container">
      <div class="grid gap-4 lg:grid-cols-3">
        <a href="#cta-primary"
           class="group rounded-2xl border border-colorCodGray/15 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:shadow-lg">
          <div class="flex items-center justify-between">
            <p class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
              {{ __('Variant 1') }}
            </p>
            <span class="text-xs text-colorCodGray/60">{{ __('Hero sections') }}</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-colorCodBlack">{{ __('Primary Gradient CTA') }}</h3>
          <p class="mt-2 text-sm text-colorCodGray/80">{{ __('High-emphasis block for key conversion zones.') }}</p>
        </a>
        <a href="#cta-secondary"
           class="group rounded-2xl border border-colorCodGray/15 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:shadow-lg">
          <div class="flex items-center justify-between">
            <p class="inline-flex items-center rounded-full bg-secondary/30 px-3 py-1 text-xs font-semibold text-colorCodBlack">
              {{ __('Variant 2') }}
            </p>
            <span class="text-xs text-colorCodGray/60">{{ __('Neutral blocks') }}</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-colorCodBlack">{{ __('Secondary Light CTA') }}</h3>
          <p class="mt-2 text-sm text-colorCodGray/80">{{ __('Balanced style for dense pages with softer contrast.') }}</p>
        </a>
        <a href="#cta-compact"
           class="group rounded-2xl border border-colorCodGray/15 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:shadow-lg">
          <div class="flex items-center justify-between">
            <p class="inline-flex items-center rounded-full bg-colorCodGray/10 px-3 py-1 text-xs font-semibold text-colorCodBlack">
              {{ __('Variant 3') }}
            </p>
            <span class="text-xs text-colorCodGray/60">{{ __('Inline areas') }}</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-colorCodBlack">{{ __('Inline Compact CTA') }}</h3>
          <p class="mt-2 text-sm text-colorCodGray/80">{{ __('Compact callout for in-between content sections.') }}</p>
        </a>
      </div>
    </div>
  </section>

  <section id="cta-primary" class="pt-2">
    <div class="container">
      <div class="mb-5 rounded-xl border border-primary/20 bg-white px-5 py-4">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div>
            <p class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">{{ __('Variant 1') }}</p>
            <h3 class="mt-2 text-xl font-semibold">{{ __('Primary Gradient CTA') }}</h3>
          </div>
          <p class="inline-flex items-center rounded-full border border-colorCodGray/20 bg-light px-4 py-2 text-xs font-medium text-colorCodGray/80">
            {{ __('Use in hero / top-conversion sections') }}
          </p>
        </div>
      </div>
    </div>
    <x-cta></x-cta>
  </section>

  <section id="cta-secondary" class="pt-6">
    <div class="container">
      <div class="mb-5 rounded-xl border border-secondary/30 bg-white px-5 py-4">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div>
            <p class="inline-flex items-center rounded-full bg-secondary/30 px-3 py-1 text-xs font-semibold text-colorCodBlack">{{ __('Variant 2') }}</p>
            <h3 class="mt-2 text-xl font-semibold">{{ __('Secondary Light CTA') }}</h3>
          </div>
          <p class="inline-flex items-center rounded-full border border-colorCodGray/20 bg-light px-4 py-2 text-xs font-medium text-colorCodGray/80">
            {{ __('Use in mid-page sections with softer contrast') }}
          </p>
        </div>
      </div>
    </div>
    <x-cta-light></x-cta-light>
  </section>

  <section id="cta-compact" class="pt-6 pb-14">
    <div class="container">
      <div class="mb-5 rounded-xl border border-colorCodGray/20 bg-white px-5 py-4">
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div>
            <p class="inline-flex items-center rounded-full bg-colorCodGray/10 px-3 py-1 text-xs font-semibold text-colorCodBlack">{{ __('Variant 3') }}</p>
            <h3 class="mt-2 text-xl font-semibold">{{ __('Inline Compact CTA') }}</h3>
          </div>
          <p class="inline-flex items-center rounded-full border border-colorCodGray/20 bg-light px-4 py-2 text-xs font-medium text-colorCodGray/80">
            {{ __('Use between content blocks and in closing sections') }}
          </p>
        </div>
      </div>
    </div>
    <x-cta-inner></x-cta-inner>
  </section>
@endsection
