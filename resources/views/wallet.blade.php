@extends('layouts.app')

@section('content')
<style >
      table{
           background-color:#0C0028;
      }
      tbody{
           color:white;
      }  
      body{
           background-color:gray;
      }
      
</style>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                       </tr>
                <div class="table text-center">
                  <div style='font-size:30px;color:white; background-color:#0C0028;'>$0.00</div>
                  <div style='font-size:25px;color:white; background-color:#0C0028;'>Multi-Coin Wallet1</div>     
                </div>
               <table class="table">
                   <thead>
                       <tr>
                           
                   </thead>
                   <tbody>                    
                       <tr>
                       <td ><img style='width:60px;' src="{{asset('storage/image/group 13.png')}}"></td>
                       <td style='font-size:20px;'>Bitcoin</td>
                       <td></td>
                       <td style='font-size:20px;'>0 BTC</td>
                       </tr> 
                       <tr>
                       <td><img style='width:60px;' src="{{asset('storage/image/group 14.png')}}"></td>
                       <td style='font-size:20px;'>BNB</td>
                       <td></td>
                       <td style='font-size:20px;'>0 BTC</td>
                       </tr>               
                       <tr>
                       <td><img style='width:60px;' src="{{asset('storage/image/group 15.png')}}"></td>
                       <td style='font-size:20px;'>Bitcoin</td>
                       <td></td>
                       <td style='font-size:20px;'>0 BTC</td>
                       </tr>
                       <tr>
                       <td><img style='width:30px;' src="{{asset('storage/image/group 28.png')}}"></td>
                       <td><img style='width:30px;' src="{{asset('storage/image/group 34.png')}}"></td> 
                       <td><img style='width:35px;' src="{{asset('storage/image/group 36.png')}}"></td>
                       <td><img style='width:42px;' src="{{asset('storage/image/group 75.png')}}"></td>
                       </tr>               
                   </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
</body>

@endsection
