@extends('layouts.master')
@section('content')
    @if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
    </div>        
    @endif



    <form action="{{url("/createNewProduct")}}" method="POST">
        {{ csrf_field() }}
        <div >
            <label for="">Nom du produit </label>
            <input type="text" name="nom" id="nom" >
        </div>
        <div >
            <label for="">Description</label>
            <textarea name="description_du_produit" id="description_du_produit" cols="30" rows="10"></textarea>
        </div>
        <div >
            <label for="">Prix </label>
            <input type="number" name="prix" id="prix" >
        </div>
        <div >
            <label for="">Quantité en stock </label>
            <input type="number" name="quantite_en_stock" id="quantite_en_stock" >
        </div>
        <div >
            <label for="">Categorie du produit</label>
            <input type="text" name="categorie_du_produit" id="categorie_du_produit" >
        </div>
        <label for="pet-select">Choose a pet:</label>

<select name="status" id="status-select">
  
  <option value="actif">Actif </option>
  <option value="en_rupture_de_stock">En rupture de stock</option>

</select>
        <div >
            <label for="">Date de livraison</label>
            <input type="date" name="date_de_livraison" id="date_de_livraison" >
        </div>

        

        <button type="submit">Enregistrer</button>
    </form>
    @endsection