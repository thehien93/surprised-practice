@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'カテゴリー', 'key' => 'リスト'])
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">追加</a>
        </div>
        <div class="col-md-12">
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">カテゴリー名</th>
                <th scope="col">アクション</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>
                  <a href="{{ route('categories.edit', ['id' => $category->id])}}" class="btn btn-default">編集</a>
                  <a href="{{ route('categories.delete', ['id' => $category->id])}}" class="btn btn-danger">削除</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
        {{ $category->links}}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection