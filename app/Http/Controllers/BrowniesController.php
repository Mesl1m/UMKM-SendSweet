<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrowniesController extends Controller
{
    public function showBrowniesIndex(Request $req)
    {
        try {

            DB::beginTransaction();
            
            $data = DB::table("product")->where('productName', 'like', '%BROWNIES%')->get();
            
            DB::commit();
            
            return response()->json($data);

        } catch (\Throwable $th) {
            return response()->json([
                'MESSAGETYPE' => 'E',
                'MESSAGE' => 'Something went wrong',
                'SERVERMSG' => dd($th->getMessage()),
            ], 400)->header(
                'Accept',
                'application/json'
            );
        }
    }

    public function showBrownies(Request $req)
    {
        try {

            DB::beginTransaction();

            $output = "";

            $q = "SELECT * FROM product WHERE LOWER(product.productName) LIKE LOWER('%BROWNIES%');";

            $data = DB::select($q);

            if ($data) {
                foreach ($data as $r) {
                    $output .= '
                        <div style="width: 30%;">
                            <img src="'. ($r->productPhoto) .'" class="card-img-top" alt="...">
                            <h2 class="text-center fw-bold" style="font-family:"Artubus";color: #FF006B">'. (str_replace("BROWNIES", "", $r->productName)) .'</h2>
                            <p class="text-center p-0 m-0">“'.$r->productDesc.'”</p>
                            <h2 class="text-center fw-bold" style="font-family:"Artubus";color: #FF006B">Rp '. (number_format($r->price, 0, ',', '.')) .'/box</h2>
                        </div>
                    ';
                }
            }
            
            DB::commit();

            return response()->json($output);

        } catch (\Throwable $th) {
            return response()->json([
                'MESSAGETYPE' => 'E',
                'MESSAGE' => 'Something went wrong',
                'SERVERMSG' => dd($th->getMessage()),
            ], 400)->header(
                'Accept',
                'application/json'
            );
        }
    }
}

