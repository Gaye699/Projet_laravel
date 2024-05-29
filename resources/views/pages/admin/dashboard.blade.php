@extends('layouts.master')
@section('page_title', 'Mon Tableau')

@section('content')
    <h2>Bienvenu {{ Auth::user()->name }}. C'est votre tableau de bord</h2>
    @endsection