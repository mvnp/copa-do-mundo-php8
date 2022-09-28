@extends('layouts.app')
@section('content')
    <style>
        .navbar-light, .content-header, footer {
            display: none!important;
        }
        iframe {
            height: 100vh;
            width: calc(100vw - 105px);
        }
        iframe html {
            padding: 15px;
        }
        html, body, .container-fluid {
            overflow: hidden!important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
@endsection
