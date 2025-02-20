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
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor Whatsapp</th>
                            <th>Berat Badan(kg)</th>
                            <th>Tinggi Badan(cm)</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['full_name'] }}</td>
                                <td>{{ $user['gender'] }}</td>
                                <td>{{ $user['birth_date'] }}</td>
                                <td>{{ $user['whatssapp_number'] }}</td>
                                <td>{{ $user['weight'] }}</td>
                                <td>{{ $user['height'] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
