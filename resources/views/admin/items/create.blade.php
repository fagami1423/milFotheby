@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Item</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                        @include('messages')
                      Add Item
                    </header>
                    <div class="panel-body">
                        <div class="col-lg-12 block-center">
                            {!! Form::open(['action'=>'\App\Http\Controllers\Admin\ItemController@store','method' => 'POST', 'enctype' => 'multipart/form-data','files' => true]) !!}
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
                                        {{Form::label('auction_date', 'Auction Date')}}
                                        {{Form::date('auction_date', '', ['class' => 'form-control'])}}
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
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </section>
@endsection