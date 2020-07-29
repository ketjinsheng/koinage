@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>

<div class="container text-center">
    <div class="float-left">
        <a href="/{{$coin_id}}/address"><button class="btn btn-primary">Back</button></a>
    </div>
    <div class="float-left ml-4">
        {!! QrCode::size(300)->generate($address) !!}
        <p class='mt-3' id='url'>{{$address}} </p>
        <button class="copyBtn btn btn-success theme_color" data-clipboard-action="copy" data-clipboard-target="#url">{{ __('Copy') }}</button>
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