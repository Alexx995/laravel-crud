

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('movies/' .$movies->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$movies->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$movies->name}}" class="form-control"></br>
                <label>Imdb rating</label></br>
                <input type="number" name="imdb_rating" id="imdb_rating" value="{{$movies->imdb_rating}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>


