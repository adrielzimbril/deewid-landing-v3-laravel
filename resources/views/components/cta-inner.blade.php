<section class="py-16 sm:py-24 overflow-hidden">
  <div class="container">
    <div class="relative rounded py-12 lg:px-12 px-4 bg-light overflow-hidden">
      <div
        class="pointer-events-none bg-secondary filter blur-2xl absolute -left-[90px] -top-[70px] z-[1] h-[250px] w-[200px] rounded-[500px]">
      </div>
      <div
        class="pointer-events-none bg-secondary filter blur-2xl absolute -right-[30px] -bottom-[75px] z-[1] h-[250px] w-[200px] rounded-[450px]">
      </div>

      <div class="relative grid lg:grid-cols-7 grid-cols-1 items-center z-[2]">
        <div class="lg:col-span-4">
          <h4 class="text-5xl mt-2 mb-10">{{ __('Get your eCommerce store, and start selling online  easily.') }}</h4>

          <p class="relative">
            {{ __('Take control of your online presence. Build, manage, and sell your products effortlessly with Deewid.') }}
          </p>
        </div>

        <div class="lg:col-span-3 lg:text-end">
          <div class="inline-flex mt-14">
            <a
              class="flex items-center justify-center py-2 px-4 rounded border border-primary bg-primary text-white hover:shadow hover:shadow-primary/20 focus:outline focus:outline-primary/50 transition-all duration-500"
              href="{{ route('deewid.register') }}"> {{ __('Start for free Now') }}
              {!! get_svg_icon('arrow-right-short', '', 'w-6 h-6 ms-1') !!}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
