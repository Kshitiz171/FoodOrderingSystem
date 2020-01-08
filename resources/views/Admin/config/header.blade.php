<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{url('Admin/assets/vendor/fonts/circular-std/style.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{url('Admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">

<!--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 --> <link rel="stylesheet" href="{{url('Admin/assets/libs/css/dataTables.min.css')}}">

 <link rel="stylesheet" href="{{url('jquery.dataTables.min.css')}}">
 
    <title>Admin Dashboard || </title>
</head>
<body>
   
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>  
                        <a class="nav-link js-scroll-trigger" href="{{url('logout')}}">Logout</a>     

                         <form id="logout-form" action="" method="POST" style="display: none">
                         @csrf
                        </form> 
                    </ul>
                </div>
                </nav>
                </div>
<!-- 
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                </div> -->

            


        


