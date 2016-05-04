@extends($layout)

@section('content')
<div>
    <h1>{{ $author->name }}</h1>
    <div>{{ $author->email }}</div>
</div>
{!! link_to_route('authors.index', 'Authors') !!}
@endsection
