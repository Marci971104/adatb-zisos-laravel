@extends("layouts.app")


@section("title","Rolunk")

@section("content")

<h2>
    About újra dinamikusan!
</h2>

<h3>
    <x-message type="Hiba" message="Hiba üzenet!" :page="$page"/>
</h3>
<x-alert>
<x-slot name="title">
            Rólunk oldal komponens
        </x-slot>
        Adatok rólunk
    </x-alert>

@endsection



