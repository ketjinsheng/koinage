@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Client Id</th>
                           <th>Network Id</th>
                           <th>Required Confirmation</th>
                           <th>Accumulated Threshold</th>
                           <th>Spent Limit</th>
                           <th>Day Spent Limit</th>
                           <th>Hour Spent Limit</th>
                           <th>Gas Price</th> 
                           <th>Block Num</th> 
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($configs as $config)
                       <tr>
                           <td>{{$config->client_id}}</td>
                           <td>{{$config->network_id}}</td>
                           <td>{{$config->required_confirmation}}</td>
                           <td>{{$config->accumulated_threshold}}</td>
                           <td>{{$config->spent_limit}}</td>
                           <td>{{$config->day_spent_limit}}</td>
                           <td>{{$config->hour_spent_limit}}</td>
                           <td>{{$config->gas_price}}</td>
                           <td>{{$config->block_num}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
