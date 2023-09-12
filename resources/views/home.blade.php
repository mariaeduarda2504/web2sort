@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="py-4 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('storage/imagens/logo.jpg') }}" alt="" width="90" height="90">
        </div>
        <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="card-title">Cadastro de Sorteios</h2>
                    <p class="card-text">
                        Crie um Amigo Secreto e convide seus amigos a participar ou <br>
                        Inscreva-se e participe de um Amigo Secreto criado por outra pessoa.
                    </p>
                    <a href="/grupoSorteio" class="btn btn-lg btn-block btn-primary">Acessar</a>
                </div>
        </div>
    </div>
</div>
@endsection
