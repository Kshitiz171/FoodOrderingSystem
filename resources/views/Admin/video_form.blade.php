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
                                           <a href="{{route('video.create')}}" class="btn btn-success float-right">
                                         <i class="fa fa-backspace"></i> Back To Video
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
                                <h5 class="card-header">Video {{isset($video_data) ? 'update' : "Add"}}</h5>
                                <div class="card-body">

                                    @if(isset($video_data))
                                    <form id="validationform" action="{{route('video.update',$video_data->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @else
                                   <form id="validationform" action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
                                   @endif
                                   @csrf
            
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Video Link</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Type something" class="form-control" name="link" value="{{ @$video_data->video }} {{old('link')}}" autocomplete="off">
                                                @error('link')
                                                <span class="alert-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Video Title</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Type something" class="form-control" name="title" value="{{ @$video_data->video }} {{old('title')}}" autocomplete="off">
                                                @error('title')
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