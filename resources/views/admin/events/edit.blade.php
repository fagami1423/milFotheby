@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Drawings</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Drawings</li>
                    <li><i class="fa fa-file-text-o"></i>Edit</li>
                  </ol>
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
                            {!! Form::open(['action'=>['\App\Http\Controllers\Admin\EventController@update',$model->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('item', 'Item',['class'=>'col-sm-6 control-label'])}}
                                <select name="item" class="form-control">
                                @foreach($items as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {{Form::label('location', 'Location',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('location', $model->location, ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('event_date', 'Event Date',['class'=>'col-sm-6 control-label'])}}
                                {{Form::date('event_date', $model->event_date, ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('start_time', 'Event Date',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('start_time', $model->start_time, ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('end_time', 'Event Date',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('end_time', $model->end_time, ['class' => 'form-control'])}}
                            </div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </section>
@endsection