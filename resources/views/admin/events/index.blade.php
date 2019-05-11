
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Events</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Events</li>
                    <li><i class="fa fa-file-text-o"></i>Index</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Events
                      @include('messages')
                      <a class="pull-right" href='{{route("event.create")}}'>
                            <button class="theme-btn"><i class="fa fa-plus"></i> Add</button>
                        </a>
                    </header>
                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th>S.N</th>
                                                  <th>Lot Number</th>
                                                  <th>Location</th>
                                                  <th>Date</th>
                                                  <th>Start time</th>
                                                  <th>End_time</th>
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
                                                            <td>{{ $result->item_id }}</td>
                                                            <td>{{ $result->location }}</td>
                                                            <td>{{ $result->event_date }}</td>
                                                            <td>{{ $result->start_time }}</td>
                                                            <td>{{ $result->end_time }}</td>
                                                            <td>
                                                                <a href="{{route('event.edit',['id'=>$result->id])}}"
                                                                   class="btn btn-primary">Edit</a>
                                                                <a href="{{route('event.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
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