@extends('layout/main')
@section('title', 'Relatório 3')
@section('conteudo')

<!-- TITULO -->
<h5 class="text-center">RELATÓRIO 3</h5><br>
<p>Descrição: Relatório de dominios com datas de vencimento ordenada decrescente pela data mais recente. </p>

<a href="{{route('relatorio')}}"><button class="btn btn-warning">VOLTAR</button></a>

<!-- TABELA DE VENCIMENTOS 3 -->
@if($vencimentos->count() >= 1)<br>
<table class="table table-striped ">
  <thead>
    <tr>
      <th>#</th>
      <th>DOMINIO</th>
      <th>HOSPEDEIRO</th>
      <th>VENCIMENTO</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($vencimentos as $vencimento)
    <tr>           
      <td>{{$vencimento->id}}</td>
      <td>{{$vencimento->nome}}</td>    
      @foreach ($vencimento->hospedagem as $hosp)
        <td>{{$hosp->hospedeiro }}</td>
        <td>{{$hosp->vencimento}}</td> 
      @endforeach      
    </tr> 
    @endforeach  
  </tbody>
</table>
@endif

@endsection