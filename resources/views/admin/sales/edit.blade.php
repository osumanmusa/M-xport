@extends('admin.layouts.app')

  

@section('content')

    
@include('admin.include.sidebar') 

 <!-- wrap @s -->
        <div class="nk-wrap ">
                
            @include('admin.include.header')


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
                                                        <li class="nk-block-tools-opt"><a href="/admin/create-primevending" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
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
                                     <form class="needs-validation" action="{{url('/admin/update-regforms/'.$edforms->id)}}" method="post"  novalidate>
                                               @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name"  value="{{$edforms->name}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Company<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="company"  value="{{$edforms->company}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Role<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="role" value="{{$edforms->role}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email"  value="{{$edforms->email}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Mobile <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="mobile" placeholder="024.......234" class="form-control" id="validationCustom03 " value="{{$edforms->mobile}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Whatsapp Number <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="whatsapp" placeholder="024.......234" class="form-control" id="validationCustom03 "  value="{{$edforms->whatsapp}}">
                                            <div class="valid-feedback">
                                            Looks good!
                                        </div> 
                                        </div>
                                    </div>
                              
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Date Commencing<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="date" name="date_commencing" class="form-control" id="validationCustomUsername"  placeholder="Start Date" aria-describedby="inputGroupPrepend"  value="{{$edforms->date_commencing}}">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Gender<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                          <select name="gender" class="form-control form-select" id="validationCustom01" value="{{$edforms->gender}}">
                                              <option>Select Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>  
                                            </select>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
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
