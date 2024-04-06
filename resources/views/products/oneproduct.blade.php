@extends('layouts.master')
@section('content')
    @if ($product ==null)
        <h1>Le produit que vous demander n'existe pas </h1>
    
        
    @else
        
    <h1>

        Details du product {{$product->nom}}
    </h1>
   <div>
    Description:
       {{  $product->description_du_produit}}
</div>
<div>
    Nom :  
    {{  $product->prix}}
</div>

<div>
    Quantité en stock:  
    {{  $product->quantite_en_stock}}
</div>
<div>
    status
    {{  $product->status}}
</div>
<div>
    date de livraison
    {{  $product->date_de_livraison}}
</div>
    @endif

<a href="/editproduct/{{$product->id}}">Edit Product</a>
    <form action="{{url('deleteproduct', [$product->id])}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Supprimer</button>
    </form>
    @endsection