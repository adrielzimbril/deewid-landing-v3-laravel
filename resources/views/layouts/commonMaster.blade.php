<!DOCTYPE html>

<html lang="{{ session()->get('locale') ?? app()->getLocale() }}" data-base-url="{{url('/')}}">

@php
  $deewid = 'Deewid';
  $description = 'Create your store and start selling easily';
  $title =  " | $deewid - Create your store and start selling easily";
@endphp
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <title>@yield('title') {{ $title }}</title>
  <meta name="description" content="@yield('meta', $description)">
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="canonical" href="{{ url('/') }}">

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#000000">
  <meta name="apple-mobile-web-app-title" content="{{ $deewid }}">
  <meta name="application-name" content="{{ $deewid }}">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/mstile-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">

  <meta property="og:site_name" content="{{ $deewid }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{route('home')}}">
  <meta property="og:title" content="@yield('title') {{ $title }}">
  <meta property="og:description" content="@yield('meta', $description)">
  <meta property="og:image" content="@yield('meta_img', asset('assets/images/hero/hero.png'))">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="@yield('title') {{ $title }}">
  <meta property="twitter:image" content="@yield('meta_img', asset('assets/images/hero/hero.png'))">
  <meta property="twitter:description" content="@yield('meta', $description)">

  @include('layouts/sections/styles')
</head>
<body>


@yield('layoutContent')

@include('layouts/sections/scripts')

</body>

</html>
