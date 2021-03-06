@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'カテゴリー', 'key' => '追加'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('categories.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>カテゴリー名</label>
                            <input type="text" class="form-control" name="name" placeholder="カテゴリーを入力ください">
                        </div>
                        <div class="form-group">
                            <label>カテゴリーを選択ください</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">親カテゴリー</option>
                            {!! $htmlOption !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection