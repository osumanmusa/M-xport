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
                                            <h3 class="nk-block-title page-title">Maport</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to the MGA Database Platform</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Export</span> Data</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="/user/candidates-create" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                
                                                <div class="col-lg-4 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Training (General) </h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end  g-4 mb-2">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{$countregforms}}</span>
                                                                            <span class="sub-title"><span class="change down text-success"><em class="icon ni ni-arrow-long-up"></em>100%</span>of the total</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck " >
                                                                            
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <rect x="5" y="9" width="70" height="51.71" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <path d="M15,63.7V25.91a7,7,0,0,1,7-7H78a7,7,0,0,1,7,7V63.7a7,7,0,0,1-7,7H31L15,81Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path d="M63,51.72v4.39a2.94,2.94,0,0,1-3,2.94h-.28A29.49,29.49,0,0,1,47,54.54,29.26,29.26,0,0,1,33.58,33.07a2.93,2.93,0,0,1,2.68-3.17l.27,0H41a3,3,0,0,1,3,3.27,3.75,3.75,0,0,0,.63,2.65,2.9,2.9,0,0,1-.27,3.8l-1.88,1.86a23.51,23.51,0,0,0,8.87,8.78l1.88-1.86a3,3,0,0,1,3.15-.65,19.64,19.64,0,0,0,4.13,1A2.93,2.93,0,0,1,63,51.72Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><text transform="translate(50.23 41.17) scale(1.01 1)" font-size="14.07" fill="#9cabff" font-family="Nunito-Bold, Nunito" font-weight="700" letter-spacing="-0.05em">24</text></svg>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .col -->

                                                <div class="col-lg-4 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Sales & Marketing </h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end  g-4 mb-2">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{$countsales}}</span>
                                                                            <span class="sub-title"><span class="change down text-success"><em class="icon ni ni-arrow-long-up"></em>100%</span>of the total</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck " >
                                                                          
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <path d="M64.77,26.89,34.1,48,4.5,26.89,32.84,7.4a2.26,2.26,0,0,1,2.53,0Z" fill="#fff"></path>
                                                        <path d="M4.42,26H64.56A1.45,1.45,0,0,1,66,27.44V60.58A1.43,1.43,0,0,1,64.58,62H4.44A1.45,1.45,0,0,1,3,60.56V27.42A1.43,1.43,0,0,1,4.42,26Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path d="M18.51,36.11,28.66,16.77,45.6,25.49,37,41.91,35.1,40.79a1.39,1.39,0,0,0-1.55,0l-4.34,2.82Z" fill="#c4cefe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path d="M26.52,41.7l3.33-14s18.24,4,18.7,4.35l-1.48,6.25-7.76,5.19-5.09-3.11-5,3.23Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <line x1="32.47" y1="32.04" x2="42.98" y2="34.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="31.64" y1="35.5" x2="42.16" y2="37.96" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="30.82" y1="38.96" x2="41.34" y2="41.41" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="30.17" y1="41.73" x2="40.68" y2="44.18" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="29.51" y1="44.5" x2="35.08" y2="45.8" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <path d="M64.64,26.43,34.1,47,4.64,26.43l28.21-19a2.29,2.29,0,0,1,2.52,0Z" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path d="M65.72,61.48,35.71,41A2.31,2.31,0,0,0,33,40.92L3.71,61.36" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <path d="M66.89,82.72,45.69,70.18A2,2,0,0,1,45,67.45L62.07,39.13a2,2,0,0,1,2.75-.69L86,51a2,2,0,0,1,.7,2.72L69.64,82A2,2,0,0,1,66.89,82.72Z" fill="#fff"></path>
                                                        <path d="M66.89,82.72,45.69,70.18A2,2,0,0,1,45,67.45L62.07,39.13a2,2,0,0,1,2.75-.69L86,51a2,2,0,0,1,.7,2.72L69.64,82A2,2,0,0,1,66.89,82.72Z" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <ellipse cx="72.6" cy="48.73" rx="1.44" ry="1.42" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" stroke-width="2"></ellipse>
                                                        <path d="M61.92,67.69l-8.41-5a1,1,0,0,1-.34-1.36l.31-.52a1,1,0,0,1,1.37-.34l8.41,5a1,1,0,0,1,.35,1.36l-.31.51A1,1,0,0,1,61.92,67.69Z" fill="#9cabff"></path>
                                                        <line x1="77.65" y1="61.3" x2="59.79" y2="50.73" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="76.21" y1="63.69" x2="58.34" y2="53.13" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="74.76" y1="66.09" x2="56.9" y2="55.52" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <line x1="73.31" y1="68.49" x2="55.45" y2="57.92" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <polyline points="68.01 52.34 61.48 48.47 61.48 48.47" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></polyline>
                                                        <line x1="67.67" y1="77.86" x2="49.8" y2="67.29" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></line>
                                                        <polyline points="57.43 68.5 51.51 64.99 51.51 64.99" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .col -->

                                                <div class="col-lg-4 col-xxl-12">
                                                    <div class="row g-gs">
                                                       <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Insurance (STIB)</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end  g-4 mb-2">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{$countinsurance}}</span>
                                                                            <span class="sub-title"><span class="change down text-success"><em class="icon ni ni-arrow-long-up"></em>100%</span>of the total</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck " >
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <rect x="3" y="12.5" width="64" height="63.37" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <path d="M10,13.49H60a6,6,0,0,1,6,6v3.9a0,0,0,0,1,0,0H4a0,0,0,0,1,0,0v-3.9A6,6,0,0,1,10,13.49Z" fill="#e3e7fe"></path>
                                                        <rect x="3" y="23.39" width="64" height="1.98" fill="#6576ff"></rect>
                                                        <path d="M65.37,31.31H76.81A12.24,12.24,0,0,0,87,42S88.12,66.31,65.37,77.5C42.62,66.31,43.75,42,43.75,42A12.23,12.23,0,0,0,53.93,31.31Z" fill="#fff" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></path>
                                                        <path d="M66,72.62c19-9.05,18.1-28.71,18.1-28.71s-7.47-.94-8.52-8.64H66Z" fill="#e3e7fe"></path>
                                                        <polygon points="56 46.16 55 46.16 55 42.2 59 42.2 59 43.2 56 43.2 56 46.16" fill="#010863"></polygon>
                                                        <polygon points="59 65.97 55 65.97 55 62.01 56 62.01 56 64.98 59 64.98 59 65.97" fill="#010863"></polygon>
                                                        <polygon points="78 65.97 74 65.97 74 64.98 77 64.98 77 62.01 78 62.01 78 65.97" fill="#010863"></polygon>
                                                        <polygon points="78 46.16 77 46.16 77 43.2 74 43.2 74 42.2 78 42.2 78 46.16" fill="#010863"></polygon>
                                                        <path d="M70,51.12H62V48.86a3.74,3.74,0,0,1,3.17-3.57c2.56-.46,4.83,1.28,4.83,3.49Zm-7-1h6V48.56a2.78,2.78,0,0,0-2-2.63,3,3,0,0,0-4,2.64Z" fill="#6576ff"></path>
                                                        <path d="M58,57.28V50.13H74V57.5c0,4.62-4.65,8.26-9.86,7.17A7.63,7.63,0,0,1,58,57.28Z" fill="#e5effe"></path>
                                                        <path d="M59,51.12v6.7A7,7,0,0,0,73,58V51.12Z" fill="#6576ff"></path>
                                                        <ellipse cx="66" cy="55.08" rx="2" ry="1.98" fill="#fff"></ellipse>
                                                        <polygon points="68.91 62.01 63.84 62.01 65.18 56.07 67.57 56.07 68.91 62.01" fill="#fff"></polygon>
                                                        <path d="M72,51.12H60V48.66a5.41,5.41,0,0,1,4.06-5.14c4.13-1.14,7.94,1.54,7.94,5Zm-11-1H71V48.49A4.69,4.69,0,0,0,67.08,44c-3.23-.6-6.08,1.58-6.08,4.33Z" fill="#6576ff"></path>
                                                        <rect x="13" y="32.3" width="22" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect>
                                                        <rect x="12" y="45.17" width="22" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect>
                                                        <rect x="12" y="57.06" width="12" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect></svg>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->








                                    </div><!-- .row -->
                                </div><!-- .nk-block -->

                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                
                                                <div class="col-lg-4 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Sales (Prime Properties) </h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end  g-4 mb-2">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{$countprime}}</span>
                                                                            <span class="sub-title"><span class="change down text-success"><em class="icon ni ni-arrow-long-up"></em>100%</span>of the total</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck " >
                                                                          
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <rect x="14.5" y="5" width="56" height="70" rx="6" ry="6" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <path d="M69.38,85H29.62a6.06,6.06,0,0,1-6.12-6V21a6.06,6.06,0,0,1,6.12-6H59.16L75.5,30.47V79A6.06,6.06,0,0,1,69.38,85Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <polyline points="59.5 16 59.5 31 74.5 31.07" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                        <rect x="34.5" y="40" width="30" height="30" fill="#f5f7ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <line x1="34.5" y1="48" x2="63.5" y2="48" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="45.5" y1="70" x2="45.5" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="34.5" y1="56" x2="63.5" y2="56" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="34.5" y1="64" x2="63.5" y2="64" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line></svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .col -->

                                                <div class="col-lg-4 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Hr & Recruitment </h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end  g-4 mb-2">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{$countrecruit}}</span>
                                                                            <span class="sub-title"><span class="change down text-success"><em class="icon ni ni-arrow-long-up"></em>100%</span>of the total</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck " >
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></line>
                                                        <circle cx="53" cy="23" r="2" fill="#c4cefe"></circle>
                                                        <circle cx="60" cy="23" r="2" fill="#c4cefe"></circle>
                                                        <circle cx="67" cy="23" r="2" fill="#c4cefe"></circle>
                                                        <rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                        <circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                                        <path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                        <line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                        <line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line></svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .col -->

                                            </div><!-- .row -->
                                        </div><!-- .col -->








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
