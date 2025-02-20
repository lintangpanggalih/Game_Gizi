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
    <div class="hero-image">
        <div class="image">
            <img src="/images-v2/main/welcome.png" alt="Woman eating strawberry" width="100%">
        </div>
        <br>
        {{-- <a class="btn btn-danger" href="{{ route('landing.biodata') }}" role="button">START NOW</a> --}}
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(window).click(function(e) {
                location.href = "{{ route('landing.registration') }}";
            })
        })
    </script>
@endpush
