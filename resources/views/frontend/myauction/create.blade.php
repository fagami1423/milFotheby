
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
                <div class="col-lg-8 center-block">
                  <section class="panel">
                    <header class="panel-heading">
                      Add Item
                      @include('messages')
                    </header>
                    <div class="panel-body">
                            {!! Form::open(['action'=>'AuctionController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('name', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('cat_id', 'Category',['class'=>'col-sm-6 control-label'])}}
                                <select name="cat_id" class="form-control">
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}" class="form-control">{{$category->cat_name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                {{Form::label('artist', 'Artist',['class'=>'col-sm-6 control-label'])}}
                                {{Form::text('artist', '', ['class' => 'form-control'])}}
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
                                    {{Form::label('estimated_price', 'Estimated price')}}
                                    {{Form::text('estimated_price', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('property', 'Properties')}}
                                    {{Form::textarea('property', '', ['id'=>'ck-editor','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::file('art_image')}}
                            </div>
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