<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
    public function machinemanage(){
        $machines = Machine::all();
        return view('admin.machine.manage', compact('machines'));
    }

    public function machinecreate(){
        return view('admin.machine.create');
    }
}
