<li class="comic-record">
    <div class="comic-attribute">
        <h5>Title</h5>
        <small>{{$comic->title}}</small>
    </div>
    <div class="comic-attribute">
        <h5>Description</h5>
        <small>{{$comic->description}}</small>
    </div>
    <div class="comic-attribute">
        <h5>Series</h5>
        <small>{{$comic->series}}</small>
    </div>
    <div class="comic-attribute">
        <h5>Type</h5>
        <small>{{$comic->type}}</small>
    </div>
    <div class="comic-attribute">
        <h5>Price</h5>
        <small>{{$comic->price}}</small>
    </div>
    <div class="comic-attribute">
        <h5>Actions</h5>
        <div class="actions">
            <a href="{{route('comics.show', $comic->id)}}" class="show">Show</a>
            <a href="#" class="delete">Delete</a>
        </div>
    </div>
</li>