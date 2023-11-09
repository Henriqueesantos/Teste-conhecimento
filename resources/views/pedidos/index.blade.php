<x-layout title='Listar os pedidos'>


<a href="{{ route('pedidos.create')}}">Cadastrar pedido de entrega<a>

<h1> Listar os pedidos </h1>



@include('components/flas-message')

<table>


        <tbody>
            <tr>
@foreach ($pedidos as $pedido)


Usuário:<tr>{{$pedido->name}}</tr><br>Origem:
<tr>{{$pedido->endorigem}}</tr><br>Destino:
<tr>{{$pedido->enddestino}}</tr><br>Valor:
<tr>{{$pedido->valor}}</tr><br><br>
@endforeach
</tbody>


</table>
</x-layout>