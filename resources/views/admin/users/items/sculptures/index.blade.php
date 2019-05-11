
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Sculptures</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Sculptures</li>
                    <li><i class="fa fa-file-text-o"></i>Index</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Sculptures Items
                      <a class="pull-right" href='{{route("sculpture.create")}}'>
                            <button class="theme-btn"><i class="fa fa-plus"></i> Add</button>
                        </a>
                    </header>
                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th>S.N</th>
                                                  <th>Name</th>
                                                  <th>Year Produced</th>
                                                  <th>Auction Date</th>
                                                  <th>Price</th>
                                                  <th>medium</th>
                                                  <th>Dimension</th>
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
                                                            <td>{{ $sn++ }}</td>
                                                            <td>{{ $result->name }}</td>
                                                            <td>{{ $result->year_produced }}</td>
                                                            <td>{{ ($result->auction_date) }}</td>
                                                            <td>{{($result->estimated_price) }}</td>
                                                            <td>{{ $result->medium }}</td>
                                                            <td>{{ $result->dimension }}</td>
                                                            <td>
                                                                <a href="{{route('sculpture.edit',['id'=>$result->id])}}"
                                                                   class="btn btn-primary">Edit</a>
                                                                <a href="{{route('sculpture.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
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