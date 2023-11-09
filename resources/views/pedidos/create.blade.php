<x-layout title='Cadastrar pedidos'>

<a href="{{ route('pedidos.index')}}">Listar pedidos</a>


<h1> Cadastrar pedido de entrega:</h1>
<form text-allign="center" action="/pedidos" method="POST">
    @csrf
<label>Nome: </label>
<input type="text" name="name" id="name" placeholder=""><br>

<label>Endereço de origem: </label>
<input type="text" name="endorigem" id="endorigem"  placeholder=""><br>

<label>Endereço de entrega: </label>
<input type="text" name="enddestino" id="enddestino" placeholder=""><br><br>

<label>Valor: </label>
<input type="text" name="valor" id="valor" placeholder=""><br><br>


<button type="submit"> Cadastrar</button>

</x-layout>
