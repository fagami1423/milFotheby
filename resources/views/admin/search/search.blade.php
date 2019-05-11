
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i>Simple Search</h3>
                <div class="form-group">
                        {!! Form::open(['action'=>'\App\Http\Controllers\AdminController@searchItems','method' => 'GET']) !!}
                                <input type="text" name="item" place holder="name of an item">
                                {{Form::submit('Search', ['class'=>'btn btn-primary'])}}
                                    <a class="" href="{{Route('advance.search')}}">
                                        <i class="icon_search"></i>
                                        <span>Advance Search</span>
                        
                                    </a>
                        {!! Form::close() !!}
                       
              </li>
                </div>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Search</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Searched Items
                    </header>
                    <div class="table-responsive">
                            <table class="table">
                                    <thead>
                                            <tr>
                                                    <th>S.N</th>
                                                    <th>Name</th>
                                                    <th>Year Produced</th>
                                                    <th>Subject</th>
                                                    <th>Auction Date</th>
                                                    <th>Price</th>
                                                    <th>Description</th>                                             
                                            </tr>        
                                    </thead>                    
                                        <tbody>
                                                @php
                                                    $sn=1
                                                @endphp
                                                @if(isset($data))
                                                    @foreach($data as $dat)
                                                        <tr>
                                                            <td>{{ $sn++ }}</td>
                                                            <td>{{ $dat->name }}</td>
                                                            <td>{{ $dat->year_produced }}</td>
                                                            <td>{{ ($dat->auction_date) }}</td>
                                                            <td>{{ ($dat->subject) }}</td>
                                                            <td>{{($dat->estimated_price) }}</td>
                                                            <td>{{ $dat->description }}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="8">
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

