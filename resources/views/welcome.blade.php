@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

@include('components.hero')
@include('components.aboutus')
@include('components.service')
@include('components.portfoliosection')
@include('components.testimonial')
@include('components.contactsection')

@endsection
