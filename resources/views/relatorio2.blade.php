@extends('layout/main')
@section('title', 'Relatório 2')
@section('conteudo')

<!-- TITULO -->
<h5 class="text-center">RELATÓRIO 2</h5><br>
<p>Descrição: Relatório com os locais de hospedagem e com totalizado de sites hospedados ordenado crescente pela quantidade.</p>

<a href="{{route('relatorio')}}"><button class="btn btn-warning">VOLTAR</button></a>

<!-- TABELA DE HOSPEDAGEM 2 -->
@if($locais->count() >= 1)<br>
<table class="table table-striped ">
  <thead>
    <tr>
      <th>LOCAL</th>
      <th>SITES HOSPEDADOS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($locais as $local)
    <tr>           
      <td>{{$local->hospedeiro}}</td>
      <td>{{$local->dominio_id}}</td> 
      <td>{{$local->id}}</td>   
    </tr> 
    @endforeach  
  </tbody>
</table>
@endif

@endsection