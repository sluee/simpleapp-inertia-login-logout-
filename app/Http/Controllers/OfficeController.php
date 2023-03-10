<?php

namespace App\Http\Controllers;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index() {
        $offices = Office::orderBy('name')->with('user')->get();
        return inertia('offices/Index',compact('offices'));
    }

    public function create() {
        return inertia('offices/Create');
    }
}
