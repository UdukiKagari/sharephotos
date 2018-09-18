@php
  $title = env('APP_NAME')
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="top-search_form">
      @method('POST')
      <form class="input-group input-group-lg" action="index.html" method="post">
        <input class="form-control" placeholder="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">{{ __('Search') }}</button>
        </div>
      </form>
  </div>
</div>
@endsection
