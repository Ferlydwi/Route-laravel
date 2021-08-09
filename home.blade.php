@extends('main')

@section('title', 'Home')

@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Home</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fas fa-user-circle"></i></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <figure class="text-center">
        <blockquote class="blockquote mt-5">
            <p>Hallo perkenalkan nama saya FERLY DWI ILMIARANI biasa dipanggil FERLY</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Yukk kenalan dengan aku cek "Biodata"
        </figcaption>
    </figure>
@endsection