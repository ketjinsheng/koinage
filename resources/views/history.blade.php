@extends('layouts.app')

@section('content')
<div class="float-left">
    <a href="/{{$coin_id}}/address"><button class="btn btn-primary">Back</button></a>
</div>
<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#withdraw">Withdraw</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#deposit">Deposit</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="withdraw" class="container tab-pane active"><br>
            <h3>Withdraw History</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div id="deposit" class="container tab-pane fade"><br>
            <h3>Deposit History</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>
@endsection