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
                                         Video List
                                         <a href="{{route('video.store')}}" class="btn btn-success float-right">
                                         <i class="fa fa-plus"></i> Add Video
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
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Title</th>
                                                <th>Video</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @if(isset($video_list))
                                @foreach($video_list as $key=>$video_info)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        <iframe width="160" height="115" src="{{$video_info->link}}" frameborder="0" allowfullscreen target="_blank"></iframe>
                                    </td>
                                    <td>{{$video_info->title}}</td>
                                    <td>
                                        <a href="{{route('video.edit',$video_info->id)}}" class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a> 
                                        / 
                                        
                                        <form onclick="return confirm('Are you sure you want to Delete?')" onsubmit="return confirm('Are you sure you want to delete?')" action="{{route('video.destroy', $video_info->id)}}" method="post">
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