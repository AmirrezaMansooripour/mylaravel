@extends('taklif.layout.master')
@section('body')
    <div class="container">
        <form action="/home" method="GET" style="margin-top:13px;width: 32%;margin: auto">
            <div class="form-group">
                <label for="prod_name">Product Name:</label>
                <input type="username" value="{{ $prod->name }}" name="prod_name" class="form-control"
                    placeholder="Product Name" id="prod_name">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" class="form-control" name="description" rows="3">{{ $prod->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="email">Price:</label>
                <input type="email" name="email" class="form-control" placeholder="Price" id="email"
                    value="{{ $prod->price }}">
            </div>

            <div class="form-group">
                <label for="off">off:</label>
                <input type="number" name="off" class="form-control" value="{{ $prod->off }}" placeholder="off"
                    id="off">
            </div>

            <div class="form-group">
                <label for="Image">image:</label>
                <input type="file" name="Image" value="{{ $prod->image }}" class="form-control" placeholder="Image"
                    id="Image">
            </div>
            <div class="form-group">
                <label for="cat">Category:</label>
                <input type="text" name="cat" value="{{ $category->name }}" class="form-control"
                    placeholder="Category" id="cat">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
@endsection
