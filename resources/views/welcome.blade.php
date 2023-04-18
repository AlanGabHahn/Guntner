@extends('layouts.app')

@section('content')
    <div class="row" id="home">
        <div class="col-lg-6 col-md-12">
                <div class="container" id="retangulo">
                    <div style="padding-bottom:2em">
                        <img src="{{config('app.url')}}/images/guntner_logo_white.png" alt="">
                    </div>
                    <h1 style="padding-bottom:2em">
                        LIDERANÇA EM SOLUÇÕES <br> DE ENGENHARIA
                    </h1>
                    <div style="padding-bottom:2em">
                        Trabalhamos envolvidos em diversas áreas de atuação, como <br>manter os alimentos frescos, fornecer temperaturas interiores<br> confortáveis para edifícios comerciais e permitir a produção de <br>energia renovável.
                    </div>
                    <div style="padding:2em 0">
                        ACESSE ABAIXO NOSSOS MATERIAIS ÚTEIS
                    </div>
                    <div>
                        <a href="{{route('categories')}}"><img src="{{config('app.url')}}/images/caminho_8.svg" alt=""> Catálogos e Flyers</a>
                        <br>
                        <a href="{{route('categories')}}"><img src="{{config('app.url')}}/images/caminho_8.svg" alt=""> IOMs</a>
                        <br>
                        <a href="{{route('categories')}}"><img src="{{config('app.url')}}/images/caminho_8.svg" alt=""> Quick Instalation</a>
                    </div>
                </div>

        </div>
        <div class="col-lg-6 col-md-12">
            <div class="container text-center" id="container-form">
                <div id="title-form">
                    TEM ALGUMA DÚVIDA OU PRECISA DE<br>ALGUM OUTRO MATERIAL ESPECÍFICO?
                </div>
                <br>
                <div>
                    <b>Solicite abaixo</b>
                </div>
                <form action="{{route('create_message')}}" method="post" id="form_messages">
                    @csrf
                    <div class="mb-3">
                        <input type="text" required placeholder="Nome" class="form-control" id="inputName" name="inputName">
                    </div>
                    <div class="mb-3">
                        <input type="text" required placeholder="Telefone" class="form-control" id="inputTelephone" name="inputTelephone">
                    </div>
                    <div class="mb-3">
                        <input type="email" required placeholder="Email" class="form-control" id="inputEmail" name="inputEmail">
                    </div>
                    <div class="mb-3">
                        <input type="text" required placeholder="Assunto" class="form-control" id="inputSubject" name="inputSubject">
                    </div>
                    <div class="mb-3">
                        <textarea required placeholder="Mensagem" class="form-control" id="inputMessage" name="inputMessage" rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit"><b>Enviar</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
