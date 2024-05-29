@extends('layouts.master')
@section('page_title', 'Modifier Dortoir - '.$dorm->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Modifier Dortoir</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('dorms.update', $dorm->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Nom <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $dorm->name }}" required type="text" class="form-control" placeholder="Nom du dortoir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                            <div class="col-lg-9">
                                <input name="description" value="{{ $dorm->description }}"  type="text" class="form-control" placeholder="Description du dortoir">
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

    {{--Fin de l'édition du dortoir--}}

@endsection
