
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Clients</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Clients</li>
                    <li><i class="fa fa-file-text-o"></i>Index</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Clients
                      
                    
                    </header>
                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th>S.N</th>
                                                  <th>Name</th>
                                                  <th>Contact</th>
                                                  <th>Email</th>
                                                  <th>Client Status</th>
        
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
                                                        <td>{{ $result->title }}.{{$result->firstname}} {{$result->surname}}</td>
                                                            <td>{{ $result->contact }}</td>
                                                            <td>{{ $result->email }}</td>
                                                            <td>{{ $result->client_status }}</td>
                                                            
                                                          
                                                            
                                                            <td>
                                                                <a href="{{route('client.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
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