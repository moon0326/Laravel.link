<div href="#" class="trick-card col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<div class="trick-card-inner js-goto-trick" data-slug="{{ $trick->slug }}">
		<a class="trick-card-title" href="{{ $trick->link }}" target='_blank'  data-slug="{{ $trick->slug }}">
			{{{ $trick->title }}}
		</a>
		<div class="trick-card-stats trick-card-by">
			by <b><a href="{{ route('user.profile', $trick->user->username) }}">{{ $trick->user->username }}</a></b>
			{{ $trick->timeago }} {{ $trick->categories }}
			<span>-
			@foreach($trick->tags as $tag)
			    <a href="{{url('tags/'.$tag->slug)}}" class="tag" title="{{$tag->name}}">{{$tag->name}}</a>
			@endforeach
			</span>

            @if(Auth::check() && (Auth::user()->id == $trick->user_id))
                <div class="text-right">
                    <a data-toggle="modal" href="#deleteModal">Delete</a> |
                    <a href="{{$trick->editLink}}">Edit</a>
                    @include('tricks.delete',['link'=>$trick->deleteLink])
                </div>
            @endif

		</div>


	</div>
</div>

