<div class="container mt-5">
    <form action="/destroyAllHumans" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">DELETE ALL</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{$membre->id}}</th>
                    <td>{{$membre->nom}}</td>
                    <td><a class="btn btn-success" href="/member-show/{{$membre->id}}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>