@extends('layouts.userapp')

@section('usercontent')
<div class="container-fluid">
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="¿Qué puedo encontrar por usted?">
            <select>
                <option>Producto</option>
                <option>Marca</option>
                <option>Ofertas</option>
            </select>
            <span class="input-group-addon">
                <button class="btn btn-primary" type="submit"><span class="icon icon-sign-in"></span></button>
            </span>
        </div>
    </form>
</div>
<h4>Recommended</h4>
    <div class="row selected-classifieds">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="thumbnail">
            <a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
            <div class="caption">
            <h5><a href="#">Samsung Galaxy S4</a></h5>
            <p class="price">550 EUR</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="thumbnail">
            <a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
            <div class="caption">
            <h5><a href="#">Samsung Galaxy S4</a></h5>
            <p class="price">550 EUR</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="thumbnail">
            <a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
            <div class="caption">
            <h5><a href="#">Samsung Galaxy S4</a></h5>
            <p class="price">550 EUR</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="thumbnail">
            <a href="#"><img src="http://placehold.it/800x600/e0e0e0" /></a>
            <div class="caption">
            <h5><a href="#">Samsung Galaxy S4</a></h5>
            <p class="price">550 EUR</p>
            </div>
            </div>
        </div>
    </div>
@endsection
