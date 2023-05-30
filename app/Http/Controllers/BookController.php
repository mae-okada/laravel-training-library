<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Http\Requests ;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index(Request $request)
    {

        // $books = $this->booksArray;
        // $books = Book::paginate(8);
        // $books = Book::all();
        $books = Book::with('author')->get();
        if($request->has('search')){
            $keyword    = $request->search;
            $books      = Book::where('isbn', 'LIKE', "%$keyword%")
                        ->orwhere('title', 'LIKE', "%$keyword%")
                        ->orwhere('publisher', 'LIKE', "%$keyword%")
                        ->orwhere('category', 'LIKE', "%$keyword%")
                        ->orwhere('subjects', 'LIKE', "%$keyword%")
                        ->orwhere('desc', 'LIKE', "%$keyword%")
                        ->orwhere('language', 'LIKE', "%$keyword%")
                        ->paginate(8);
        } else {
            $books      = Book::paginate(8);
        }
        return view('index', compact('books'));
    }

    // public function detail(Request $request)
    // {
    //     $id = $request->integer('id');

    //     $books = $this->booksArray;
    //     $book = array();
    //     foreach ($books as $item) {
    //         if ($item['id'] == $id) {
    //             $book = $item;
    //             break;
    //         }
    //     }
    //     return view('detail', compact('book'));
    // }

    // public function detail($id)
    // {
    //     // $id = $request->integer('id');

    //     // $books = $this->booksArray;
    //     // $book = array();
    //     // foreach ($books as $item) {
    //     //     if ($item['id'] == $id) {
    //     //         $book = $item;
    //     //         break;
    //     //     }
    //     // }
    // }

    public function create()
    {
        // action 'create'
        return view('create');
    }

    public function store(BookRequest $request)
    {
        $validatedData = $request->validated();

        $book = new Book;

        $book->title        = $validatedData['title'];
        $book->author       = $validatedData['author'];
        $book->isbn         = $validatedData['isbn'];
        $book->publisher    = $validatedData['publisher'];
        $book->category     = $validatedData['category'];
        $book->pages        = $validatedData['pages'];
        $book->language     = $validatedData['language'];
        $book->publish_date = $validatedData['publish_date'];
        $book->subjects     = $validatedData['subjects'];
        $book->desc         = $validatedData['desc'];
        $book->image_path   = $validatedData['image_path'];
        $book->save();

        // return redirect()->route('books.index');
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }


    public function show($id)
    {
        // action 'show'
        // $books = Book::all();
        $books = Book::with('author')->get();
        $book = Arr::first($books, function($book) use ($id){
            return $book['id'] == $id;
        });
        // return view('detail', compact('book'));
        return view('detail', ['book' => $book]);
    }

    public function edit($id)
    {
        // action 'edit'
        // $books = Book::all();
        $books = Book::with('author')->get();
        $book = Arr::first($books, function($book) use ($id){
            return $book['id'] == $id;
        });
        // return view('detail', compact('book'));
        return view('edit', ['book' => $book]);
    }

    public function update(BookRequest $request, $id)
    {
        $validatedData = $request->validated();

        $book = Book::findOrFail($id);

        $book->title        = $validatedData['title'];
        $book->author       = $validatedData['author'];
        $book->isbn         = $validatedData['isbn'];
        $book->publisher    = $validatedData['publisher'];
        $book->category     = $validatedData['category'];
        $book->pages        = $validatedData['pages'];
        $book->language     = $validatedData['language'];
        $book->publish_date = $validatedData['publish_date'];
        $book->subjects     = $validatedData['subjects'];
        $book->desc         = $validatedData['desc'];
        $book->image_path   = $validatedData['image_path'];
        $book->save();

        // return redirect()->route('books.show',$book->id);
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        // return redirect()->route('books.index');
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }


}
