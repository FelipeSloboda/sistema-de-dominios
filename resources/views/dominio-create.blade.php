@extends('layout/main')
@section('title', 'Dominios')
@section('conteudo')

<!-- TITULO -->
<h5 class="text-center">NOVO DOMINIO</h5><br>
  <form action="{{route('dominio.adicionar')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="nome" class="form-label">Dominio</label>
        <input type="text" class="form-control" id="nome" name="nome" required></input>
    </div>

    <div class="mb-3">
        <label for="extensao" class="form-label">Extensão</label>
        <select class="form-select" required id="extensao" name="extensao">
            <option value="1" selected>.com.br</option>
            <option value="2">.com</option>
            <option value="3">.net</option>
        </select>
    </div>
    <!--LOCAL-->
    <div class="mb-3">
        <label for="extensao" class="form-label">Local</label>
        <select class="form-select" required id="local" name="local">
            <option value="1" selected>hostinger</option>
            <option value="2">localweb</option>
            <option value="3">hostgator</option>
      </select>
    </div>

    <!--VENCIMENTO-->
    <div class="mb-3">
        <label for="vencimento" class="form-label">VENCIMENTO</label>
        <input type="date" class="form-control" id="vencimento" name="vencimento" required></input>
    </div>

    <!--BOTOES-->
    <div class="mb-3">
        <a href="{{route('dominio')}}"><button class="btn btn-warning">VOLTAR</button></a>
        <button type="submit" class="btn btn-success">ENVIAR</button>
    </div>
</form>


@endsection