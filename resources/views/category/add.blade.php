@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'カテゴリー', 'key' => '追加'])
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label>カテゴリー名</label>
                            <input type="email" class="form-control" placeholder="カテゴリーを入力ください">
                        </div>
                        <div class="form-group">
                            <label>カテゴリーを選択ください</label>
                            <select class="form-control">
                                <option value="0">親カテゴリー</option>
                            {!! $htmlOption !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- /.col-md-6 -->
                </div>


                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection
<!-- Content Header (Page header) -->