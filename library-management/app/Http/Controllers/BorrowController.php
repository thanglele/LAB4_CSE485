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
    // public function index()
    // {
    //     //
    // }

    /*
    {
        "reader_id" : int,
        "book_id" : int,
        "borrow_date" : DATETIME,
        "return_date" : DATETIME,
    }
     */

    /*
        API mượn sách: URL: /api/newBorrow
        Method: POST
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

    /*
        API trả sách: URL: /api/returnBook
        Method: PUT
        static = 0 là đang mượn
        static = 1 là đã trả
     */
    public function returnBook(Request $request, string $id)
    {
        $return = new BorrowReturn();
        try
        {
            $borrow = Borrow::findOrFail($id);
            $borrow->update(['status' => true, 'return_date' => now()]);

            $return->static_id = 200;
            $return->message = 'Sách đã được trả thành công.';
            return response() -> json($return, 200);
        }
        catch(\Exception $e){
            $return->message = $e->getMessage();
            $return->static_id = 500;
            return response()->json($return, 500);
        }
    }

    /*
        API danh sách toàn bộ thông tin sách mượn: URL: /api/listBorrow
        method: GET
        static = 0 là đang mượn
        static = 1 là đã trả
     */
    public function listBorrow(Request $request){
        $return = new BorrowReturn();
        try{
            $listborrow = Borrow::all();

            return response() -> json($listborrow, 200);
        }
        catch(\Exception $e){
            $return->message = $e->getMessage();
            $return->static_id = 500;
            return response()->json($return, 500);
        }
    }
    
}
