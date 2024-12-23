<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Book;
use App\Models\Reader;

class BorrowReturn
{
    public $static_id;
    public $message;
}

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    /*
    {
        "reader_id" : int,
        "book_id" : int,
        "borrow_date" : DATETIME,
        "return_date" : DATETIME,
    }
     */
    public function newborrow(Request $request)
    {
        $return = new BorrowReturn();
        $request-> validate([
            'reader_id'=> 'required',
            'book_id' => 'required',
            'borrow_date'=> 'required',
            'return_date'=> 'required',
        ]);

        try{
            Borrow::create($request-> all());
            $return->static_id = 200;
            $return->message = 'Sách đã được mượn thành công.';
            return response() -> json($return, 200);
        }
        catch(\Exception $e){
            $return->message = $e->getMessage();
            $return->static_id = 500;
            return response()->json($return, 500);
        }
    }

    /**
     * Return a borrowed book.
     */
    public function returnBook(Request $request, string $id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->update(['status' => false, 'return_date' => now()]);

        return response()->json($borrow);
    }
}
