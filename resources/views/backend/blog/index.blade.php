@extends('layouts.backend.main')

@section('title', 'Laravel 5 Blog | Blog Index')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Blog <small style="font-size: 15px">Display All Blog Posts</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">All Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->	    <!-- Main content -->
	    <section class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-md-12">
	            <div class="card">
	              <!-- /.card-header -->
	              <div class="card-header">
	                <h3 class="card-title">Blog Posts</h3>
	                <div class="card-tools">
	                  <div class="input-group input-group-sm" style="width: 150px;">
	                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

	                    <div class="input-group-append">
	                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
				  	

	              <!-- /.card-header -->
	              <div class="card-body p-1">
	              	<div class="row">
	              		<div class="col-md-12" style="padding-left: 10px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; ">
			                			                	              			<div class="float-right" style="color: blue;">
	              					              					              				    	              				      	              				      	              				    	              					              				    	              					              				<a class="" href="?status=active">Active(12) </a>
	              			</div>
	              		</div>
	              	</div>

              <table class="table table-striped">
				  <tr>
				    <th width="10%">Action </th>
				    <th>Title</th>
				    <th width="20%">Author</th>
				    <th width="20%">Category</th>
				    <th width="20%">Date</th>
				  </tr>
				  @foreach($posts as $post)
					  <tr>
					      <td>
					      	<a href="{{ route('blog.edit', $post->id) }}" class="btn btn-sm btn-default"><i class="fa fa-edit"></i></a>
					      	<a href="{{ route('blog.destroy', $post->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
					      </td>
					  	  <td>{{ $post->title }}</td>
					      <td>{{ $post->author->name }}</td>
					      <td>{{ $post->category->title }}</td>
					      <td>
					      	<abbr title="{{ $post->dateFormatted(true) }}"> {{ $post->dateFormatted() }}</abbr> | 
					      	{!! $post->publicationLabel() !!}
					      </td>
					  	</tr>
				  @endforeach
				</table>
			</div>
				<div class="card-footer clearfix">
					<div class="pull-left">
						{{ $posts->render() }}
					</div>
					<div class="pull-right">
						<?php $postCount = $posts->count();?>
						<small style="padding-right: 25px;">{{ $postCount }} {{ str_plural('Item', $postCount)}}</small>
					</div>
				</div>		                    	                	              

        </div>
        <!-- /.card -->
      </div>

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
	  <!-- /.content-wrapper -->
@endsection