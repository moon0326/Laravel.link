@section('title','Search results for "'.$term.'"')

@section('scripts')
<script type="text/javascript">
$(function(){var s=$('.search-box');var t=s.val();s.focus().val('').val(t);});
</script>

@if(count($tricks))

@endif
@stop

@section('content')
	<div class="container">
		@if($term != '')
		<div class="row push-down">
			<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
				<h1 class="page-title">{{ $tricks->getTotal(); }} Search {{Str::plural('result', count($tricks));}} for &quot;<strong>{{{$term}}}</strong>&quot;</h1>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				@include('partials.search',['term'=>$term])
			</div>
		</div>

		@include('tricks.grid', ['tricks' => $tricks, 'appends' => [ 'q' => $term ]])

		@else
			<div class="row push-down">
				<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
					<h1 class="page-title">Please provide a search term</h1>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					@include('partials.search')
				</div>
			</div>
		@endif
	</div>
@stop
