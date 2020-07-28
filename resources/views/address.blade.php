@extends('layouts.app')

@section('content')
<script src="{{ asset('js/bootstrap-pincode-input.js') }}"></script>

<div class="float-left">
    <a href="/home"><button class="btn btn-primary">Back</button></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div style="height:50px">
                <button type="button" data-toggle="modal" data-target="#withdraw" class="btn btn-primary float-left">Withdraw</button>
                <a href="/{{$coin_id}}/receive"><button type="button" class="btn btn-success float-left ml-2">Receive</button></a>
                <a href="/{{$coin_id}}/history"><button type="button" class="btn btn-info float-left ml-2">History</button></a>
            </div>
            <h4>Coin: {{$addresses->first()->wallet->coin->symbol}}</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Child Address</th>
                        <th>User</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                @foreach ($addresses as $address)
                    @if ($address->label != 0)
                        <tbody>
                            <tr>
                                <td>{{$address->address}}</td>
                                <td></td>
                                <td>{{$address->wallet->balance??0}}</td>
                                <td><a href="/withdraw/{{$address->address}}"><button class="btn btn-success">Withdraw</button></a></td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            </table>
            {{-- <div class="row">
                @foreach ($addresses as $address)
                    @if ($address->label != 0)
                        <div class="col-8">
                            <div style="font-size:18px;">{{$address->address}}: {{$address->wallet->balance??0}}  Coin : {{$address->wallet->coin->symbol??'NA'}}</div>
                        </div>
                        <div class="col-4">
                            <a href="/withdraw/{{$address->address}}"><button class="btn btn-success">Withdraw</button></a>
                        </div>
                    @endif
                @endforeach
            </div> --}}
        </div>
    </div>
</div>

<!--Withdraw-->
<div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="withdrawLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formLabel">Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/withdraw" method="POST">
                    <div class="form-group">
                        <label for="bal">Current Balance</label>
                    </div>
                    <div class="form-group">
                        <label for="amount">Send/Withdrawal Amount</label>
                        <input type="integer" class="form-control" id="amount" name="amount" aria-describedby="amount">
                    </div>
                    <div class="form-group">
                        <label for="fee">Transaction Fee Estimated</label>
                    </div>
                    <div class="form-group">
                        <label for="network">Network</label>
                        @php $networks=\App\Network::all(); @endphp
                        <select class="form-control" id="addnetwork_id" name="network_id"
                            aria-describedby="network_id">
                            @foreach($networks as $network)
                            <option value="{{$network->id}}">{{$network->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="receiver">Bitcoin address or email to send to</label>
                        <input type="text" class="form-control" id="task_name" name="task_name" aria-describedby="task_name">
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-danger m-1" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#withdrawTradingPin" class="stdbtn float-right">{{__('Withdraw')}}</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Trading Pin Modal -->
<div class="modal fade" id="withdrawTradingPin" tabindex="-1" role="dialog" aria-labelledby="packageformLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Verify Trading Pin')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/withdraw" method="POST">
                    @csrf
                    <div class="form-group row text-center">
                        <label for="tradingpin" class="col-4 control-label col-form-label">{{__('Trading Pin')}}</label>
                        <div class="col-8">
                            <input type="password" class="border-0" id='trading_pin' name="pin"  required maxlength="6" autocomplete="new-password" required>
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <button type="submit" id="submitBtn" class="btn btn-success stdbtn float-right" id="enable_disable">{{__('Withdraw')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
//$('#pin').pincodeInput();
$('#trading_pin').pincodeInput({

// 6 input boxes = code of 6 digits long
inputs:6,

// hide digits like password input
hideDigits:true,

// keyDown callback
keydown : function(e){},

// callback on every input on change (keyup event)
change: function(input,value,inputnumber){
//input = the input textbox DOM element
//value = the value entered by user (or removed)
//inputnumber = the position of the input box (in touch mode we only have 1 big input box, so always 1 is returned here)
},

// callback when all inputs are filled in (keyup event)
complete : function(value, e, errorElement){
// value = the entered code
// e = last keyup event
// errorElement = error span next to to this, fill with html 
// e.g. : $(errorElement).html("Code not correct");
}

});
</script>

@endsection
{{-- <h5>BTC:</h5>
            <button type="button" class="btn btn-primary float-left">Withdraw</button>
            <button type="button" class="btn btn-success float-left ml-2">Receive</button>
            <button type="button" class="btn btn-info float-left ml-2">Deposit History</button>
            <button type="button" class="btn btn-secondary float-left ml-2">Withdraw History</button>
        </div>
        <div class="col-md-8 mt-4">
            <h5>Child Address</h5>
        </div> --}}

        {{-- @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>adress</th>
                                   <th>network_id</th>
                                   <th>label</th>
                               </tr>
                           </thead>
                           <tbody>                    
                                @foreach($addresses as $address)
                               <tr>
                                   <td>{{$address->address}}</td>
                                   <td>{{$address->network_id}}</td>
                                   <td>{{$address->label}}</td>
                               </tr>
                               @endforeach                       
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection
         --}}