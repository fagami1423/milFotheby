@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Photographs</h3>
                      <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                        <li><i class="icon_document_alt"></i>Photographs</li>
                        <li><i class="fa fa-file-text-o"></i>Edit</li>
                      </ol>
                    </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Edit a photograph item
                    </header>
                   
                    <div class="panel-body">
                            {!! Form::open(['action'=>['\App\Http\Controllers\Item\PhotographController@update',$model->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('name', $model->name, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('year_produced', 'Year of Production')}}
                                {{Form::text('year_produced', $model->year_produced, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('subject', 'Subject')}}
                                    {{Form::text('subject', $model->subject, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('description', 'Description')}}
                                    {{Form::textarea('description', $model->description, ['class' => 'form-control'])}}
                            </div>

                            <div class="form-group">
                                        {{Form::label('auction_date', 'Auction Date')}}
                                        {{Form::date('auction_date', $model->auction_date, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('estimated_price', 'Estimated price')}}
                                    {{Form::text('estimated_price', $model->estimated_price, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('type', 'Type')}}
                                {{Form::text('type', $model->type, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('dimension', 'Dimension')}}
                                    {{Form::text('dimension', $model->dimension, ['class' => 'form-control'])}}
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