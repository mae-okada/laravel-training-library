@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md12">
                <div class="card">
                    <div class="card-header">
                        <div class="h4">List of Books</div>
                        @guest
                        @else
                        <a href="{{ route('books.create') }}" class="btn btn-primary float-left" role="button">Add Book</a>
                        @endguest                    
                    </div>
                    <br>
                    <!-- item cards -->
                    <!-- first row of cards -->
                    <div class="row">

                        @foreach ($books as $book)
                            <!-- first item -->
                            <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="{{ $book->image_path }}" alt="{{ $book->title }}" width="250px">
                                    <div class="caption">
                                        <h3>{{ $book->title }}</h3>
                                        <p>{{ $book->desc }}</p>

                                        <div class="text-center">
                                            {{-- <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger" role="button">Delete</a> --}}
                                            @csrf
                                            <div><a href="{{ route('books.show', $book->id) }}" class="btn btn-default btn-sm" role="button">Show Detail</a></div>
                
                                             {{-- <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button> --}}

                                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(!($book->id % 4))
                            </div>
                            <div class="row">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagination')
    <!-- pagination -->
    <div class="text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            {!! $books->links() !!}
            {{-- <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a> --}}
          </li>
        </ul>
      </nav>
    </div>
</div>
@endsection
