@php
  $title = env('APP_NAME')
@endphp

@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="top-search_form">
      @method('get')
      <form class="input-group input-group-lg" action="{{ url('search') }}" method="get">
        <input class="form-control" type="text" name="s" placeholder="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">{{ __('Search') }}</button>
        </div>
      </form>
  </div>
</div>
@endsection
