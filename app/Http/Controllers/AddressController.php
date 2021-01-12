<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = auth()->user()->addresses;
 
        return response()->json([
            'success' => true,
            'data' => $addresses
        ]);
    }

    public function show($id)
    {
        $address = auth()->user()->addresses()->find($id);
 
        if (!$address) {
            return response()->json([
                'success' => false,
                'message' => 'Address not found '
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $address->toArray()
        ], 400);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'detail' => 'required'
        ]);
 
        $address = new Address();
        $address->detail = $request->detail;
 
        if (auth()->user()->addresses()->save($address))
            return response()->json([
                'success' => true,
                'data' => $address->toArray()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Address not added'
            ], 500);
    }

    public function update(Request $request, $id)
    {
        $address = auth()->user()->addresses()->find($id);
 
        if (!$address) {
            return response()->json([
                'success' => false,
                'message' => 'Address not found'
            ], 400);
        }
 
        $updated = $address->fill($request->all())->save();
 
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Address can not be updated'
            ], 500);
    }

    public function destroy($id)
    {
        $address = auth()->user()->addresses()->find($id);
 
        if (!$address) {
            return response()->json([
                'success' => false,
                'message' => 'Address not found'
            ], 400);
        }
 
        if ($address->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Address can not be deleted'
            ], 500);
        }
    }
}