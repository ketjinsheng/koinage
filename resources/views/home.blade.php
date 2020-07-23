@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @php
                $x = 0;
                foreach($coinBalance as $coin){
                    $x += $coin['balance'];
                }
            @endphp
            <h4>Balance: {{$x}}</h4>
            <button style="font-size:18px"><i class="fa fa-plus"> Add Coin</i></button>
            @foreach ($coinBalance as $coin)
                <div class="row">    
                    <div class="col-8" style="font-size:23px;"><a href="/{{$coin['coin_id']}}/address">{{$coin['symbol']}}</div></a>
                    <div class="col-4" style="font-size:23px;">{{$coin['balance']}}</div>
                </div class="row">
            @endforeach
        </div>
    </div>
</div>

@endsection
{{-- <h5>BTC:</h5>
            <button type="button" class="btn btn-primary float-left">Withdraw</button>
            <button type="button" class="btn btn-success float-left ml-2">Receive</button>
            <button type="button" class="btn btn-info float-left ml-2">Deposit History</button>
            <button type="button" class="btn btn-secondary float-left ml-2">Withdraw History</button>
        </div>
        <div class="col-md-8 mt-4">
            <h5>Child Address</h5>
        </div> --}}