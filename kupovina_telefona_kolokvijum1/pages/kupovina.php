<div class="form1">
    <h2>Unesite vase podatke za kupovinu telefona</h2>
    <form name="order" method="post" action="./?stranica=order">
        <label for="ime"> Ime: </label>
        <input type="text" id="ime" name="ime" onchange="myFunction()">
        <label for="prezime"> Prezime: </label>
        <input type="text" id="prezime" name="prezime">
        <label for="godina"> Godina rodjenja: </label>
        <input type="number" id="godina" name="godina" min="1922" max="2004">
        <label for="address"> Adresa: </label>
        <input type="text" id="address" name="address" minlength="3">
        <label for="mobilni"> Mobilni tel.: </label>
        <input type="text" id="mobilni" name="mobilni">
        <label for="valutaPlacanja"> Valuta placanja: </label>
        <select id="valutaPlacanja" name="valutaPlacanja" onchange="myFunction()">
            <option value="0">Izaberite</option>
            <option value="RSD" id="RSD">RSD</option>
            <option value="EUR" id="EUR">EUR</option>
            <option value="USD" id="USD">USD</option>
</select>
        <label for="model"> Izaberite model: </label>
        <select id="model" name="model" onchange="myFunction()">
            <option value="0">Izaberite</option>
            <option value="IP" id="iphone">Iphone</option>
            <option value="SA" id="samsung">Samsung</option>
            <option value="HU" id="huawei">Huawei</option>
</select>
        <span id="cenaPrikaz"> Cena: </span> <br>
        <div>
            <button class="button" type="submit"> Poruci </button>
        </div>
    </form>

</div>

