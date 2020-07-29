@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
</head>
</head>
<body>
    
</body>
</html>
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
                           <td>{{$config->user_id}}</td>
                           <td>{{$config->network_id}}</td>
                           <td>{{$config->required_confirmation}}</td>
                           <td>{{$config->accumulated_threshold}}</td>
                           <td>{{$config->spent_limit}}</td>
                           <td>{{$config->day_spent_limit}}</td>
                           <td>{{$config->hour_spent_limit}}</td>
                           <td>{{$config->gas_price}}</td>
                           <td>{{$config->block_num}}</td>
                           <td>{{$config->created_at}}</td>
                           <td>{{$config->updated_at}}</td>
                          
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
