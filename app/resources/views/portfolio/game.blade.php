@extends('layouts.app')

@section('title', 'Jeu CSS')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
@endpush

@section('content')
<div id="wrapper">
  <div id="level">
    <div class="inner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <span><input type="checkbox" /></span>
      <span><input type="checkbox" /></span>
      <span><input type="checkbox" /></span>
      <span><input type="checkbox" /></span>
      <span><input type="checkbox" /></span>
      <span><input type="checkbox" /></span>
    </div>
  </div>
</div>
<div id="logo"><input type="checkbox"></div>
<div id="weapon"></div>
<div id="hud"></div>
@endsection
