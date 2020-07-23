@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <table class="table">
                   <thead>
                       <tr>
                           <th>From address</th>
                           <th>Hot wallet</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Tx Id</th>
                           <th>Coin Id</th>
                           <th>Timestamp</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($autogathers as $autogather)
                       <tr>
                           <td>{{$autogather->from_address}}</td>
                           <td>{{$autogather->hot_wallet}}</td>
                           <td>{{$autogather->amount}}</td>
                           <td>{{$autogather->status}}</td>
                           <td>{{$autogather->tx_id}}</td>
                           <td>{{$autogather->coin_id}}</td>
                           <td>{{$autogather->timestamp}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
