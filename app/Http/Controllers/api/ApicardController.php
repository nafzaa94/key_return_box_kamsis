<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Addcard;
use Illuminate\Http\Request;

class ApicardController extends Controller
{
    public function getonedata($cardnumber)
    {
        $data = Addcard::where('cardnumber', $cardnumber)->first();

        if ($data) {
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Data not found',
            ]);
        }
    }

    public function updatestatus($cardnumber)
    {
        $data = Addcard::where('cardnumber', $cardnumber)->first();

        if ($data) {
            if ($data->status == 1) {
                $data->status = 0;
            } else {
                $data->status = 1;
            }
            $data->save();

            return response()->json([
                'status' => 200,
                'message' => 'Status updated successfully',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Data not found',
            ]);
        }
    }
}
