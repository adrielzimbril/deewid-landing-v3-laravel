@extends('layouts/layoutMaster')

@section('title', $post->title)

@section('content')
  <section class="pt-56 pb-20">
    <div class="container">
      <div class="lg:w-3/5 text-center mx-auto">
			<span class="bg-secondary/70 text-colorCodGray font-medium rounded-md text-sm py-1 px-2"><a
          href="{{ route('blog.category', $post->category) }}">{{ $post->category }}</a></span>
        <h1 class="lg:text-6xl/snug text-3xl/snug mt-3">{{ $post->title }}</h1>
        <p class="text-md text-secondary">{{ $post->created_at }}</p>
      </div>
    </div>
  </section>

  <section class="pb-16">
    <div class="container">
      <div class="mx-auto lg:w-4/5">
        <div class="content">
          <div class="flex justify-center">
            <img src="{{ asset($post->feature_image) }}" class="w-full h-full shadow border-4 border-white rounded"
                 alt="{{ $post->title }}" />
          </div>

          <div class="content lg:w-9/12 w-full mx-auto mt-10">
            {!! $post->content !!}
            <div class="relative mt-4">
              <div class="flex flex-wrap sm:gap-2 gap-5 mt-10">
                <div>
                  <a
                    class="text-xs bg-gray-200 rounded-md font-medium transition-all hover:shadow-md hover:bg-gray-300/80 focus:bg-gray-300/80 py-2 px-4"
                    href="{{ route('blog.tag', $post->tag) }}">{{ $post->tag }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-cta-inner></x-cta-inner>

@endsection
