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
                    <li><i class="fa fa-file-text-o"></i>Add</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Add a drawing item
                    </header>
                    <div class="panel-body">
                            {!! Form::open(['action'=>'\App\Http\Controllers\Item\DrawingController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('name', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('year_produced', 'Year of Production')}}
                                {{Form::text('year_produced', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('subject', 'Subject')}}
                                    {{Form::text('subject', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('description', 'Description')}}
                                    {{Form::textarea('description', '', ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                        {{Form::label('auction_date', 'Auction Date')}}
                                        {{Form::date('auction_date', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('estimated_price', 'Estimated price')}}
                                    {{Form::text('estimated_price', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('medium', 'Medium Used')}}
                                    {{Form::text('medium', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('frame', 'Framed')}}
                                    {{Form::text('frame', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('dimension', 'Dimension')}}
                                    {{Form::text('dimension', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::file('cover_image')}}
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