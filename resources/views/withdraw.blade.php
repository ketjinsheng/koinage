@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Tx Id</th>
                           <th>Coin Id</th>
                           <th>From Address</th>
                           <th>To Address</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Timestamp</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($withdraws as $withdraw)
                       <tr>
                           <td>{{$withdraw->tx_id}}</td>
                           <td>{{$withdraw->coin_id}}</td>
                           <td>{{$withdraw->from_address}}</td>
                           <td>{{$withdraw->to_address}}</td>
                           <td>{{$withdraw->amount}}</td>
                           <td>{{$withdraw->status}}</td>
                           <td>{{$withdraw->timestamp}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
