@extends('layout.admin')

@section('title')
<title>Home Page</title>
@endsection


@section('content')
<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'ホーム', 'key' => 'ホーム'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-md-12">
          Home Page
        </div>
        <!-- /.col-md-6 -->

        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

@endsection
<!-- Content Header (Page header) -->