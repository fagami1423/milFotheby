
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
          <div class="col-lg-8">
              <section class="panel">
                <header class="panel-heading">
                  Items
                  @include('messages')
                  <a class="pull-right" href='{{route("auction.create")}}'>
                        <button class="theme-btn"><i class="fa fa-plus"></i> Add</button>
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
                                                        <td><a href="/auction/{{$result->id}}/show"><img src="/storage/images/{{$result->art_image}}" alt="no image" height=50 width=50></a></td>
                                                        <td>{{ $result->name }}</td>
                                                        <td>{{ $result->artist }}</td>
                                                        <td>{{ $result->subject }}</td>
                                                        <td>{{ $result->year_produced }}</td>
                                                        <td>{{ $result->estimated_price }}</td>
                                                        
                                                        <td>
                                                            <a href="{{route('auction.edit',['id'=>$result->id])}}"
                                                               class="btn btn-primary">Edit</a>
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

      
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  
   
@endsection