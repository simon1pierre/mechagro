<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;

class MasterMachineController extends Controller
{
    public function storemachine(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:available,leased',
    ]);

    $imagePath = $request->file('image')->store('machines', 'public');

    Machine::create([
        'name' => $request->name,
        'image' => $imagePath,
        'status' => $request->status,
    ]);

    return redirect()->back()->with('success', 'Machine added successfully!');
}

}
