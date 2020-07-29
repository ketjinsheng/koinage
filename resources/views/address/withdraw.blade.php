@extends('layouts.app')

@section('content')
<script src="{{ asset('js/bootstrap-pincode-input.js') }}"></script>
<div class="float-left">
    <a href="/{{$coin_id}}/address"><button class="btn btn-primary">Back</button></a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <input type="hidden" class="form-control">
                </div>
                <div class="form-group">
                    <label for="receiver">Bitcoin address or email to send to</label>
                    <input type="text" class="form-control" id="to_address" name="to_address" aria-describedby="to_address">
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#withdrawTradingPin" class="stdbtn float-right">{{__('Withdraw')}}</button>
                </div>
                @csrf
            </form>
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
                    <input type="hidden" id="amount" name="amount">
                    <input type="hidden" id="addnetwork_id" name="network_id">
                    <input type="hidden" id="to_address" name="to_address">
                    <input type="hidden" id="from_address" name="from_address" value="{{$address}}">
                    <input type="hidden" id="coin_id" name="coin_id" value="{{$coin_id}}">
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

$('#withdrawTradingPin').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var amount = document.getElementById('amount').value;
        var network_id = document.getElementById('addnetwork_id').value;
        var to_address =  document.getElementById('to_address').value;
        var coin_id =  document.getElementById('coin_id').value;
        console.log(amount,network_id,to_address);

        var modal = $(this);

        modal.find('.modal-body #amount').val(amount);
        modal.find('.modal-body #addnetwork_id').val(network_id);
        modal.find('.modal-body #to_address').val(to_address);
        modal.find('.modal-body #coin_id').val(coin_id);
    })
</script>
@endsection
