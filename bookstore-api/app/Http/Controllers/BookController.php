<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Resources\Books as BookResourceCollection;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function print($title)
    {
        return $title;
    }
    //public function index()
    //{
    //    $books = DB::select('select * from books');
    //    return $books;
    //}
    public function view($id)
    {
        $book = DB::select('select * from books where id = :id' , ['id' => $id]);
        return $book;
    }
    public function top($count)
    {
        $criteria = Book::select('*')
            ->orderBy('views', 'DESC')
            ->limit($count)
            ->get();
        return new BookResourceCollection($criteria);
    }
    public function index()
    {
        $criteria = Book::paginate(4);
        return new BookResourceCollection($criteria);
    }
}
