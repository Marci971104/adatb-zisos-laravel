@extends("templates.top-header")

<h1>
    Admin
</h1>

{{ print_r($names)}}

@foreach($names as $name)


<h3>
    {{$name}}
</h3>

<center>
    {{$name}}
</center>

@endforeach