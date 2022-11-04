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
                                            <h4 class="nk-block-title page-title">Sales & Marketing</h4>
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
                                                        <li class="nk-block-tools-opt"><a href="/user/create-primevending" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
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
                                    <form class="form" action="{{route('user.sales.store')}}" method="post" enctype="multipart/form-data" >
                                               @csrf
                                        <input type="text" name="client_status" value="has property" hidden>

                                        <div class="row">
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Email</label>
                                                    <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Company</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="company" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" >
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Role</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="role" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Mobile</label>
                                                   <input type="tel" id="show_field" name="mobile" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                </div>
                                            </div> 
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Whatsapp Number</label>
                                                    <input type="tel" id="show_field" name="whatsapp" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary me-1" >Submit Form</button>
                                                </div>
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
