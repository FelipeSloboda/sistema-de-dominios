@extends('layout/main')
@section('title', 'Relatórios')
@section('conteudo')

<!-- TITULO -->
<h5 class="text-center">RELATÓRIOS</h5><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>RELATÓRIO</th>
      <th>DESCRIÇÃO</th>
      <th>VISUALIZAR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>DOMÍNIOS</td>
      <td>RELATÓRIO DE DOMÍNIOS</td>
      <td>
        <a href="{{route('relatorio1')}}"><button class="btn btn-success">VER</button></a>
      </td>
    </tr>

    <tr>
      <td>2</td>
      <td>LOCAIS</td>
      <td>RELATÓRIO DE LOCAIS DE HOSPEDAGEM</td>
      <td><a href="{{route('relatorio2')}}"><button class="btn btn-success">VER</button></a></td>
    </tr> 

    <tr>
      <td>3</td>
      <td>VENCIMENTOS</td>
      <td>RELATÓRIO VENCIMENTOS</td>
      <td><a href="{{route('relatorio3')}}"><button class="btn btn-success">VER</button></a></td>
    </tr>
    
  </tbody>
</table>
@endsection