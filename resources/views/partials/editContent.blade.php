<div class="container mt-5">
    <form action="/member-update/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" value="{{$edit->nom}}" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" value="{{$edit->age}}" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Séléctionner un genre</label>
            <select name="genre" class="form-control" id="exampleFormControlSelect1">
                @if ($edit->genre == 'Homme')
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                @else
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                @endif
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>