@include('Admin.config.header')        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Food Delivery </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                           <a href="{{route('category.create')}}" class="btn btn-success float-right">
                                         <i class="fa fa-backspace"></i> Back To Category
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
                                <h5 class="card-header">Category {{isset($category_data) ? 'update' : "Add"}}</h5>
                                <div class="card-body">

                                    @if(isset($category_data))
                                    <form id="validationform" action="{{route('category.update',$category_data->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @else
                                   <form id="validationform" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                   @endif
                                   @csrf
            
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">category</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Type something" class="form-control" name="category" value="{{ @$category_data->category }} {{old('category')}}" autocomplete="off">
                                                
                                            </div>
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