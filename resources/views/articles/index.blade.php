@extends($layout)

@section('content')
    @include('shared.alert')

    <h1>Articles</h1>
    {!! link_to_route('articles.create', 'New Article', null, [
        'class' => 'btn btn-primary btn-lg',
        'data-remote' => 'true' ]) !!}
        <table class="table">
        <tr>
            <th>Edit</th>
            <th>Delete</th>
            <th>Recommend</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{!! link_to_route('articles.edit', 'Edit', $article->id, ['class' => 'btn btn-default']) !!}</td>
                <td>
                    <form id="myform" class="delete-aricle col-md-12" method="POST" action="{{route('articles.destroy', ['article'=>$article->id]) }}">
                <input type="hidden" name="_method" value="delete">                    
                    {{ csrf_field() }}                            
                    <div class="form-group">
                        <button type="submit" data-aricle-id="{{$article->id}}"
                        class="submitdel btn btn-warning"
                        >Delete</button>
                    </div>                    
            </form>
                </td>
                <td>{!! link_to_route('articles.recommendations.create', 'Recommend', $article->id) !!}</td>
                <td>{!! link_to_route('articles.show', $article->title, $article->id) !!}</td>
                <td>{!! $article->author->name !!}</td>
            </tr>
        @endforeach
    </table>

@endsection
