@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="float-left">
        <a href="/{{$coin_id}}/address"><button class="btn btn-primary">Back</button></a>
    </div>
    <div class="float-left ml-4">
        {!! QrCode::size(300)->generate(Request::url()); !!}
    </div>
    <div class="text-center">
        <div class="form-group">
            <label for="deposit_add">Deposit Address(BTC)</label>
            <input type="text" class="form-control" style="width:40%;position:absolute;left:52%;" id="deposit_add">
            <button class="btn btn-primary theme_color" data-clipboard-action="copy" data-clipboard-target="#url">{{ __('Copy') }}</button>
        </div>
    </div>
</div>

<script type="text/javascript">
    var clipboard = new Clipboard('.copyBtn');
    
    clipboard.on('success', function(e) {
	  e.clearSelection();
	  alert('URL Copied Successfully');
	});


	clipboard.on('error', function(e) {
	  alert('Something is wrong!');
    });

</script>
@endsection