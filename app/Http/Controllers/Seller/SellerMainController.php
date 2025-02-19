<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SellerMainController extends Controller
{
    public function index(){
        $loggeduser = Auth::User();
        return view('seller.dashboard', compact('loggeduser'));
    }


}
