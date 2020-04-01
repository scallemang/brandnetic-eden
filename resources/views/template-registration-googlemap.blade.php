{{--
  Template Name: Registration Template (Google Map)
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    @include('partials.page-hero')
    @include('partials.content-page')
    @include('partials.form-registration')
    @include('partials.map-google')
  @endwhile
@endsection
