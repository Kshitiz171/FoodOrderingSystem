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
                                         Slider List
                                         <a href="{{route('slider.store')}}" class="btn btn-success float-right">
                                         <i class="fa fa-plus"></i> Add Slider
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @if(isset($slider_list))
                                @foreach($slider_list as $key=>$slider_info)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td><img src="{{asset('uploads/'.$slider_info->image)}}" alt="" style="max-width:150px" class="img img-responsive img-thumbnail"> </td>
                                    <td>
                                        <a href="{{route('slider.edit',$slider_info->id)}}" class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a> 
                                        / 
                                        
                                        <form onsubmit="return confirm('Are you sure you want to delete?')" action="{{route('slider.destroy', $slider_info->id)}}" method="post">
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