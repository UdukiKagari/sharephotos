@php
  $title = 'Photo List';
@endphp

@extends('../layouts/layout')

@section('content')
<div class="container">
  {{ $query[0] }}
  {{ $query[1] }}
</div>
@endsection
