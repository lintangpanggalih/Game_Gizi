@extends('admin.wrapper')
@section('title')
    Home
@endsection

@section('admin-content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor Whatssapp</th>
                            <th>Berat Badan(kg)</th>
                            <th>Tinggi Badan(cm)</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        {{-- @dd($user->id) --}}
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->birth_date }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->weight }}</td>
                                <td>{{ $user->height }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#resultModal" data-id="{{ $user->id }}">Result</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="modal" id="resultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ....
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#resultModal').modal('show')
            $('#resultModal').on('show.bs.modal', function(e) {
                const $this = $(this),
                    btn = $(e.relatedTarget),
                    url = "{{ route('admin.moodboard.result', ':id') }}".replace(':id', btn.data('id'));
                console.log(url);

                let content = '' 
                $.get(url, function(response) {
                    for (const key in response) {
                        console.log(response[key]);
                        const data = response[key];
                        content += `
                            <h6 class="mb-1"><b>${data.date}</b></h6>
                            <div class="row mb-3">
                                <div class="col-1">Score: </div>
                                <div class="col-auto">: ${parseFloat(data.correct_answers) * 12.5}</div>
                            </div>
                        `
                    }
                    $this.find('.modal-body').html(content)
                })
            })
        })
    </script>
@endpush

