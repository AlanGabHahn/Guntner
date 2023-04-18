@extends('layouts.app-nav')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 3em">
            <div class="col-4">
                <h1 style="color:#3C3C3B">
                    CATÁLOGOS E FLYERS > {{$categorieName}}
                </h1>
            </div>
            <div class="col-md-8 d-xsm-none d-md-block" style="border-top: 1px solid #3C3C3B;margin-top: 1.5em">
            </div>
        </div>
        <div class="row" style="margin-top: 5em">
            @foreach($subcategories as $subcategorie)
                <div class="col">
                    <a href="{{route('items',$subcategorie->id)}}">
                        <figure class="figure">
                            <img src="{{config('app.url')}}/images/folder.svg" class="figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption text-center">
                                {{$subcategorie->name}}
                            </figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
