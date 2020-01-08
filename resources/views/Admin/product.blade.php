@include('Admin.config.header')
@include('Admin.config.sidebar')   

        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-12">
                            @include('Admin.config.notify')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">     
                                         <h1 class="h3 mb-4 text-gray-800">
                                         Product List
                                         <a href="{{route('product.store')}}" class="btn btn-success float-right">
                                         <i class="fa fa-plus"></i> Add Product
                                         </a>
                                         </h1>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Images</th>
                                                <th>Name</th>
                                                <th>category</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @if(isset($product_list))
                                @foreach($product_list as $key=>$product_info)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td><img src="{{asset('uploads/'.$product_info->image)}}" alt="" style="max-width:150px" class="img img-responsive img-thumbnail"> </td>
                                    <td>{{$product_info->name}}</td>
                                    <td>{{$product_info->cat_id}}</td>
                                    <td>{{$product_info->type}}</td>
                                    <td>{{$product_info->price}}</td>
                                    <td>
                                        <a href="{{route('product.edit',$product_info->id)}}" class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a> 
                                        / 
                                        
                                        <form  onsubmit="return confirm('Are you sure you want to delete?')" action="{{route('product.destroy', $product_info->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-link"><i class="fas fa-trash-alt"></i></button>
                                        </form>

                                    </td>
                                </tr>

                                @endforeach
                             @endif
                                            </tr>     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</div>

                        </div>


        
           
@include('Admin.config.footer')