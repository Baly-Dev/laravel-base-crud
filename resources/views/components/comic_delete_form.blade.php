<form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="delete" type="submit">Delete</button>
</form>