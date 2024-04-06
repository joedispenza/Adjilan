@extends('layouts.master')
@section('content')
    
@if (Session::has('status'))
<div class="message">
    {{Session::get("status")}}
</div>



@endif
@if ($products->count() == 0) 
<div>Pas de produit a affiché ici</div>
<a href="/create">Ajouter un nouveau produit</a>
@else

<ul class="productList">
    <h1 style="text-align: center">Liste des produits</h1>
    @foreach ($products as $product)
    
    <li>
        {{  $product->nom}}
        {{  $product->prix}} XOF
        <a href="/product/{{$product->id}}"> Voir plus </a>
    </li>
</div>
@endforeach

<a href="/create">Ajouter un nouveau produit</a>
</ul>

@endif
@endsection
