@extends('layout')

@section('header')

<link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css">
<title>NdopShop - Acceuil</title>

@endsection

@section('main')

<section class="banner">
    <h1>Découvrez le Ndop, un tissu traditionnel originaire du Cameroun</h1>
    <h2>Plus qu'un simple vêtement, il s'agit représente la culture même des régions du Nord-Ouest et de l'Ouest Cameroun</h2>
    <p class="description">
        Plus qu'un simple vêtement, il s'agit représente la culture même des régions du Nord-Ouest et de l'Ouest Cameroun
        Plus qu'un simple vêtement, il s'agit représente la culture même des régions du Nord-Ouest et de l'Ouest Cameroun
        Plus qu'un simple vêtement, il s'agit représente la culture même des régions du Nord-Ouest et de l'Ouest Cameroun
    </p>
    <div class="btn">
        <button class="toggle-description">Voir plus</button>
        <a href="{{ route('categories') }}">Catégories</a>
    </div>
</section>

@endsection

@section('script')

<script src="{{ asset('js/home.js') }}" type="text/javascript"></script>

@endsection

