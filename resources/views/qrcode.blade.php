@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="float-left">
        <a href="/address"><button class="btn btn-primary">Back</button></a>
    </div>
    <div class="float-left ml-4">
        {!! QrCode::size(300)->generate(Request::url()); !!}
    </div>
    <div class="text-center">
        <div class="form-group">
            <label for="deposit_add">Deposit Address(BTC)</label>
            <input type="text" class="form-control" style="width:40%;position:absolute;left:52%;" id="deposit_add">
        </div>
    </div>
</div>
@endsection