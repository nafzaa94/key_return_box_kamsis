<?php

namespace App\Http\Controllers;

use App\Models\Addcard;
use Illuminate\Http\Request;

class AddcardController extends Controller
{
    public function index()
    {
        $allcards = Addcard::all();
        return view('homepage', compact('allcards'));
    }

    public function addcard()
    {
        return view('addcardpage');
    }

    public function storecard(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'cardnumber' => 'required',
            'block' => 'required',
        ]);

        $addcard = Addcard::create([
            'fullname' => $request->fullname,
            'cardnumber' => $request->cardnumber,
            'block' => $request->block,
        ]);

        if ($addcard) {
            return redirect()->route('homepage')->with('success', 'Card added successfully');
        } else {
            return redirect()->route('homepage')->with('error', 'Card not added');
        }
    }

    public function editcard($id)
    {
        $card = Addcard::find($id);
        return view('updatecardpage', compact('card'));
    }

    public function updatecard($id)
    {
        $card = Addcard::find($id);
        $card->fullname = request('fullname');
        $card->cardnumber = request('cardnumber');
        $card->block = request('block');
        $card->save();

        if ($card) {
            return redirect()->route('homepage')->with('success', 'Card updated successfully');
        } else {
            return redirect()->route('homepage')->with('error', 'Card not updated');
        }
    }

    public function deletecard($id)
    {
        $card = Addcard::find($id);
        $card->delete();

        if ($card) {
            return redirect()->route('homepage')->with('success', 'Card deleted successfully');
        } else {
            return redirect()->route('homepage')->with('error', 'Card not deleted');
        }
    }
}
