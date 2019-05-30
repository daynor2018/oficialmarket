<?php

namespace App\Http\Controllers;

use App\Provider;
use Image;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showaprovider()
    {
        $active = Provider::activeproviders();
        return view('listprovider', compact('active'));
    }
    
    public function showprovider()
    {
        $active = Provider::all();
        return view('allprovider', compact('active'));
    }
    
    public function showiprovider()
    {
        $active = Provider::inactiveproviders();
        return view('listproviderinactive', compact('active'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addprovider()
    {
        return view('addprovider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function registerprovider(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'nit' => 'numeric|required|integer|digits_between:8,15|unique:providers',
        ]);

        $provider = new Provider();
        $provider->name=strtolower($request->name);
        if(empty($request->file('files'))){
            $provider->image='defaultprovider.jpg';
        }else{
         // ruta de las imagenes guardadas
          $ruta = public_path().'/img/provider/';
          // recogida del form
          $imagenOriginal = $request->file('files');
          // crear instancia de imagen
          $imagen = Image::make($imagenOriginal);
          // generar un nombre aleatorio para la imagen
          $temp_name = $request->nit . '.' . $imagenOriginal->getClientOriginalExtension();
          $imagen->resize(300,300);
          // guardar imagen
          // save( [ruta], [calidad])
          $imagen->save($ruta . $temp_name, 100);
            $provider->image=$temp_name;
        }
        $provider->nit=$request->nit;
        if($request->state=='on'){
            $provider->state='1';
        }else{
            $provider->state='0';
        }
        $provider->save();
        return redirect(route('showprovider'))->with('successMsg','Guardado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function editprovider($id)
    {
        $campos = Provider::find($id);
        return view('editprovider',compact('campos'));
    }
    
    public function updateprovider(Request $request, $id)
    {
        $provider = Provider::find($id);
        if ($provider->nit==$request->nit){
            $this->validate($request, [
            'name' => 'required|max:30',
            'nit' => 'numeric|required|integer|digits_between:8,15',
            ]);   
        }else{
            $this->validate($request, [
            'name' => 'required|max:30',
            'nit' => 'numeric|required|integer|digits_between:8,15|unique:providers',
            ]);
        }
        $provider->name=strtolower($request->name);
        if(empty($request->file('files'))){
            if($provider->image=='defaultprovider.jpg'){
                $provider->image='defaultprovider.jpg';
            }else{
            }
        }else{
         // ruta de las imagenes guardadas
          $ruta = public_path().'/img/provider/';
          // recogida del form
          $imagenOriginal = $request->file('files');
          // crear instancia de imagen
          $imagen = Image::make($imagenOriginal);
          // generar un nombre aleatorio para la imagen
          $temp_name = $request->nit . '.' . $imagenOriginal->getClientOriginalExtension();
          $imagen->resize(300,300);
          // guardar imagen
          // save( [ruta], [calidad])
          $imagen->save($ruta . $temp_name, 100);
        $provider->image=$temp_name;
        }
        $provider->nit=$request->nit;
        if($request->state=='on'){
            $provider->state='1';
        }else{
            $provider->state='0';
        }
        $provider->save();
        return redirect(route('showprovider'))->with('successMsg','¡Actualización exitosa!');
    }
    
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function offprovider($id)
    {
        $provider = Provider::find($id);
        $provider->state='0';
        $provider->save();
        return redirect(route('showprovider'))->with('successMsg','¡Se ha desactivado el proveedor, no se podran realizar pedidos al mismo!');
    }
    
    public function onprovider($id)
    {
        $provider = Provider::find($id);
        $provider->state='1';
        $provider->save();
        return redirect(route('showprovider'))->with('successMsg','¡Se activo el proveedor, ahora se podran realizar pedidos!');
    }
}
