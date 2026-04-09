@extends('layouts/layoutMaster')

@section('title', 'Pricing')

@section('content')

  <x-banner-inner title="Start selling for free"></x-banner-inner>

  <section class="py-10">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto">
        <h2 class="md:text-3xl/tight text-3xl font-semibold my-4">{{ __('Pricing Plans') }}</h2>
        <p
          class="md:text-lg leading-7">{{ __('Get started with Deewid for free to sell & receive payments') }}</p>
      </div>

      <div
        x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        },
        tabButtonActive(tabContent){
            const tabId = tabContent.id.split('-').slice(-1);
            return this.tabSelected == tabId;
        }
    }"

        x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full mt-8">

        <div class="relative flex align-center">
          <div x-ref="tabButtons"
               class="relative inline-grid items-center justify-center w-full max-w-sm mx-auto h-10 grid-cols-2 p-1 bg-white border border-slate-100 rounded select-none">
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                    :class="{ 'bg-secondary/50 text-colorCodBlack' : tabButtonActive($el) }"
                    class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded cursor-pointer whitespace-nowrap">{{ __('Monthly') }}
            </button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                    :class="{ 'bg-secondary/50 text-colorCodBlack' : tabButtonActive($el) }"
                    class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded cursor-pointer whitespace-nowrap">{{ __('Yearly') }}
              <span
                class="text-sm font-medium py-1 px-2  bg-light text-colorCodBlack rounded-full ml-2">{{ __('Save more!') }}</span>
            </button>
            <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
              <div class="w-full h-full bg-secondary/50 rounded shadow-sm"></div>
            </div>
          </div>
        </div>

        <div
          class="relative">
          @php
            $pricingPlan = getJsonData(resource_path('data/pricing-plan.json'));
          @endphp

          <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)"
               class="relative grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-8 sm:gap-4 mt-4">
            @foreach($pricingPlan as $plan)
              <div
                class="px-6 py-4 transition-colors duration-300 transform bg-white border border-gray-200 rounded-lg">
                <div class="flex w-full justify-between align-center">
                  <div class="flex flex-col">
                    <h3 class="text-xl font-bold">{{ $plan->name }}</h3>
                  </div>
                  @if($plan->isMostPopular)
                    <div>
                      <span
                        class="rounded-full bg-secondary text-colorCodBlack px-4 py-1 text-sm font-semibold whitespace-nowrap">{{__('Most Popular')}}</span>
                    </div>
                  @endif
                </div>

                <p class="mb-2">{{ __($plan->description) }}</p>

                <h4 class="mt-4 mb-2 text-[3.5rem] leading-[4rem]">${{ $plan->price }}
                  <span
                    class="text-base font-normal text-gray-500 -ml-3">{{ __('/month') }}</span></h4>

                <button
                  class="w-full px-4 py-2 my-4 font-medium tracking-wide rounded-full focus:outline text-white {{$plan->isMostPopular ? 'bg-secondary focus:outline-secondary/50' : 'bg-colorCodBlack focus:outline-colorCodBlack/50'}} transition-all duration-500">
                  {{ __($plan->buttonText) }}
                </button>

                <hr class="border-gray-200">

                <div class="mt-4 space-y-4">
                  @foreach($plan->features as $feature)
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle-1', 'relative', 'w-5 h-5 text-secondary') !!}

                      <span class="ml-2 text-sm">{{ __($feature) }}</span>
                    </div>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>

          <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)"
               class="relative grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-8 sm:gap-4 mt-4" x-cloak>
            @foreach($pricingPlan as $plan)
              <div
                class="px-6 py-4 transition-colors duration-300 transform bg-white border border-gray-200 rounded-lg">
                <div class="flex w-full justify-between align-center">
                  <div class="flex flex-col">
                    <h3 class="text-xl font-bold">{{ $plan->name }}</h3>
                  </div>
                  @if($plan->isMostPopular)
                    <div>
                      <span
                        class="rounded-full bg-secondary text-primary px-4 py-1 text-sm font-semibold whitespace-nowrap">{{__('Most Popular')}}</span>
                    </div>
                  @endif
                </div>

                <p class="mb-2">{{ __($plan->description) }}</p>

                <h4 class="mt-4 mb-2 text-[3.5rem] leading-[4rem]">${{ floor($plan->price - ($plan->price * 9/100)) }}
                  <span
                    class="text-base font-normal text-gray-500 -ml-3">{{ __('/month') }}</span></h4>

                <button
                  class="w-full px-4 py-2 my-4 font-medium tracking-wide rounded-full focus:outline text-white {{$plan->isMostPopular ? 'bg-secondary focus:outline-secondary/50' : 'bg-colorCodBlack focus:outline-colorCodBlack/50'}} transition-all duration-500">
                  {{ __($plan->buttonText) }}
                </button>

                <hr class="border-gray-200">

                <div class="mt-4 space-y-4">
                  @foreach($plan->features as $feature)
                    <div class="flex items-center">
                      {!! get_svg_icon('check-circle-1', 'relative', 'w-5 h-5 text-secondary') !!}

                      <span class="ml-2 text-sm">{{ __($feature) }}</span>
                    </div>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-8 sm:py-18">
    <div class="container">
      <div class="md:max-w-2xl">
        <h2 class="md:text-3xl text-xl font-semibold my-5">{{ __('What every plan gets you') }}</h2>
      </div>

      @php
        $featuresList = getJsonData(resource_path('data/features-pricing.json'));
      @endphp

      <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-2 gap-4">
        @foreach($featuresList as $feature)
          <div class="relative group h-full">
            <div class="p-6 rounded-xl bg-white shadow">
              <div
                class="w-12 h-12 bg-primary flex items-center justify-center rounded">
                {!! get_svg_icon($feature->icon, 'relative', 'w-8 h-8 text-white') !!}
              </div>
              <h4 class="text-lg font-medium mt-4">{{ __($feature->name) }}</h4>
              <p class="text-sm leading-6 mt-1">{{ __($feature->description) }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="py-16">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto">
        <span class="text-sm font-medium py-1 px-3  bg-light text-colorCodBlack rounded-full">{{ __('FAQs') }}</span>
        <h2 class="md:text-3xl/tight text-3xl font-semibold my-4">{{ __('Frequently Asked Questions') }}</h2>
        <p
          class="md:text-lg leading-7">{{ __('Here are some of the basic types of questions for our customers') }}</p>
      </div>

      @php
        $faqList= getJsonData(resource_path('data/faq-pricing.json'));
      @endphp
      <div class="mt-16 slg:mx-32">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
          <div data-fc-type="accordion">
            @foreach($faqList as $i => $faq)
              @if($loop->iteration <= count($faqList) / 2)
                <div class="rounded-xl border bg-white {{ $i !== 0 ? 'mt-2' : '' }}">
                  <button
                    class="{{ $i !== 0 ? 'fc-collapse-open:rounded-b-none' : '' }} sm:text-base p-4 inline-flex items-center gap-x-3 w-full font-semibold text-colorCodBlack"
                    data-fc-type="collapse">
                    {{ __($faq->answer) }}
                    <span class="fa-solid fa-angle-down ms-auto transition-all fc-collapse-open:-rotate-90"></span>
                  </button>
                  <div class="{{ $i !== 0 ? 'hidden' : '' }} w-full overflow-hidden transition-[height] duration-300 ">
                    <p class="sm:text-sm font-medium p-5 pt-0">
                      {{ __($faq->response) }}
                    </p>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
          <div data-fc-type="accordion">
            @foreach($faqList as $i => $faq)
              @if($loop->iteration > count($faqList) / 2)
                <div class="rounded-xl border bg-white {{ $i !== (count($faqList) / 2) ? 'mt-2' : '' }}">
                  <button
                    class="{{ $i !== (count($faqList) / 2) ? 'fc-collapse-open:rounded-b-none' : '' }} sm:text-base p-4 inline-flex items-center gap-x-3 w-full font-semibold text-colorCodBlack"
                    data-fc-type="collapse">
                    {{ __($faq->answer) }}
                    <span class="fa-solid fa-angle-down ms-auto transition-all fc-collapse-open:-rotate-90"></span>
                  </button>
                  <div
                    class="{{ $i !== (count($faqList) / 2) ? 'hidden' : '' }} w-full overflow-hidden transition-[height] duration-300 ">
                    <p class="sm:text-sm font-medium p-5 pt-0">
                      {{ __($faq->response) }}
                    </p>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-cta-light></x-cta-light>
@endsection
