
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Requested ITems</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Requested ITems</li>
                    <li><i class="fa fa-file-text-o"></i>Index</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Requested ITems
                      @include('messages')
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
                                                  {{-- <th>Approval</th> --}}
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
                                                        <td><img src="/storage/images/{{$result->art_image}}" alt="noimage" height="50px" width="50px"></td>
                                                            <td>{{ $result->name }}</td>
                                                            <td>{{ $result->artist }}</td>
                                                            <td>{{ $result->subject }}</td>
                                                            <td>{{ $result->year_produced }}</td>
                                                            <td>{{ $result->estimated_price }}</td>
                                                            {{-- <td>
                                                              {!! Form::open(['action'=>['\App\Http\Controllers\Admin\RequestItemController@updateApprove',$result->id],'method'=>'POST','id'=>'approvalForm']) !!}
                                                              {{Form::hidden('_method','PUT')}}  
                                                              {{Form::submit('Approve', ['class'=>'btn btn primary','id'=>'approve'])}}
                                                              {!! Form::close() !!}
                                                            </td> --}}
                                                            <td>
                                                               
                                                                <a href="{{route('requestItem.edit',['id'=>$result->id])}}"
                                                                   class="btn btn-primary">Add Auction Date</a>
                                                                <a href="{{route('requestItem.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
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
          <script>
              $(document).ready(function () {
                $("#approvalForm").submit(function (e) {
                    e.preventDefault();
                    $("#approve").attr("value", 'Approved');
                    $("#approve").attr("disable", true);
                    return true;
  
                });
              });
            </script>
@endsection