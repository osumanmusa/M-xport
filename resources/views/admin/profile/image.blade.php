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
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Profile Update</h4>
                                                            <div class="nk-block-des">
                                                                <p class="text-danger">NB: Only images are accepted.</p>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                    
                                                    <img src="{{asset('assets/images/profiles/'.Auth::user()->image)}}" style="  border-radius: 8px;padding: 5px;height: 300px;" alt="">

                                                    <form class="needs-validation" action="{{url('/admin/update-photo/'. $user->id)}}" method="post" enctype="multipart/form-data">
                                                             @csrf
                                                        <div class="data-item " data-toggle="modal" data-target="#profile-edit">
                                                            <div class="form-row mb-3">
                                                                 <label>Profile Picture</label>
                                                                <div class="input-group">
                                                                 <input type="file" class="form-control" aria-label="comment" name="image" >
                                                                </div>
                                                            </div>

                                                            
                                                        </div><!-- data-item -->

                                                        <div class="data-item " data-toggle="modal" data-target="#profile-edit">
                                                            <div class="form-row mb-3">
                                                                 
                                                                <div class="input-group">
                                                               <button class="btn btn-primary" type="submit">Submit</button>
                                                                </div>
                                                            </div>

                                                            
                                                        </div><!-- data-item -->
                                                        
                                                    </form>
                                                      
                                                    </div><!-- data-list -->
                                                    
                                                </div><!-- .nk-block -->
                                            </div>
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                        </div><!-- .user-card -->
                                                    </div><!-- .card-inner -->
                                                 
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->


                        


        </div>
 <!-- wrap @e -->






@endsection



