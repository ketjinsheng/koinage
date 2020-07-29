@extends('layouts.app')

@section('content')


<div class="float-left">
    <a href="/home"><button class="btn btn-primary">Back</button></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div style="height:50px">
                @foreach ($addresses as $address) 
                    @if ($address->label == 0)
                        @php $main_address = $address->address @endphp
                        <a href="/{{$coin_id}}/withdraw/{{$address->address}}"><button type="button" class="btn btn-primary float-left ml-2">Withdraw</button></a>
                    @endif
                @endforeach
                <a href="/{{$coin_id}}/receive/{{$main_address}}"><button type="button" class="btn btn-success float-left ml-2">Receive</button></a>
                <a href="/{{$coin_id}}/history"><button type="button" class="btn btn-info float-left ml-2">History</button></a>
            </div>
            <h4>Coin: {{$addresses->first()->wallet->coin->symbol}}</h4>
            <h5>Main Address: {{$main_address}}</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Child Address</th>
                        <th>User</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                @foreach ($addresses as $address)
                    @if ($address->label != 0)
                        <tbody>
                            <tr>
                                <td>{{$address->address}}</td>
                                <td>{{$address->label}}</td>
                                <td>{{$address->wallet->balance??0}}</td>
                                <td><a href="/withdraw/{{$address->address}}/{{$coin_id}}"><button class="btn btn-success">Withdraw</button></a></td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection
