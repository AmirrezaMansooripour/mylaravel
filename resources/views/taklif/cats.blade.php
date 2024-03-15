@extends('taklif.layout.master')
@section('body')
    <div class="container">
        <div class="row">
            @foreach($cats as $cat)
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                        {{$cat->name}}
                        </h4>
                    </div>
                    <div class="footer">
                        <a href="/prods/{{$cat->id}}">see prods</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection