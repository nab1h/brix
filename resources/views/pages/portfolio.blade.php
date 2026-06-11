@extends('layouts.brix')
@section('title' ,'معرض الاعمال')
<!-- image layout -->
@section('hero_image', asset('images-layout/portfolio.png'))

@section('content')
@include('includes.portfolio')
@endsection
