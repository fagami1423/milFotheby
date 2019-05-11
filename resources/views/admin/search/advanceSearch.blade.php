
@extends('admin.layout')
@section('content')
    @include('admin.partial.header')
    @include('admin.partial.sidebar')
    <section id="main-content">
            <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i>Advance Search</h3>
                  <section class="panel">
                        <header class="panel-heading">
                                <div class="form-group">    
                                        {!! Form::open(['action'=>'\App\Http\Controllers\AdminController@searchByCategories','method' => 'GET','class'=>'form-border']) !!}
                                                <label for="">Search by Categories</label>
                                                <select name="categories" id="">
                                                    <option value="">Categories</option>
                                                    <option value="drawings">drawings</option>
                                                    <option value="paintings">paintings</option>
                                                    <option value="photographs">photographs</option>
                                                    <option value="sculptures">sculptures</option>
                                                    <option value="carvings">carvings</option>
                                                </select>
                
                                                {{Form::submit('Search', ['class'=>'btn btn-primary'])}}
                                        {!! Form::close() !!}

                                        
                                        {!! Form::open(['action'=>'\App\Http\Controllers\AdminController@searchByPrice','method' => 'GET','class'=>'form-border']) !!}
                                                <label for="">Search by price</label>
                                                <input type="text" name="price">
                                                <label for="">Price Range</label>
                                                <input type="text" name='from'> to <input type="text" name="to">
                                                <label for="">Sort Price</label>
                                                <select name="price" id="">
                                                    <option value="">sort</option>
                                                    <option value="highest">Highest to lowest</option>
                                                    <option value="lowest">Lowest to highest</option>
                                                </select>
                
                                                {{Form::submit('Search', ['class'=>'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                       
                        </header>
                  </section>
                
              </li>
                </div>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                    <li><i class="icon_document_alt"></i>Advance Search</li>
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

