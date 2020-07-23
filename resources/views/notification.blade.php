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
                           <th>Payload</th>
                           <th>Status</th>
                           <th>Retries</th>
                           <th>Timestamp</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($notifications as $notification)
                       <tr>
                           <td>{{$notification->client_id}}</td>
                           <td>{{$notification->payload}}</td>
                           <td>{{$notification->status}}</td>
                           <td>{{$notification->retries}}</td>
                           <td>{{$notification->timestamp}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
