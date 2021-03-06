<?php

namespace App\Http\Controllers;

use App\Product;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showproducts()
    {
        $product = Product::all();
        return view('allproduct',compact('product'));
    }

    public function addproduct()
    {
        return view('addproduct');
    }

    public function registerproduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|max:30',
            'description' => 'required|alpha|max:190'
        ]);

        $product = new Product();
        $product->name=strtolower($request->name);
        // 
         // ruta de las imagenes guardadas
          $ruta = public_path().'/img/';

          // recogida del form
          $imagenOriginal = $request->file('image');

          // crear instancia de imagen
          $imagen = Image::make($imagenOriginal);

          // generar un nombre aleatorio para la imagen
          $temp_name = $request->name . '.' . $imagenOriginal->getClientOriginalExtension();

          $imagen->resize(300,300);

          // guardar imagen
          // save( [ruta], [calidad])
          $imagen->save($ruta . $temp_name, 100);
        // 
        $product->image=$temp_name;
        $product->description=strtolower($request->description);
        $product->state="0";
        $product->save();
        return redirect(route('showproducts'))->with('successMsg','Guardado con exito!');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
