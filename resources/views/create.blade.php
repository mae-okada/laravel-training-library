@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
         <div class="col-md12">
            <div class="card">
                <div class="card-header">
                    <div class="h4">
                        Add Books
                    </div>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('books.store') }}">
                    @csrf

                        <div class="mb-3">
                            <label for="title">Title:</label><br>
                            <input type="text" id="title" name="title" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Author:</label><br>
                            <input type="text" id="author" name="author" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">ISBN:</label><br>
                            <input type="text" id="isbn" name="isbn" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Publisher:</label><br>
                            <input type="text" id="publisher" name="publisher" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Category:</label><br>
                            <input type="text" id="category" name="category" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Pages:</label><br>
                            <input type="text" id="pages" name="pages" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Language:</label><br>
                            <input type="text" id="language" name="language" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Publish Date:</label><br>
                            <input type="date" id="publish_date" name="publish_date" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Subjects:</label><br>
                            <input type="text" id="subjects" name="subjects" class="form-control"><br>
                        </div>

                        <div class="mb-3">
                            <label for="author">Description:</label><br>
                            <input type="text" id="desc" name="desc" class="form-control"><br>
                        </div>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
