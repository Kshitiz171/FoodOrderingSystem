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
                                         Category List
                                         <a href="{{route('category.store')}}" class="btn btn-success float-right">
                                         <i class="fa fa-plus"></i> Add Category
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
                                                <th>Category</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @if(isset($category_list))
                                @foreach($category_list as $key=>$category_info)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$category_info->category}}</td>
                                    <td>
                                        <a href="{{route('category.edit',$category_info->id)}}" class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a> 
                                        / 
                                        
                                        <form  onsubmit="return confirm('Are you sure you want to delete?')" action="{{route('category.destroy', $category_info->id)}}" method="post">
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