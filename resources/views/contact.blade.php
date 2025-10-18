@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

@include('components.contactpage.contacthero')

@include('components.contactpage.googlemaps')

@include('components.aboutpage.ourteam')

@include('components.contactsection')

@endsection
