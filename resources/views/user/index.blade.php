@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <a href = "{{route('article.create')}}" class="btn btn-primary">Tambahkan Artikel</a>
                <table class="table table-boredered">
                    <tr class="tr">
                        <th>No</th>
                        <th>judul</th>
                        <th>konten</th>
                        <th>penulis</th>
                        <th>aksi</th>
                    </tr>

                @forelse ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{str_limit($article->content,100) }}</td>
                        <td>{{$article->user->name}}</td>
                        <td>
                        <a href="{{route('article.edit', $article)}}" class="btn btn-primary">edit</a>
                        <button href="{{route('article.destroy',$article) }}" class="btn btn-danger" id="delete">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </div>

    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="" style="display:none">
    </form>
@endsection

@push ('extra-script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
        $('button#delete').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            // var title = $(this).data('title');

            swal({
                title: "Kamu yakin untuk hapus data ini?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('deleteForm').action = href;
                    document.getElementById('deleteForm').submit();
                    swal("Data dihapus!", {
                    icon: "success",
                    });
                }
            });
        });
      </script>

@endpush