<form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="title">Title</label>
        <input type="text" name="title" id="" value="{{ $comic->title}}">
    </fieldset>

    <fieldset>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{$comic->description}}</textarea>
    </fieldset>

    <fieldset>
        <label for="thumb">Thumb link</label>
        <input type="text" name="thumb" id="" value="{{$comic->thumb}}">
    </fieldset>

    <fieldset>
        <label for="price">Price</label>
        <input type="number" name="price" id="" value="{{$comic->price}}">
    </fieldset>

    <fieldset>
        <label for="series">Series</label>
        <input type="text" name="series" id="" value="{{$comic->series}}">
    </fieldset>

    <fieldset>
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="" value="{{$comic->sale_date}}">
    </fieldset>

    <fieldset>
        <label for="type">Type</label>
        <input type="text" name="type" id="" value="{{$comic->type}}">
    </fieldset>

    <button class="btn" type="submit">Conferma</button>
</form>