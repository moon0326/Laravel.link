@section('title', 'Tags')

@section('content')
    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Tags</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                @include('partials.search')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="content-box">
                    <ul class="nav nav-list">
                        @foreach($tags as $tag)
                            <li>
                                <a href="{{ route('tricks.browse.tag', $tag->slug) }}">
                                    {{ $tag->name }}
                                    <span class="text-muted pull-right">{{$tag->trick_count}}</span>
                                </a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
@stop
