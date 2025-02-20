@extends('wrapper')
@section('title')
    Home
@endsection
<style>
    body {
        overflow-y: scroll;
    }
</style>
@section('content')
    {{-- <img class="centered-img" id="welcome-img" src="{{ asset('images-v2/main/welcome.png') }}" alt=""> --}}
    {{-- <audio id="bg-music" src="{{ asset('music/bg-music.mp3') }}" autoplay loop></audio> --}}
    <img id="title-img" src="{{ asset('images-v2/main/3.png') }}" alt="" width="100%">
    <div>
        <form class="" action="{{ route('register') }}" method="POST" style="color: #000;width: 100%;text-align: left;padding: 0px 20px;">
            @csrf
            <div class="row mb-1">
                <label for="full_name" class="col-12 mb-0" style="font-weight: bold;"><b>Nama Lengkap</b></label>
                <div class="col input-mask">
                    <input name="full_name" class="form-control" type="text" required>
                </div>
            </div>
            <div class="row mb-1">
                <label for="birth_date" class="col-12 mb-0" style="font-weight: bold;"><b>Tanggal Lahir</b></label>
                <div class="col input-mask">
                    <input name="birth_date" class="form-control" type="date" required>
                </div>
            </div>
            <div class="row mb-1">
                <label for="gender" class="col-12 mb-0" style="font-weight: bold;"><b>Jenis Kelamin</b></label>
                <div class="col input-mask">
                    <select class="form-control" name="gender" id="gender" required>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <label for="weight" class="col-12 mb-0" style="font-weight: bold;"><b>Berat Badan</b></label>
                <div class="col input-mask">
                    <input name="weight" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row mb-1">
                <label for="height" class="col-12 mb-0" style="font-weight: bold;"><b>Tinggi Badan</b></label>
                <div class="col input-mask">
                    <input name="height" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row mb-1">
                <label for="phone" class="col-12 mb-0" style="font-weight: bold;"><b>Nomor Whatsapp</b></label>
                <div class="col input-mask">
                    <input name="whatsapp_number" class="form-control" type="number" required>
                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn-submit-img" type="submit">
                    <img src="{{ asset('images-v2/main/7.png') }}" alt="" height="70px">
                </button>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(this).click(function() {
                // const music = document.getElementById('bg-music');
                // music.play()

                // $('#welcome-img').slideUp();
                setTimeout(() => {
                    $('.container').fadeIn(500);
                    $('form').slideDown(1000);
                    $('#title-img').fadeIn(1000);
                }, 1000);
            })
        });
    </script>
@endpush
