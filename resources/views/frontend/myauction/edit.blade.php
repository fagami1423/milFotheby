
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
                <div class="col-lg-8 center">
                  <section class="panel">
                    <header class="panel-heading">
                      Item edit
                      @include('messages')
                    </header>
                    <div class="panel-body">
                            {!! Form::open(['action'=>['AuctionController@update',$model->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('name', $model->name, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('cat_id', 'Category',['class'=>'col-sm-6 control-label'])}}
                                <select name="cat_id" class="form-control">
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                {{Form::label('artist', 'Artist',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('artist', $model->name, ['class' => 'form-control'])}}
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
                                    {{Form::label('estimated_price', 'Estimated price')}}
                                    {{Form::text('estimated_price', $model->estimated_price, ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('property', 'Properties')}}
                                    {{Form::textarea('property', $model->property, ['id'=>'ck-editor','class' => 'form-control'])}}
                            </div>
                            
                            <div class="form-group">
                                {{Form::file('art_image')}}
                            </div>
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                  </section>
                </div>
              </div>
            </div>
            <!-- /container -->
    </div>
          
           
  @endsection