@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

@include('components.servicepage.servicepage')

@include('components.servicepage.allservices')

@include('components.servicepage.clients')

@include('components.contactsection')

@endsection
