{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <h1 class="font-serif text-gray-600">This is a test heading in Grafik font</h1>
    @include('partials.content-page')
  @endwhile
@endsection
