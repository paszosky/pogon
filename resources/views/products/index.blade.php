@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            Lista produktów
        </div>
        <div class="col-md-6 float-right">
            <a class="" href="{{ route('products.create') }}">
                <button type="button" class="btn btn-primary">Dodaj</button>
            </a>
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Ilość</th>
                <th scope="col">Cena</th>
                <th scope="col">Data</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>@if($product->hasCategory()){{ $product->category->name }}@endif</td>
                    <td>
                        <a href="{{  route('products.show', $product->id) }}">
                            <button class="btn btn-primary btn-sm">P</button>
                        </a>
                        <a href="{{  route('products.edit', $product->id) }}">
                            <button class="btn btn-success btn-sm">E</button>
                        </a>
                        <button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                            X
                        </button>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    
    console.log($('.btn'));
    
@endsection