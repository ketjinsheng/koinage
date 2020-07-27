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
            <button data-toggle="modal" data-target="#add_coin" style="font-size:18px"><i class="fa fa-plus"> Add Coin</i></button>
            @foreach ($coinBalance as $coin)
                <div class="row">    
                    <div class="col-8" style="font-size:23px;"><a href="/{{$coin['coin_id']}}/address">{{$coin['symbol']}}</div></a>
                    <div class="col-4" style="font-size:23px;">{{$coin['balance']}}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!--Add Coin-->
<div class="modal fade" id="add_coin" tabindex="-1" role="dialog" aria-labelledby="withdrawLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formLabel">Add Coin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/addcoin" method="POST">
                    <div class="form-group">
                        <label for="coin">Coin</label>
                        @php $coins=\App\Coin::all(); @endphp
                        <select class="form-control" id="add_coin" name="coin_id"
                            aria-describedby="coin_id">
                            @foreach($coins as $coin)
                            <option value="{{$coin->id}}">{{$coin->symbol}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-danger m-1" data-dismiss="modal">Close</button>
                        <button type="submit" id="submitBtn" class="btn btn-success stdbtn float-right m-1">{{__('Add')}}</button>
                    </div>
                    @csrf
                </form>
            </div>
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