@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Setting</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id=datatable class="table table-striped table-bordered">
                <thead>
                    <th>User_ID</th>
                    <th>network_id</th>
                    <th>lower_acc_threshold</th>
                    <th>upper_acc_threshold</th>
                    <th>required_confirmation</th>
                    <th>spent_limit</th>
                    <th>day_spent_limit</th>
                    <th>hour_spent_limit</th>
                    <th>gas_price</th>
                    <th>block_num</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </thead>
                <tbody>
                    @foreach ($configs as $config)
                       <tr>
                           <td>{{$configs->user_id}}</td>
                           <td>{{$configs->network_id}}</td>
                           <td>{{$configs->lower_acc_threshold}}</td>
                           <td>{{$configs->upper_acc_threshold}}</td>
                           <td>{{$configs->required_confirmation}}</td>
                           <td>{{$configs->spent_limit}}</td>
                           <td>{{$configs->day_spent_limit}}</td>
                           <td>{{$configs->hour_spent_limit}}</td>
                           <td>{{$configs->gas_price}}</td>
                           <td>{{$configs->gas_price}}</td>
                           <td>{{$configs->gas_price}}</td>
                           <td>{{$configs->gas_price}}</td>

                        </tr> 
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection