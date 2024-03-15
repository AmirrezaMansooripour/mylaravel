@extends('taklif.layout.master')
@section('body')
    <div class="container">
        <form action="/home" method="GET" style="margin-top:13px;width: 32%;margin: auto">
            <div class="form-group">
                <label for="category_name">category Name:</label>
                <input type="username" value="{{ $cat->name }}" name="category_name" class="form-control"
                    placeholder="category name" id="category_name">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
@endsection
