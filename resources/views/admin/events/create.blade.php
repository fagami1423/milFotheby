@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Events</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Events</li>
                    <li><i class="fa fa-file-text-o"></i>Add</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Add Event
                      @include('messages')
                    </header>
                    <div class="panel-body">
                            {!! Form::open(['action'=>'\App\Http\Controllers\Admin\EventController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('item_id', 'Item',['class'=>'col-sm-6 control-label'])}}
                                <select name="item_id" class="form-control">
                                @foreach($items as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                {{Form::label('location', 'Location',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('location', '', ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('event_date', 'Event Date',['class'=>'col-sm-6 control-label'])}}
                                {{Form::date('event_date', '', ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('start_time', 'Starts at',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('start_time', '', ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('end_time', 'Ends at',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('end_time', '', ['class' => 'form-control'])}}
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