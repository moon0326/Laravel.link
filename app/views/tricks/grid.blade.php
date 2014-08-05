<div class="row js-trick-container">
	@if($tricks->count())
		@foreach($tricks as $trick)
			@include('tricks.card', [ 'trick' => $trick ])
		@endforeach
	@else
		<div class="col-lg-12">
			<div class="alert alert-danger">
				Sorry, but I couldn't find any links for you!
			</div>
		</div>
	@endif
</div>
@if($tricks->count())
	<div class="row">
	    <div class="col-md-12 text-center">
	    	@if(isset($appends))
	        	{{ $tricks->appends($appends)->links(); }}
	        @else
				{{ $tricks->links(); }}
	        @endif
	    </div>
	</div>
@endif


@section('scripts')
	<script type="text/javascript" src="{{ asset('js/trick-grid.js') }}"></script>
@stop