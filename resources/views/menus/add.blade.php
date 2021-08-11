@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'メーニュ', 'key' => '追加'])
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('menu.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>メーニュ名</label>
                            <input type="text" class="form-control" name="name" placeholder="メーニュを入力ください">
                        </div>
                        <div class="form-group">
                            <label>カテゴリーを選択ください</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">親カテゴリー</option>
                            {!! $optionSelect !!}
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