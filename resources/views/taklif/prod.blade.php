@extends('taklif.layout.master')
@section('head')
<style>
    h4{
        text-align:center;
        margin:auto;
    }
</style>
@endsection
@section('body')
    <div class="container" style="text-align:center;margin:auto">
        <div style="width:600px;height:400px;background-color:black;margin:auto;color:white">
            <h1>image</h1>
        </div>
        <div class="row" style="text-align:center;margin:auto">
            <h4>
                {{$prod->name}}
            </h4>
        </div>
        <div class="row" style="text-align:center;margin:auto">

            <h4>
                {{$prod->price}}<span>$</span>
            </h4>
            </div>

            <div class="row" style="text-align:center;margin:auto">

            <h4>
                {{$prod->off}}<span>%</span>
            </h4>
            </div>

    </div>
@endsection