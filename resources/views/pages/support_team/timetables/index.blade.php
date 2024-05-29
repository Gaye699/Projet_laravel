@extends('layouts.master')
@section('page_title', 'Gérer les emplois du temps')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Gérer les emplois du temps</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                @if(Qs::userIsTeamSA())
                <li class="nav-item"><a href="#add-tt" class="nav-link active" data-toggle="tab">Créer un emploi du temps</a></li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Afficher les emplois du temps</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach($my_classes as $mc)
                            <a href="#ttr{{ $mc->id }}" class="dropdown-item" data-toggle="tab">{{ $mc->name }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>


            <div class="tab-content">

                @if(Qs::userIsTeamSA())
                <div class="tab-pane fade show active" id="add-tt">
                   <div class="col-md-8">
                       <form class="ajax-store" method="post" action="{{ route('ttr.store') }}">
                           @csrf
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label font-weight-semibold">Nom <span class="text-danger">*</span></label>
                               <div class="col-lg-9">
                                   <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Nom de l'emploi du temps">
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Classe <span class="text-danger">*</span></label>
                               <div class="col-lg-9">
                                   <select required data-placeholder="Sélectionner une classe" class="form-control select" name="my_class_id" id="my_class_id">
                                       @foreach($my_classes as $mc)
                                           <option {{ old('my_class_id') == $mc->id ? 'selected' : '' }} value="{{ $mc->id }}">{{ $mc->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="exam_id" class="col-lg-3 col-form-label font-weight-semibold">Type (Classe ou Examen)</label>
                               <div class="col-lg-9">
                                   <select class="select form-control" name="exam_id" id="exam_id">
                                       <option value="">Emploi du temps de classe</option>
                                       @foreach($exams as $ex)
                                           <option {{ old('exam_id') == $ex->id ? 'selected' : '' }} value="{{ $ex->id }}">{{ $ex->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>


                           <div class="text-right">
                               <button id="ajax-btn" type="submit" class="btn btn-primary">Soumettre le formulaire <i class="icon-paperplane ml-2"></i></button>
                           </div>
                       </form>
                   </div>

                </div>
                @endif

                @foreach($my_classes as $mc)
                    <div class="tab-pane fade" id="ttr{{ $mc->id }}">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Nom</th>
                                <th>Classe</th>
                                <th>Type</th>
                                <th>Année</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tt_records->where('my_class_id', $mc->id) as $ttr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ttr->name }}</td>
                                    <td>{{ $ttr->my_class->name }}</td>
                                    <td>{{ ($ttr->exam_id) ? $ttr->exam->name : 'Emploi du temps de classe' }}</td>
                                    <td>{{ $ttr->year }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    {{-- Voir --}}
                                                    <a href="{{ route('ttr.show', $ttr->id) }}" class="dropdown-item"><i class="icon-eye"></i> Voir</a>

                                                    @if(Qs::userIsTeamSA())
                                                    {{-- Gérer --}}
                                                    <a href="{{ route('ttr.manage', $ttr->id) }}" class="dropdown-item"><i class="icon-plus-circle2"></i> Gérer</a>
                                                    {{-- Modifier --}}
                                                    <a href="{{ route('ttr.edit', $ttr->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Modifier</a>
                                                    @endif

                                                    {{-- Supprimer --}}
                                                    @if(Qs::userIsSuperAdmin())
                                                        <a id="{{ $ttr->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Supprimer</a>
                                                        <form method="post" id="item-delete-{{ $ttr->id }}" action="{{ route('ttr.destroy', $ttr->id) }}" class="hidden">@csrf @method('delete')</form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- Fin des emplois du temps --}}
@endsection
