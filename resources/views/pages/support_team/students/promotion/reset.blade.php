@extends('layouts.master')
@section('page_title', 'Gérer les promotions')
@section('content')

    {{-- Réinitialiser tout --}}
    <div class="card">
        <div class="card-body text-center">
            <button id="promotion-reset-all" class="btn btn-danger btn-large">Réinitialiser toutes les promotions de la session</button>
        </div>
    </div>

    {{-- Réinitialiser les promotions --}}
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title font-weight-bold">Gérer les promotions - Étudiants promus de <span class="text-danger">{{ $old_year }}</span> à <span class="text-success">{{ $new_year }}</span> session</h5>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">

            <table id="promotions-list" class="table datatable-button-html5-columns">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>De la classe</th>
                    <th>À la classe</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($promotions->sortBy('fc.name')->sortBy('student.name') as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $p->student->photo }}" alt="photo"></td>
                        <td>{{ $p->student->name }}</td>
                        <td>{{ $p->fc->name.' '.$p->fs->name }}</td>
                        <td>{{ $p->tc->name.' '.$p->ts->name }}</td>
                        @if($p->status === 'P')
                            <td><span class="text-success">Promu</span></td>
                        @elseif($p->status === 'D')
                            <td><span class="text-danger">Non promu</span></td>
                        @else
                            <td><span class="text-primary">Diplômé</span></td>
                        @endif
                        <td class="text-center">
                            <button data-id="{{ $p->id }}" class="btn btn-danger promotion-reset">Réinitialiser</button>
                            <form id="promotion-reset-{{ $p->id }}" method="post" action="{{ route('students.promotion_reset', $p->id) }}">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        /* Réinitialisation individuelle */
        $('.promotion-reset').on('click', function () {
            let pid = $(this).data('id');
            if (confirm('Êtes-vous sûr de vouloir continuer ?')){
                $('form#promotion-reset-'+pid).submit();
            }
            return false;
        });

        /* Réinitialiser toutes les promotions */
        $('#promotion-reset-all').on('click', function () {
            if (confirm('Êtes-vous sûr de vouloir continuer ?')){
                $.ajax({
                    url:"{{ route('students.promotion_reset_all') }}",
                    type:'DELETE',
                    data:{ '_token' : $('#csrf-token').attr('content') },
                    success:function (resp) {
                        $('table#promotions-list > tbody').fadeOut().remove();
                        flash({msg : resp.msg, type : 'success'});
                    }
                })
            }
            return false;
        })
    </script>
@endsection
