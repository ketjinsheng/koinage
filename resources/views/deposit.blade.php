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
                           <th>To Address</th>
                           <th>Amount</th>
                           <th>Block Num</th>
                           <th>Status</th>
                           <th>Memo</th>
                           <th>Timestamp</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($deposits as $deposit)
                       <tr>
                           <td>{{$deposit->tx_id}}</td>
                           <td>{{$deposit->coin_id}}</td>
                           <td>{{$deposit->to_address}}</td>
                           <td>{{$deposit->amount}}</td>
                           <td>{{$deposit->block_num}}</td>
                           <td>{{$deposit->status}}</td>
                           <td>{{$deposit->memo}}</td>
                           <td>{{$deposit->timestamp}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
