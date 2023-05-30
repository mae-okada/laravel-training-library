@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
         <div class="col-md12">
            <div class="card">
                <div class="card-header">
                    <div class="h4">
                        Update data {{ $book->title }}
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $book->title }}">

                        <div class="container-fluid" >
                            <label>Book Title</label>
                            <input type="text" name="title" value="{{ $book->title }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Author</label>
                            <input type="text" name="author" value="{{ $book->author->name }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>ISBN</label>
                            <input type="text" name="isbn" value="{{ $book->isbn }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Publisher</label>
                            <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Category</label>
                            <input type="text" name="category" value="{{ $book->category }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Pages</label>
                            <input type="text" name="pages" value="{{ $book->pages }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Language</label>
                            <input type="text" name="language" value="{{ $book->language }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Publish date</label>
                            <input type="text" name="publish_date" value="{{ $book->publish_date }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Subjects</label>
                            <input type="text" name="subjects" value="{{ $book->Subjects }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Description</label>
                            <input type="text" name="desc" value="{{ $book->desc }}" class="form-control">
                        </div>
                        <div class="container-fluid">
                            <label>Image URL</label>
                            <input type="text" name="desc" value="{{ $book->image_path }}" class="form-control">
                        </div>
                        <br>
                        <div class="container-fluid">
                            <input type="submit" value="Submit">
                            <a href="/" class="btn btn-danger float-end">Cancel</a>
                        </div>
                        <br>
                    </form>

                </div>
            </div>
         </div>
    </div>
</div>
@endsection
