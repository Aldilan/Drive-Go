<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $i = 0;
            $datas = Brand::all();
            $createUrl = '/manage/brand/create';
            $title = 'BRAND';
            $countData = Brand::all()->count();
            return view('modules.admin.brand', ['countData' => $countData, 'title' => $title, 'createUrl' => $createUrl, 'datas' => $datas, 'i' => $i]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.admin.create.brandCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand' => 'required',
        ]);
        Brand::create([
            "brand" => $request->brand,
        ]);
        return redirect()->route('brand.index')->with('success', 'Success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
