@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form class="" action="{{ route('article.store') }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title')}}">
                                @if ($errors->has('title'))
                                    <div class="form-control-feedback">{{ $errors->first('title') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Konten</label>
                                <textarea name="content" id="" cols="30" rows="5" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }} ">{{ old('content')}}</textarea>
                                @if ($errors->has('content'))
                                    <div class="form-control-feedback">{{ $errors->first('content') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <input type="submit" value="Tambahkan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
