@php
  /**
  * Template Name: Documentation
  * Description: Archive like with side rail for easy legibility and navigation.
  *
  * @package Sage
  * @subpackage UT Knoxville
  */

  Namespace App\Controllers;

@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="page-header sr-only">
    <h1>{!! App::title() !!}</h1>
  </div>
  @include('partials.content-page-documentation')
  @endwhile
@endsection
