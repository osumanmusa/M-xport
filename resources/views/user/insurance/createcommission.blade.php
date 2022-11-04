
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
                                    <form class="form" action="{{route('user.insurance.store')}}" method="post" enctype="multipart/form-data" >
                                               @csrf
                                        <input type="hidden" name="type" value="policing" />

                                        <div class="row">
                                           
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">Client Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" name="client_name" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Businnes Type</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Business Type" name="business_type" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" >
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Policy Number</label>
                                                    <input type="text" name="policy_number" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="row col-md-6 col-12 mb-1" >
                                                 <label class="form-label" for="email-id-column">Period Cover</label>
                                                <div class="row">
                                                   <div class="col-md-3 col-5">
                                                    <label class="form-label" for="email-id-column">From</label>
                                                    <input type="date" name="start_date" class="form-control"  aria-describedby="inputGroupPrepend" />
                                                </div>
                                                    <div class="col-md-3 col-5">

                                                    <label class="form-label" for="email-id-column">To</label>
                                                    <input type="date" name="end_date" class="form-control"   aria-describedby="inputGroupPrepend" />
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Vehicle Number</label>
                                                    <input type="text" id="show_field" name="vehicle_number" placeholder="Enter Vehicle Number" class="form-control" id="validationCustom03 " />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Make of Vehicle</label>
                                                    <input type="text" id="show_field" name="make_of_vehicle" placeholder="Make of Vehicle" class="form-control" id="validationCustom03 "/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" id="prop_date">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Color</label>
                                                    <input type="text" name="colour" class="form-control"  placeholder="colour" aria-describedby="inputGroupPrepend" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Premium</label>
                                                   <input type="text" id="show_field" name="premium" placeholder="Enter Premium" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Contact Person</label>
                                                    <input type="text" class="form-control"  placeholder="Contact Person" name="contact_person" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label class="form-label" for="company-column">Contact Number</label>
                                                <div class="mb-1">
                                                    
                                                    <input type="tel" id="phone" name="phone" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Insurance Company</label>
                                                     <select name="insurance_company" class="form-control form-select" id="validationCustom01" required>
                                                        <option>Select </option>
                                                        <option value="Enterprise Insurance Company Limited ">Enterprise Insurance Company Limited </option>
                                                        <option value="Allianz Insurance Company Ghana LTD">Allianz Insurance Company Ghana LTD</option>
                                                        <option value="Hollard Insurance Ghana Limited">Hollard Insurance Ghana Limited</option>
                                                        <option value="FIRST INSURANCE COMPANY LIMITED">FIRST INSURANCE COMPANY LIMITED</option>
                                                        <option value="Ghana Union Assurance Co. Ltd">Ghana Union Assurance Co. Ltd</option>
                                                        <option value="Phoenix Insurance Company Ltd">Phoenix Insurance Company Ltd</option>
                                                        <option value="Unique Insurance Company Ltd.">Unique Insurance Company Ltd.</option>
                                                        <option value="Star Assurance Company Limited">Star Assurance Company Limited</option>
                                                        <option value="Prime Insurance Company Limited">Prime Insurance Company Limited</option>
                                                        <option value="Prudential Life Insurance Head Office">Prudential Life Insurance Head Office</option>
                                                        <option value="Old Mutual Ghana – Head Office ( Life Insurance & Pensions Trust)">Old Mutual Ghana – Head Office ( Life Insurance & Pensions Trust)</option>
                                                        <option value="Ghana Life Insurance Company Ltd">Ghana Life Insurance Company Ltd</option>
                                                        <option value="Enterprise Insurance Company Ltd">Enterprise Insurance Company Ltd</option>
                                                        <option value="SUNU Assurances Ghana Limited">SUNU Assurances Ghana Limited</option>
                                                        <option value="Priority Insurance Company Limited">Priority Insurance Company Limited</option>
                                                        <option value="SIC Insurance Company">SIC Insurance Company</option>
                                                        <option value="Ghana Insurers Association (GIA)">Ghana Insurers Association (GIA)</option>
                                                        <option value="Donewell Insurance Company Limited">Donewell Insurance Company Limited</option>
                                                        <option value="Allianz Life Insurance Company Ghana Limited">Allianz Life Insurance Company Ghana Limited</option>
                                                        <option value="Vanguard Assurance Company Limited">Vanguard Assurance Company Limited</option>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Sum Insured</label>
                                                    <input type="text"  name="sum_insured"  class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email-id-column">STIB Sales Person</label>
                                                   <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="sales_person" required/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1" >Submit Form</button>
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

@extends('user.layouts.app')

  

@section('content')
        

   @include('user.include.header')

     @include('user.include.sidebar')

   <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Form Layouts</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Record</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('user.commission.store')}}" method="post" enctype="multipart/form-data" >
                                               @csrf
                                        <input type="hidden" name="type" value="commission" />

                                        <div class="row">
                                           
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">Client Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" name="client_name" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Businnes Type</label>
                                                    <input type="text" class="form-control" placeholder="Enter Business Type" name="business_type" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" >
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Policy Number</label>
                                                    <input type="text" name="policy_number" class="form-control"/>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Premium</label>
                                                   <input type="text" id="show_field" name="premium" placeholder="Enter Premium" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Insurance Company</label>
                                                     <select name="insurance_company" class="form-control form-select" id="validationCustom01" required>
                                                        <option>Select </option>
                                                        <option value="Enterprise Insurance Company Limited ">Enterprise Insurance Company Limited </option>
                                                        <option value="Allianz Insurance Company Ghana LTD">Allianz Insurance Company Ghana LTD</option>
                                                        <option value="Hollard Insurance Ghana Limited">Hollard Insurance Ghana Limited</option>
                                                        <option value="FIRST INSURANCE COMPANY LIMITED">FIRST INSURANCE COMPANY LIMITED</option>
                                                        <option value="Ghana Union Assurance Co. Ltd">Ghana Union Assurance Co. Ltd</option>
                                                        <option value="Phoenix Insurance Company Ltd">Phoenix Insurance Company Ltd</option>
                                                        <option value="Unique Insurance Company Ltd.">Unique Insurance Company Ltd.</option>
                                                        <option value="Star Assurance Company Limited">Star Assurance Company Limited</option>
                                                        <option value="Prime Insurance Company Limited">Prime Insurance Company Limited</option>
                                                        <option value="Prudential Life Insurance Head Office">Prudential Life Insurance Head Office</option>
                                                        <option value="Old Mutual Ghana – Head Office ( Life Insurance & Pensions Trust)">Old Mutual Ghana – Head Office ( Life Insurance & Pensions Trust)</option>
                                                        <option value="Ghana Life Insurance Company Ltd">Ghana Life Insurance Company Ltd</option>
                                                        <option value="Enterprise Insurance Company Ltd">Enterprise Insurance Company Ltd</option>
                                                        <option value="SUNU Assurances Ghana Limited">SUNU Assurances Ghana Limited</option>
                                                        <option value="Priority Insurance Company Limited">Priority Insurance Company Limited</option>
                                                        <option value="SIC Insurance Company">SIC Insurance Company</option>
                                                        <option value="Ghana Insurers Association (GIA)">Ghana Insurers Association (GIA)</option>
                                                        <option value="Donewell Insurance Company Limited">Donewell Insurance Company Limited</option>
                                                        <option value="Allianz Life Insurance Company Ghana Limited">Allianz Life Insurance Company Ghana Limited</option>
                                                        <option value="Vanguard Assurance Company Limited">Vanguard Assurance Company Limited</option>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Sum Insured</label>
                                                    <input type="text"  name="sum_insured"  class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" >
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Commission</label>
                                                    <input type="text" name="commission" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">STIB Sales Person</label>
                                                   <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="sales_person" required/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1" >Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection


