@extends('layouts/layoutMaster')

@section('title', 'Blog')

@section('content')
  <section class="pt-56">
    <div class="container">
      <div class="relative mx-auto">
        <div class="flex items-center gap-2">
          <p>Tags:</p>
          <div class="flex flex-wrap items-center gap-1">
            @foreach($tags as $key => $tag)
              <a
                class="bg-secondary border-slate-300 rounded text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-md focus:shadow-lg py-2 px-3"
                href="{{ route('blog.tag', $tag) }}">{{ $tag }}</a>
            @endforeach
          </div>
        </div>

        <div class="grid lg:grid-cols-3 grid-cols-1 gap-10 lg:py-16 py-14"
             data-aos-duration="300">
          <div class="lg:col-span-2">
            @foreach($posts as $key => $post)
              <div class="grid md:grid-cols-5 gap-10 my-10">

                <div class="md:col-span-2 col-span-3">
                  <img class="w-full h-full shadow border-4 border-white rounded"
                       src="{{ asset($post->feature_image ) }}">
                </div>

                <div class="col-span-3">
                  <div class="flex flex-col gap-14 justify-around place-content-center xl:h-full">
                    <div>
								<span class="bg-secondary/70 text-colorCodGray font-medium rounded text-xs py-1 px-2"><a
                    href="{{ route('blog.category', $post->category) }}">{{ $post->category }}</a></span>
                      <h1 class="text-3xl my-3 transition-all hover:text-primary"><a
                          href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a>
                      </h1>
                      <p
                        class="text-sm/relaxed tracking-wider relative">{{ getTextPreview($post->content) }}
                        <a class="text-primary" href="{{ route('blog.post', $post->slug) }}">read more</a>
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-cta-inner></x-cta-inner>
@endsection
