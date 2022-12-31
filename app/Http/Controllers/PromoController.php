<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $promos = Promo::paginate(10);
        return view('promos.index', compact('promos'));
    }

    public function admin(Promo $promo)
    {
        $promos = Promo::all();
        return view('admin', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Promo $promo)
    {
        $promo = new Promo();
        return view('promos.create', compact('promo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $promo = Promo::create($this->validateRequest());
        $this->storeImage($promo);
        return redirect('promos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        $this->authorize('update', Promo::class);
        return view('promos.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        return view('promos.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Promo $promo)
    {
        $this->authorize('update', $promo);
        $promo->update($this->validateRequest());
        $this->storeImage($promo);
        return redirect('/promos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        $this->authorize('update', $promo);
        $promo->delete();
        return redirect('/promos');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($promo)
    {
        if (request()->has('image'))
        {
            $promo->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

}
