@if(Qs::userIsTeamSAT())
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">
            <h6 class="card-title font-weight-bold">Commentaires sur l'examen</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body collapse">
            <form class="ajax-update" method="post" action="{{ route('marks.comment_update', $exr->id) }}">
                @csrf @method('PUT')

                @if(Qs::userIsTeamSAT())
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">Commentaire de l'enseignant</label>
                        <div class="col-lg-10">
                            <input name="t_comment" value="{{ $exr->t_comment }}"  type="text" class="form-control" placeholder="Commentaire de l'enseignant">
                        </div>
                    </div>
                @endif

                @if(Qs::userIsTeamSA())
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">Commentaire du directeur d'école</label>
                        <div class="col-lg-10">
                            <input name="p_comment" value="{{ $exr->p_comment }}"  type="text" class="form-control" placeholder="Commentaire du directeur d'école">
                        </div>
                    </div>
                @endif

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Soumettre le formulaire <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endif
