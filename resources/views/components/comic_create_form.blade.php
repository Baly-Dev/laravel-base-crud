<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <fieldset>
        <label for="title">Title</label>
        <input type="text" name="title" id="">
    </fieldset>

    <fieldset>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </fieldset>

    <fieldset>
        <label for="thumb">Thumb link</label>
        <input type="text" name="thumb" id="">
    </fieldset>

    <fieldset>
        <label for="price">Price</label>
        <input type="number" name="price" id="">
    </fieldset>

    <fieldset>
        <label for="series">Series</label>
        <input type="text" name="series" id="">
    </fieldset>

    <fieldset>
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="">
    </fieldset>

    <fieldset>
        <label for="type">Type</label>
        <input type="text" name="type" id="">
    </fieldset>

    <button class="btn" type="submit">Conferma</button>
</form>