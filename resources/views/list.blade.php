@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/style.css')}}">
@endsection

@section('title', 'Argonautes')

@section('content')
<h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" action="/" method="POST">
  @csrf
    <label for="nom">Nom de l&apos;Argonaute</label>
    <input type="text"  name="nom" placeholder="nom" value="Charalampos">
    <button type="submit">Envoyer</button>
  </form>

<h2 class="title">Membres de l'équipage</h2>

<div class="grid">
   
        @foreach ($argonautes as $argonaute)
        
           <div>{{ $argonaute->nom }}</div>
    
        @endforeach
    
</div>

@endsection
