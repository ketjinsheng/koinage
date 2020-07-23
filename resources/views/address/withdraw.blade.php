@extends('layouts.app')

@section('content')
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
@endsection
