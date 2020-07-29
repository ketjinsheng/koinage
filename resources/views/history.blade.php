@extends('layouts.app')

@section('content')
<div class="float-left">
    <a href="/{{$coin_id}}/address"><button class="btn btn-primary">Back</button></a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Withdraw</th>
            <th>History</th>
        </tr>
    </thead>
</table>

@endsection