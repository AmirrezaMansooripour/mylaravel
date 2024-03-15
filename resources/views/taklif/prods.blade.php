@extends('taklif.layout.master')
@section('body')
    <div class="container">
        <div class="row">
            @foreach($prods as $prod)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4>
                        {{$prod->name}} 
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6>
                        {{$prod->price}}
                        </h6>
                        <h6>
                        {{$prod->off}}<span>%</span>
                        </h6>
                    </div>
                    <div class="footer">
                        <a href="/prod/{{$prod->id}}">
                            <h4>details</h4>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection