<form class="ajax-update" action="{{ route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id]) }}" method="post">
    @csrf @method('put')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Nom</th>
                <th>ADM_NO</th>
                @if($class_type->code == 'J')
                    <th>1ère CA (10)</th>
                    <th>CA MT (20)</th>
                    <th>2ème CA (10)</th>
                    <th>EXAM (60)</th>
                @endif
                @if($class_type->code == 'S')
                    <th>1ère CA (15)</th>
                    <th>2ème CA (15)</th>
                    <th>EXAM (70)</th>
                @endif
                @if($class_type->code == 'P')
                    <th>1ère CA</th>
                    <th>2ème CA</th>
                    <th>CA MT</th>
                    <th>EXAMEN</th>
                @endif
                @if($class_type->code == 'N')
                    <th>TEST</th>
                    <th>EXAMEN</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($marks->sortBy('user.name') as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->user->name }}</td>
                    <td>{{ $mk->user->student_record->adm_no }}</td>

                    @if($class_type->code == 'J')
                        <td><input min="1" max="10" class="w-50 text-center" name="t1_{{ $mk->id }}" value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" max="20" class="w-50 text-center" name="t2_{{ $mk->id }}" value="{{ rand(1, 20) }}" type="number"></td>
                        <td><input min="1" max="10" class="w-50 text-center" name="t3_{{ $mk->id }}" value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" max="60" class="w-50 text-center" name="exm_{{ $mk->id }}" value="{{ rand(1, 60) }}" type="number"></td>
                    @endif

                    @if($class_type->code == 'S')
                        <td><input min="1" max="15" class="w-50 text-center" name="t1_{{ $mk->id }}" value="{{ rand(1, 15) }}" type="number"></td>
                        <td><input min="1" max="15" class="w-50 text-center" name="t2_{{ $mk->id }}" value="{{ rand(1, 15) }}" type="number"></td>
                        <td><input min="1" max="70" class="w-50 text-center" name="exm_{{ $mk->id }}" value="{{ rand(1, 70) }}" type="number"></td>
                    @endif

                    @if($class_type->code == 'P')
                        <td><input min="1" class="w-50 text-center" name="t1_{{ $mk->id }}" value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="t2_{{ $mk->id }}" value="{{ rand(1, 20) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="t3_{{ $mk->id }}" value="{{ rand(1, 10) }}" type="number"></td>
                        <td><input min="1" class="w-50 text-center" name="exm_{{ $mk->id }}" value="{{ rand(1, 60) }}" type="number"></td>
                    @endif

                    @if($class_type->code == 'N')
                        <td><input min="1" max="40" class="w-50 text-center" name="t1_{{ $mk->id }}" value="{{ rand(1, 40) }}" type="number"></td>
                        <td><input min="1" max="60" class="w-50 text-center" name="exm_{{ $mk->id }}" value="{{ rand(1, 60) }}" type="number"></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Mettre à jour les notes <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
