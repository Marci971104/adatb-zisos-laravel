<h1>
    Töltsd ki a mezőket!
</h1>


<form action="add-product" method="post">
@csrf

<p>
    Név:<input type="text" name="name"placeholder="Név">
</p>
<p>
    Ára:<input type="text" name="price"placeholder="Ára">
</p>
<p>
    Cikkszáma:<input type="text" name="Id"placeholder="Cikkszáma">
</p>


<p>
    <button type="submit">
        Küldés
    </button>
</p>

</form> 