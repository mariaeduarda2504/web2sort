@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center">
        <form action="/grupoSorteio" method="POST">
           @csrf
           <div class="form-group">
                <label for="dataSorteio">Data de realização do Amigo Secreto</label>
                <input type="date" class="datepicker form-control" name="dataSorteio" id="dataSorteio">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="vrMinimo">Valor mínimo: R$</label>
                <input type="number" class="form-control" name="vrMinimo" id="vrMinimo" placeholder="1.0" step="1.00" min="1" max="100">
            </div>
            <div class="form-group">
                <label for="vrMaximo">Valor máximo: R$</label>
                <input type="number" class="form-control" name="vrMaximo" id="vrMaximo" placeholder="1.0" step="1.00" min="1" max="1000">
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/grupoSorteio';" type="button" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR",
            autoclose: true
        });
    });
  </script>
@endsection