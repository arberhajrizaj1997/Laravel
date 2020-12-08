@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back" style="margin-left: 50px;"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf

        <div class="row d-block">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-left: 50px;">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-left: 50px;">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-md-4">
            <div class="form-group col-md-4" style="margin-left:38px">
                <strong>Stock:</strong><br>
                 <label>In Stock</label>
                 <input type="radio" name="in_stock" value="true">
                 <label>Out of Stock</label>
                 <input type="radio" name="out_stock" value="false">
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group col-md-4" style="margin-left:38px">
                <strong>Published Date:</strong><br>
                <input type="date" name="publish_date">                 
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                <button type="submit" class="btn btn-primary" style="margin-left: 50px;">Submit</button>
            </div>
        </div>

    </form>
@endsection