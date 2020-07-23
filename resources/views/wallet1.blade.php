@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">        
            
               <table class="table">
                   <thead>
                       <tr>
                           <th>Address Id</th>
                           <th>Coin Id</th>
                           <th>Balance</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($wallets as $wallet)
                       <tr>
                           <td>{{$wallet->address_id}}</td>
                           <td>{{$wallet->coin_id}}</td>
                           <td>{{$wallet->balance}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>


@endsection
