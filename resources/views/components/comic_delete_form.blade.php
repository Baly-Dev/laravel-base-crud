<form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST" onsubmit="return confirm('Confirm Comic Delete')">
    @csrf
    @method('DELETE')
    <button class="delete" type="submit">Delete</button>
</form>

<!-- CommercialistaLorem01 -->