@extends('layouts/commonMaster' )

@section('layoutContent')
  @include('layouts/sections/navbar/navbar')
  @yield('content')
  @include('layouts/sections/footer/footer')
@endsection
