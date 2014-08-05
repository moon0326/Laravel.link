@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Categories</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                @include('partials.search')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-8">
                <div class="content-box">
                    <ul class="nav nav-list">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('tricks.browse.category', $category->slug) }}">
                                    {{ $category->name }}
                                    <span class="text-muted pull-right">{{$category->trick_count}}</span>
                                </a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
@stop
