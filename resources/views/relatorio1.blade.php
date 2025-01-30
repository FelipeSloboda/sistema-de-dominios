@extends('layout/main')
@section('title', 'Relatório 1')
@section('conteudo')

<!-- TITULO -->
<h5 class="text-center">RELATÓRIO 1</h5><br>
<p>Descrição: Relatório geral de todos os dominios com vinculo com proprietario e hospedeiro, ordenado alfabéticamente pelo dominio</p>

<a href="{{route('relatorio')}}"><button class="btn btn-warning">VOLTAR</button></a>

<!-- TABELA DE DOMINIOS -->
@if($dominios->count() >= 1)<br>
<table class="table table-striped ">
  <thead>
    <tr>
      <th>#</th>
      <th>DOMINIO</th>
      <th>PROPRIETARIO</th>
      <th>HOSPEDEIRO</th>
      <th>VENCIMENTO</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dominios as $dominio)
    <tr>           
      <td>{{$dominio->id}}</td>
      <td>{{$dominio->nome}}</td>
      <td>{{$dominio->user->name}}</td>    
      @foreach ($dominio->hospedagem as $hosp)
        <td>{{$hosp->hospedeiro }}</td>
        <td>{{$hosp->vencimento}}</td> 
      @endforeach      
    </tr> 
    @endforeach  
  </tbody>
</table>
@endif



@endsection