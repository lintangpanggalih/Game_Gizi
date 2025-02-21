@extends('admin.wrapper')
@section('title')
    Home
@endsection

@section('admin-content')
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card mb-5">
        <form action="{{ route('admin.game-token.generate') }}" method="POST">
            @csrf
            <div class="card-body">
                <h5 class="text-dark mb-3">Add Game Token</h5>
                <div class="d-flex">
                    <div class="form-group col">
                        <label for="token">Token</label>
                        <select class="form-control" name="url" id="url" required>
                            <option value="https://gamegizi.fun">gamegizi.fun</option>
                            <option value="https://test.gamegizi.fun">test.gamegizi.fun</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="token">Token</label>
                        <input class="form-control" type="text" name="token" id="token" required>
                    </div>
                    <div class="form-group col">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" required>
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
                            <th>URL</th>
                            <th>Token</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokens as $token)
                            <tr>
                                <td>{{ $token['id'] }}</td>
                                <td>{{ $token['url'] }}</td>
                                <td>{{ $token['token'] }}</td>
                                <td>{{ $token['status'] }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-icon" data-toggle="modal" data-target="#showQrcodeModal"
                                            data-id="{{ $token->id }}">
                                            <i class="fa fa-qrcode"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal" id="showQrcodeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">QRCODE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    ....
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#showQrcodeModal').on('show.bs.modal', function(e) {
                const $this = $(this),
                    btn = $(e.relatedTarget),
                    url = "{{ route('admin.game-token.qrcode', ':id') }}".replace(':id', btn.data('id'));
                console.log(url);

                $.get(url, function(response) {
                    $this.find('.modal-body').html(response)
                })
            })
        })
    </script>
@endpush
