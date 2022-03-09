<h1>
    Töltsd ki a mezőket!
</h1>

<!-- @if( $errors->any())

<ul>
    @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach
</ul>


@endif -->


<form action="submit-studal" method="post">
@csrf

<p>
    Név:<input type="text" name="name" value="{{ old('name')}}" placeholder="Név">
    <br>
    @error("name")
        <span >
            {{$message}}
        </span>
    @enderror
</p>
<p>

    Email:<input type="text" value="{{ old('email')}}" name="email"placeholder="Email">
    <br>
    @error("email")
        <span>
            {{$message}}
        </span>
    @enderror


</p>
<p>
    Telefon:<input type="text" value="{{ old('phone')}}" name="phone"placeholder="Telefon">
    <br>
    @error("phone")
        <span>
            {{$message}}
        </span>
    @enderror
</p>


<p>
    <button type="submit">
        Küldés
    </button>
</p>

</form> 