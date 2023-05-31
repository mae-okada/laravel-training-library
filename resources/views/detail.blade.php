@extends('layouts.app')

@section('content')
<!-- item cards -->
        <!-- first row of cards -->
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class="thumbnail">
                <div class="row">
                  <div class="col-sm-6 col-md-4">

                    <div class="text-center">
                      <img src="{{ $book->image_path }}" class="pt-10 pb-10 pl-10" width="250px">
                      <div><br></div>
                      @guest
                      @else
                      {{-- <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a> --}}
                      <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success btn-sm" role="button">Update</a>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      @endguest
                      <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-8">
                    <h2><b>{{ $book->title }}</b></h2>
                    <p><small>by</small> <a href="#" class="h-link">{{ $book->author->name }}</a></p>
                    <div class="pt-20">
                      <p>Publisher <a href="#" class="h-link">{{ $book->publisher }}</a></p>
                      <p>Category <a href="#" class="h-link">{{ $book->category }}</a></p>
                      <p>Pages <b>{{ $book->pages }}</b></p>
                      <p>Language <a href="#" class="h-link">{{ $book->language }}</a></p>
                      <p>Publish Date <a href="#" class="h-link">{{ date("F Y",strtotime($book->publish_date)) }}</a></p>
                      {{-- <p>Subjects <a href="#" class="h-link">Fantasy</a>, <a href="#" class="h-link">Fiction</a>, <a href="#" class="h-link">Good and Evil</a></p> --}}
                      <p>Subjects {{ $book->subjects }}</p>
                      <p id="synopsis">{{ $book->desc }}</p>
                      {{-- <p id="synopsis">{{ $book['short_desc'] }}<span id="dots">...</span><span id="more">distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, in deserunt quasi nihil architecto hic nobis cumque necessitatibus excepturi a?</span></p> --}}
                      {{-- <p class="h-link" id="read-btn" onclick="showCompleteText()">Read more</p> --}}
                      <br>
                      <p>ISBN <b>{{ $book->isbn }}</b></p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
@endsection
