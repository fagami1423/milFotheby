@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Drawings</h3>
                 
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Edit a drawing item
                      @include('messages')
                    </header>
                    <div class="panel-body">
                            {!! Form::open(['action'=>['\App\Http\Controllers\Admin\CategoryController@update',$model->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('cat_name', 'Category Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('cat_name', $model->cat_name, ['class' => 'form-control'])}}
                            </div>
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </section>
@endsection