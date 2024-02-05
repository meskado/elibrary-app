<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\borrower;
use App\Models\book;



class checkIn extends Controller
{
    public function __invoke(Request $request){
        $borrow = borrower::where(['book_id' => $_COOKIE["bookId"], 'check_in' => NULL])->get();
        borrower::where(['book_id' => $_COOKIE["bookId"], 'check_in' => NULL])->update(['check_in' => date('Y-m-d')]);
        book::where('id', $_COOKIE["bookId"])->update(['status' => 'in']);
        
        return view('check-in', compact('borrow'));
    }

}
