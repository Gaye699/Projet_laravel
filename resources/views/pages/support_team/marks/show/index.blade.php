@extends('layouts.master')
@section('page_title', 'Bulletin de notes de l\'élève')
@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h4 class="card-title font-weight-bold">Bulletin de notes de {{ $sr->user->name.' ('.$my_class->name.' '.$my_class->section->first()->name.')' }} </h4>
        </div>
    </div>

    @foreach($exams as $ex)
        @foreach($exam_records->where('exam_id', $ex->id) as $exr)

                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="font-weight-bold">{{ $ex->name.' - '.$ex->year }}</h6>
                        {!! Qs::getPanelOptions() !!}
                    </div>

                    <div class="card-body collapse">

                        {{--Tableau de notes--}}
                        @include('pages.support_team.marks.show.sheet')

                        {{--Bouton d'impression--}}
                        <div class="text-center mt-3">
                            <a target="_blank" href="{{ route('marks.print', [Qs::hash($student_id), $ex->id, $year]) }}" class="btn btn-secondary btn-lg">Imprimer le bulletin de notes <i class="icon-printer ml-2"></i></a>
                        </div>

                    </div>

                </div>

            {{--    COMMENTAIRES SUR L'EXAMEN   --}}
            @include('pages.support_team.marks.show.comments')

            {{-- ÉVALUATION DES COMPÉTENCES --}}
            @include('pages.support_team.marks.show.skills')

        @endforeach
    @endforeach

@endsection