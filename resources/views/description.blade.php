@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Request Id</th>
                           <th>From Address</th>
                           <th>To Address</th>
                           <th>Coin Id</th>
                           <th>Amount</th>
                           <th>Tx Id</th>
                           <th>Exchange Id</th>
                           <th>Status</th>
                           <th>Fee</th>
                           <th>Remark</th>
                           <th>Time</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($descriptions as $description)
                       <tr>
                           <td>{{$description->request_id}}</td>
                           <td>{{$description->from_address}}</td>
                           <td>{{$description->to_address}}</td>
                           <td>{{$description->coin_id}}</td>
                           <td>{{$description->amount}}</td>
                           <td>{{$description->tx_id}}</td>
                           <td>{{$description->exchange_id}}</td>
                           <td>{{$description->status}}</td>
                           <td>{{$description->fee}}</td>
                           <td>{{$description->remark}}</td>
                           <td>{{$description->time}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
