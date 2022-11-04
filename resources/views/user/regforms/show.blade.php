@extends('user.layouts.app')

  

@section('content')

    
@include('user.include.sidebar') 

 <!-- wrap @s -->
        <div class="nk-wrap ">
                
            @include('user.include.header')


           <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title page-title">Sales Prime Properties</h4>
                                            <div class="nk-block-des text-soft">
                                                <p>Create Import & Delete Records</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->




                                    <div class="nk-block col-lg-12 ">

                                        <div class="card card-bordered card-preview">

                                            <div class="card-inner">
                            <div class="card">
                                <div class="card-body">
                                     <form class="needs-validation" >
                                              
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name  : <span >{{$res->name}}</span></label>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Company : <span >{{$res->company}}</span></label>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Role : <span >{{$res->role}}</span></label>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email  : <span >{{$res->email}}</span></label>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Mobile  : <span >{{$res->mobile}}</span></label>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Whatsapp Number  : <span >{{$res->whatsapp}}</span></label>
                                        </div>
                                    </div>
                              
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Date Commencing : <span >{{$res->date_commencing}}</span></label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Gender : <span >{{$res->gender}}</span></label>
                                    </div>
                                </div>
                                
                            </form>
                                </div>
                            </div>
                                
                                              
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->








                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->


                        



        </div>
 <!-- wrap @e -->




  <!-- END: Content-->

</script>
@endsection
