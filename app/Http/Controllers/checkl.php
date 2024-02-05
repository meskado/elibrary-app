<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\borrower;
use App\Models\book;

class checkl extends Controller
{
    public function __invoke(Request $request){
        $book = [
          'book_id' =>  $request->input('bookId'),
          'name' => $request->input('name'),
          'mobile_no' => $request->input('number'),
          'national_id' => $request->input('nationalid'),
          'check_out' => date('Y-m-d'),
          'return_date' => date('Y-m-d', strtotime(date('Y-m-d') . " +15 days")),
          'created_at' => now(),
          'updated_at' => now(),
        ];  
          borrower::insert($book);
          $bookr = book::class;
          $bookr::where('id', $request->input('bookId'))->update(['status' => 'out']);
          echo "record saved";
    }

  }