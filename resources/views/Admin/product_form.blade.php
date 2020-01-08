@include('Admin.config.header')
       
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Food Delivery</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                         <a href="{{route('product.create')}}" class="btn btn-success float-right">
                                         <i class="fa fa-backspace"></i> Back To Product
                                         </a>   
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
        
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Product {{isset($product_data) ? 'update' : "Add"}}</h5>
                                <div class="card-body">

                                    @if(isset($product_data))
                                    <form id="validationform" action="{{route('product.update',$product_data->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @else
                                   <form id="validationform" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                   @endif
                                   @csrf


                                   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file"  placeholder="Type something" class="form-control" name="image" value="{{ @$product_data->image }}" accept="image/*">
                                                @error('image')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  placeholder="Type something" class="form-control" name="name" value="{{ @$product_data->name }} {{old('name')}}" autocomplete="off">

                                                @error('name')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Category</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select class="form-control" name="cat_id" id="cat_id">
                                                    @if($cat_data)
                                                    @foreach($cat_data as $cat_info)
                                                    <option value="{{@$cat_info->id}}">{{$cat_info->category}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('cat_id')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  placeholder="Type something" class="form-control" name="price" value="{{ @$product_data->price }} {{old('name')}}" autocomplete="off">
                                                @error('price')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea class="form-control" name="description" value="{{ @$product_data->description }} {{old('name')}}" autocomplete="off">
                                                @error('description')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Type</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select class="form-control" name="type">
                                                   
                                                    <option value="veg">Vegetarian</option>
                                                    <option value="nonveg">Non-Vegetarian</option>
                                                </select>
                                            </div>
                                            @error('type')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                        </div>

                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
</div>

                        </div>
        
@include('Admin.config.footer')