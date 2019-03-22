{{--
  Template Name: Registration Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    @include('partials.page-hero')
    @include('partials.content-page')
    @include('partials.form-registration')
  @endwhile
@endsection
