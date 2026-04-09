<section
  class="pt-16 sm:pt-24 overflow-hidden">
  <div class="container items-center relative py-16 sm:py-24 bg-light overflow-hidden">
    <div
      class="pointer-events-none bg-gradient-to-r from-secondary to-secondary/80 filter blur-3xl absolute -left-[70px] -top-[120px] h-[450px] w-[400px] rounded-[500px]">
    </div>
    <div
      class="pointer-events-none bg-gradient-to-l from-secondary to-secondary/80 filter blur-3xl absolute -right-[180px] -bottom-[150px] h-[450px] w-[500px] rounded-[450px]">
    </div>
    <div class="relative max-w-3xl mx-auto">
      <div class="text-center">
        <div class="lg:col-span-1">
          <h4
            class="text-6xl font-semibold mb-10">{{ __('Get your eCommerce store, and start selling online  easily.') }}</h4>

          <p class="text-lg font-medium">
            {{ __('Take control of your online presence. Build, manage, and sell your products effortlessly with Deewid.') }}
          </p>

          <div class="inline-flex mt-6">
            <a
              class="flex items-center justify-center py-2 px-5 rounded-full border border-secondary bg-secondary text-colorCodBlack hover:shadow-lg hover:shadow-primary/20 focus:outline focus:outline-primary/50 transition-all duration-500"
              href="{{ route('deewid.register') }}"> {{ __('Start for free Now') }}
              {!! get_svg_icon('arrow-right-short', '', 'w-6 h-6 ms-1') !!}</a>
          </div>

          <div class="mt-4">
            <p class="text-md">
              {{ __('No credit card required') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
