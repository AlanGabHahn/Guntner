@extends('layouts.app-nav')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 3em">
            <div class="col-4">
                <h1 style="color:#3C3C3B">
                    CATÁLOGOS E FLYERS > {{$categorieName}} > {{$subCategorieName}}
                </h1>
            </div>
            <div class="col-md-8 d-xsm-none d-md-block" style="border-top: 1px solid #3C3C3B;margin-top: 1.5em">
            </div>
        </div>
        <div class="row" style="margin-top: 5em">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Tamanho do arquivo</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody class="">
                    @foreach($product as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->size}}</th>
                            <td><img src="{{config('app.url')}}/images/caminho_8.png" alt=""></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
