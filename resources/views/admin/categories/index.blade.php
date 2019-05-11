
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Categories</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Categories</li>
                    <li><i class="fa fa-file-text-o"></i>Index</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Categories
                      @include('messages')
                      <a class="pull-right" data-toggle="collapse" href="#collapseForm" role="button" aria-expanded="false" aria-controls="collapseForm">
                          <button class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                        </a>
                        <div class="form-responsive" id="collapseForm">
                            {!! Form::open(['action'=>'\App\Http\Controllers\Admin\CategoryController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('cat_name', 'Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('cat_name', '', ['class' => 'form-control'])}}
                            </div>
    
                           
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                         
                        </div>
                       
                     
                    </header>
                    
                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th>S.N</th>
                                                  <th>Category</th>
                                                  <th>Action</th>                                               
                                                </tr>
                                            </thead>
                                               
                                            <tbody>
                                                @php
                                                    $sn=1
                                                @endphp
                                                @if($results->count())
                                                    @foreach($results as $result)
                                                        <tr>
                                                            <td>{{ $sn++ }}</td>
                                                            <td>{{ $result->cat_name }}</td>
                                                            <td>
                                                                <a href="{{route('category.edit',['id'=>$result->id])}}"
                                                                   class="btn btn-primary">Edit</a>
                                                                <a href="{{route('category.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
                                                            </td>
                                        
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="3">
                                                            <div class="alert alert-warning text-center">
                                                                NO DATA FOUND.
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                                </tbody>
            
                            </table>
                        </div>
                  </section>
                </div>
              </div>
            </section>
          </section>
@endsection