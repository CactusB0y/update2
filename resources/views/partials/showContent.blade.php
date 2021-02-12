<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->id}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->nom}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->age}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->genre}}</h6>
          <a href="/member-edit/{{$show->id}}" class="btn btn-primary mb-2">EDIT</a>
          <form action="/member-delete/{{$show->id}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">DELETE</button>
          </form>
        </div>
      </div>
</div>