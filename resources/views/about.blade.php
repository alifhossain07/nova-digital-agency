@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

@include('components.aboutpage.abouthero')

@include('components.aboutus')

@include('components.aboutpage.missionvission')

@include('components.aboutpage.motto')

@include('components.aboutpage.ourteam')

@include('components.aboutpage.faq')
@endsection
