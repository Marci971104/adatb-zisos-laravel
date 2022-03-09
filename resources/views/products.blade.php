@extends("layouts.app")


@section("title","Termékek")



@section ("content")

<h1>
    Termékek oldal dinamikusan!
</h1>

<h2>
<x-message type="Siker!" message="Siker üzenet!" :page="$page"/>
</h2>
@foreach ($name as $name)
<h3>
   
  
    <x-name message="Termék neve:" :name="$name"/>
   
</h3>
@endforeach
<h1>
    <x-alert>
        <x-slot name="title">
            Termék oldal komponens
        </x-slot>
        Adatok a termékekről
    </x-alert>
</h1>



@endsection