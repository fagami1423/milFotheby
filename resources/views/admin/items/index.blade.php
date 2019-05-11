
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Items</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Items
                      @include('messages')
                      <a class="pull-right" href='{{route("item.create")}}'>
                            <button class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                      </a>
                    </header>
                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th>Item</th>
                                                  <th>Name</th>
                                                  <th>Artist</th>
                                                  <th>Subject</th>
                                                  <th>Year Produced</th>
                                                  <th>Auction Date</th>
                                                  <th>Price</th>
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
                                                       
                                                        <td><img src="/storage/images/{{$result->art_image}}" alt="no image" height=50 width=50></td>
                                                            <td>{{ $result->name }}</td>
                                                            <td>{{ $result->artist }}</td>
                                                            <td>{{ $result->subject }}</td>
                                                            <td>{{ $result->year_produced }}</td>
                                                            <td>{{ $result->auction_date }}</td>
                                                            <td>{{ $result->estimated_price }}</td>
                                                            
                                                            <td>
                                                                <a href="{{route('item.edit',['id'=>$result->id])}}"
                                                                   class="btn btn-success">Edit</a>
                                                                <a href="{{route('item.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
                                                            </td>
                                        
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