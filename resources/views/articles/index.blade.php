@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <table class="table table-boredered">
                    <tr class="tr">
                        <th>No</th>
                        <th>judul</th>
                        <th>konten</th>
                        <th>aksi</th>
                    </tr>

                    @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->content}}</td>
                        <td><a href="{{route('article.edit', $article)}}" class="btn btn-primary">edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
