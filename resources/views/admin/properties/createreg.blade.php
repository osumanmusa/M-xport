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
                                <div class="card-body">
                                    <form class="form" action="{{route('admin.primevending.store')}}" method="post" enctype="multipart/form-data" >
                                               @csrf
                                        <input type="text" name="client_status" value="has property" hidden>

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column"> Company / Individual</label>
                                                    <select name="client_type" class="form-control form-select" id="client_type" required>
                                                    <option>Select </option>
                                                    <option value="individual">Individual</option>
                                                    <option value="company">Company</option>  
                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="last-name-column">Sales / Rent</label>
                                                    <select name="sale_rent" class="form-control form-select" id="sale_rent" required>
                                                    <option>Select </option>
                                                    <option value="for sale">Buy</option>
                                                    <option value="rent">Rent</option>  
                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="city-column">Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="name" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Email</label>
                                                    <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" id="contact_person">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Contact Person</label>
                                                    <input type="text" name="contact_person" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Company Mobile</label>
                                                    <input type="tel" id="show_field" name="mobile" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Whatsapp Number</label>
                                                    <input type="tel" id="show_field" name="whatsapp" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12" id="prop_date">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Property Date</label>
                                                    <input type="date" name="date" class="form-control" id="prop_date"  placeholder="Start Date" aria-describedby="inputGroupPrepend" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Property Type</label>
                                                    <select name="property_type" class="form-control form-select" id="validationCustom01" required>
                                                    <option>Select Property Type</option>
                                                    <option value="Male">Apartment</option>
                                                    <option value="Female">Apartment</option>  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Client Location</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="c_location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Property Location</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="p_location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Payment Plan</label>
                                                     <select name="p_plan" class="form-control form-select" id="validationCustom01" required>
                                                        <option>Select Plan</option>
                                                        <option value="plan 1">Plan 1</option>
                                                        <option value="plan 2">Plan 2</option>  
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="company-column">Property Details</label>
                                                      <textarea class="form-control" id="validationCustom01" name="p_details" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-column">Price or Value</label>
                                                   <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="price" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1" >Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
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


                        
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
      </div>
          <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
       
      <div class="modal-body">
     
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">import</button>
      </div>
       </form>
    </div>
  </div>
</div>


        </div>
 <!-- wrap @e -->




  <!-- END: Content-->
<script >
    
$(document).ready(function(){
    
$('#contact_person').hide();
$('#prop_date').hide();

$('#client_type').on('change', function() {
    if (this.value == "company") {
        $('#contact_person').show(500);
    } else {
        $('#contact_person').hide(300);
    }

});
$('#sale_rent').on('change', function() {
    if (this.value == "for sale") {
        $('#prop_date').show(500);
    } else {
        $('#prop_date').hide(300);
    }

});


});
</script>
@endsection


