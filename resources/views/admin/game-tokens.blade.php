@extends('admin.wrapper')
@section('title')
    Home
@endsection

@section('admin-content')
    <div class="card mb-5">
        <form action="{{ route('admin.game-token.generate') }}">
            <div class="card-body">
                <h5 class="text-dark mb-3">Add Game Token</h5>
                <div class="d-flex">
                    <div class="form-group col">
                        <label for="token">Token</label>
                        <input class="form-control" type="token" id="token" required>
                    </div>
                    <div class="form-group col">
                        <label for="description">Description</label>
                        <input class="form-control" type="description" id="description" required>
                    </div>
                </div>
                <div style="text-align:right;">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Game Tokens Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Token</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokens as $token)
                            <tr>
                                <td>{{ $token['id'] }}</td>
                                <td>{{ $token['token'] }}</td>
                                <td>{{ $token['description'] }}</td>
                                <td>{{ $token['status'] }}</td>
                                <td></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
