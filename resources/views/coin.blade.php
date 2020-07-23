@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <div class="col-5"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcoin">Add</button></div>
            
               <table class="table">
                   <thead>
                       <tr>
                           <th>Network</th>
                           <th>Symbol</th>
                           <th>Decimal</th>
                           <th>Smart Contract</th>
                       </tr>
                   </thead>
                   <tbody>                    
                        @foreach($coins as $coin)
                       <tr>
                           <td>{{$coin->network_id}}</td>
                           <td>{{$coin->symbol}}</td>
                           <td>{{$coin->decimal}}</td>
                           <td>{{$coin->smart_contract}}</td>
                       </tr>
                       @endforeach                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addcoin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Coin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/addcoin" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Symbol</label>
                <input type="text" class="form-control"  name="symbol" placeholder="Enter symbol">                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Network</label>
                <input type="number" class="form-control" name="network_id" placeholder="Network">
            </div>
            <div class="form-group">
                <label for="exampleCheck1">Decimal</label>
                <input type="number" class="form-control" name="decimal" placeholder="Decimal">                
            </div>
            <div class="form-group">
                <label for="exampleCheck1">Smart Contract</label>
                <input type="text" class="form-control" name="smart_contract" placeholder="Smart Contract Address">                
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
