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
                                         <a href="{{route('review.create')}}" class="btn btn-success float-right">
                                         <i class="fa fa-backspace"></i> Back To Review
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
                                <h5 class="card-header">Review {{isset($review_data) ? 'update' : "Add"}}</h5>
                                <div class="card-body">

                                    @if(isset($review_data))
                                    <form id="validationform" action="{{route('review.update',$review_data->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @else
                                   <form id="validationform" action="{{route('review.store')}}" method="post" enctype="multipart/form-data">
                                   @endif
                                   @csrf


                                   <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file"  placeholder="Type something" class="form-control" name="image" value="{{ @$review_data->image }} {{old('image')}}" accept="image/*">
                                                @error('image')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  placeholder="Type something" class="form-control" name="name" value="{{ @$review_data->name }} {{old('name')}}" autocomplete="off">

                                                @error('name')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea class="form-control" name="description" value="{{ @$review_data->description }} {{old('description')}}" >
                                                @error('description')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                        </textarea>
                                    </div>
                                </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Position</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  placeholder="Type something" class="form-control" name="position" value="{{ @$review_data->position }} {{old('position')}}" autocomplete="off">
                                                @error('position')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
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