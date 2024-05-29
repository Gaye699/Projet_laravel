@extends('layouts.master')
@section('page_title', 'Gérer l'enregistrement des emplois du temps')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">{{ $ttr->name.' ('.$my_class->name.')'.' '.$ttr->year }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#manage-ts" class="nav-link active" data-toggle="tab">Gérer les créneaux horaires</a></li>
                <li class="nav-item"><a href="#add-sub" class="nav-link" data-toggle="tab">Ajouter une matière</a></li>
                <li class="nav-item"><a href="#edit-subs" class="nav-link " data-toggle="tab">Modifier les matières</a></li>
                <li class="nav-item"><a target="_blank" href="{{ route('ttr.show', $ttr->id) }}" class="nav-link" >Voir l'emploi du temps</a></li>
            </ul>

            <div class="tab-content">
                {{-- Ajouter des créneaux horaires --}}
                @include('pages.support_team.timetables.time_slots.index')
                {{-- Ajouter une matière --}}
                @include('pages.support_team.timetables.subjects.add')
                {{-- Modifier une matière --}}
                @include('pages.support_team.timetables.subjects.edit')
            </div>
        </div>
    </div>

    {{-- Fin de la gestion de l'emploi du temps --}}

@endsection
