@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'メーニュ', 'key' => 'リスト'])
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('menu.create')}}" class="btn btn-success float-right m-2">追加</a>
        </div>
        <div class="col-md-12">
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">メーニュ名</th>
                <th scope="col">アクション</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection