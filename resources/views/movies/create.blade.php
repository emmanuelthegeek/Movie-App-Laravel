@extends('layouts.main')

@section('content')
    <div class="d-flex align-items-center justify-content-center">
        <form style="text-align:center;">
            <h4>Create New Movies</h4>
            <hr>
            <div class="form-group" style="max-width:250px; text-align:center;">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Movie name">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" name="description" placeholder="Description">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Release date</label>
                <input type="date" class="form-control" name="release_date" placeholder="Release Date">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Rating</label>
                <input type="number" class="form-control" name="number" min="1" step="1" max="5" placeholder="Rating">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Country</label>
                <input type="text" class="form-control" name="country" placeholder="Country">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Ticket Price</label>
                <input type="number" class="form-control" name="price" placeholder="Ticket Price">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Genre</label>
                <input type="text" class="form-control" name="genre" placeholder="Genre">
            </div>
            <div class="form-group" style="max-width:250px; text-align:center;">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" name="image" placeholder="upload_image">
            </div>
            <button type="submit" class="btn btn-primary">Create movie</button>
        </form>
    </div>
@endsection
