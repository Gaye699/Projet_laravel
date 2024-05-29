@extends('layouts.master')
@section('page_title', 'Modifier l\'Examen - '.$ex->name. ' ('.$ex->year.')')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Modifier l'Examen</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ route('exams.update', $ex->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Nom <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $ex->name }}" required type="text" class="form-control" placeholder="Nom de l'examen">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="term" class="col-lg-3 col-form-label font-weight-semibold">Trimestre</label>
                            <div class="col-lg-9">
                                <select data-placeholder="Sélectionnez le Trimestre" class="form-control select-search" name="term" id="term">
                                    <option {{ $ex->term == 1 ? 'selected' : '' }} value="1">Premier Trimestre</option>
                                    <option {{ $ex->term == 2 ? 'selected' : '' }} value="2">Deuxième Trimestre</option>
                                    <option {{ $ex->term == 3 ? 'selected' : '' }} value="3">Troisième Trimestre</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Soumettre le formulaire <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Fin de la Modification de l'Examen--}}

@endsection
