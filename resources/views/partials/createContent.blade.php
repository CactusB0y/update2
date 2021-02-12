<div class="container mt-5">
    <form action="/member-store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Séléctionner un genre</label>
            <select name="genre" class="form-control" id="exampleFormControlSelect1">
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>