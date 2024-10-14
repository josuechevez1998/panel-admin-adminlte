@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}


                        <select class="js-example-basic-single" name="state">
                            <option value="AL">Laravel</option>
                            <option value="WY">Angular</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('adminlte_css_pre')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.css') }}">
@stop

@section('adminlte_js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@stop
