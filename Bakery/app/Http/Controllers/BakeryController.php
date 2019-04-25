<?php

namespace App\Http\Controllers;

use App\Bakery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BakeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $bakeries = Bakery::where('status', 1)->get();
        return view('admin.bakery.list')
            ->with([
                'bakeries_in_view' => $bakeries
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.bakery.form')
            ->with([
                'action' => 'store',
                'title' => 'Create product'
            ]);
    }

    public function store()
    {
        $name = Input::get('name');
        $description = Input::get('description');
        $images = Input::get('images');
        $price = Input::get('price');

        $bakery = new Bakery();

        $bakery->name = $name;
        $bakery->description = $description;
        $bakery->images = $images;
        $bakery->price = $price;

        $bakery->save();
        return redirect("/admin/bakery");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return int|string
     */
    public function edit($id)
    {
        return view('admin.bakery.form')
            ->with([
                'bakery' => Bakery::find($id),
                'action' => 'update',
                'title' => 'Edit product'
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $name = Input::get('name');
        $description = Input::get('description');
        $images = Input::get('images');
        $price = Input::get('price');

        $bakery = Bakery::find($id);

        $bakery->name = $name;
        $bakery->description = $description;
        $bakery->images = $images;
        $bakery->price = $price;
        $bakery->updated_at = Carbon::now()->toDateTimeString();
        $bakery->save();
        return redirect("/admin/bakery");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
