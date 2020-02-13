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
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
