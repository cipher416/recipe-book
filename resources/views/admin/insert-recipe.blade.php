@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/edit-recipe.css">
@endsection

@section('content')
    <div class="container">
        <div>
            <div class="judul text-center fw-bolder mt-5">
                <h2>ADD RECIPE</h2>
            </div>

            <div class="mt-5 isi mx-auto border border-dark rounded">
                <form action="{{url('/addRecipe')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label">Title</label>
                        <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="title"
                        >
                        <div id="emailHelp" class="form-text">{{$errors->first('title')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" aria-describedby="emailHelp"
                               name="description"
                        >
                        <div id="emailHelp" class="form-text">{{$errors->first('description')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                        <div id="emailHelp" class="form-text">{{$errors->first('price')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Author</label>
                        <input type="text" class="form-control" id="stock" name="author">
                        <div id="emailHelp" class="form-text">{{$errors->first('author')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <div id="emailHelp" class="form-text">{{$errors->first('image')}}</div>
                    </div>

                    <div class="language-select">
                        <select class="form-select" aria-label="Default select example" name="language">
                            <option value="aaaaaaaaaa">Choose Language</option>
                            @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->language_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="emailHelp" class="form-text">{{$errors->first('language')}}</div>

                    <div class="add d-flex justify-content-center  mt-5">
                        <button type="submit" class="btn w-60">Submit</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection
