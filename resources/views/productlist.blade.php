@extends("layouts.app")
@section("title","Mark List")
@section("content")
    <div class="row">
        @if (session('update'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('update') }} </strong>
  </div>
@endif
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product List</h4>
                </div>
                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>                            
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>                           
                        @if(count($productlist)>0)  
                            @php($sl=1)                          
                            @foreach($productlist as $product)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{ $product->name }}</a></td>
                                <td>{{ $product->price }}</td>  
                                <td><a href="/stripe/{{ $product->id }}"><button type="button" class="btn btn-primary"> Buy now</button></a></td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                        <td colspan="4">No Records</td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                    <div class="float-right">      
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
