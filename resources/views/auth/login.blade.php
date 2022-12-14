<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('dash/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('dash/assets/css/theme.css')}}">

        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                               <a href="html/index.html" class="logo-link">

                            <img class="logo-light logo-img logo-img-lg"  src="{{asset('home/img/mnlogo.png')}}" alt="">

                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('home/img/mlogo.png')}}" alt="">
                                    </a>
                            </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the Dashboard panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form method="POST" action="{{ route('login') }}" class="form-validate is-alter" >
                                     @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email or Username</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" id="email-address" placeholder="Enter your email address or username"type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                        @if(Session::has('error_msg'))
                                            <span class="invalid-feedback" style="display: block;">
                                                <strong>{{Session::get('error_msg')}}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                             @if (Route::has('password.request'))
                                            <a class="link link-primary link-sm" tabindex="-1" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                            @endif

                                            
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input id="password" autocomplete="new-password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required id="password" placeholder="Enter your passcode"  name="password" >

                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">

                                        <div class="form-control-wrap ">
                                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> New on our platform? <a href="#">Contact Admin</a>
                                </div>

                            </div><!-- .nk-block -->

                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":false, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 994.91 1333.9"><defs><style>.cls-1,.cls-11{fill:#fff;}.cls-1,.cls-2{stroke:#d8baa3;}.cls-1,.cls-12,.cls-13,.cls-2,.cls-8{stroke-miterlimit:10;}.cls-1,.cls-12,.cls-2{stroke-width:6px;}.cls-12,.cls-13,.cls-2,.cls-8{fill:none;}.cls-3{fill:#b65a18;}.cls-4{fill:#642648;}.cls-5{fill:#c36f0b;}.cls-6{fill:#722d54;}.cls-7{fill:#3f4d90;}.cls-10,.cls-8{stroke:#fff;}.cls-8{stroke-width:4px;}.cls-10,.cls-9{fill:#f0e1d4;}.cls-10,.cls-11{stroke-linejoin:round;stroke-width:5px;}.cls-11{stroke:#3f4d79;}.cls-12,.cls-13{stroke:#722d54;}.cls-13{stroke-width:3px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="????????_1" data-name="???????? 1"><g id="_1" data-name="1"><g id="CHAIR"><rect class="cls-1" x="78.16" y="817.11" rx="39.62"/><path class="cls-2" d="M102.07,1322.74h0a2.42,2.42,0,0,1-2.45-2.71l59.62-423.68H353.52L104.23,1321.53A2.49,2.49,0,0,1,102.07,1322.74Z"/><path class="cls-2" d="M421.64,1322.74h0a2.4,2.4,0,0,0,2.43-2.74L354.52,896.35H160.24l259.28,425.22A2.49,2.49,0,0,0,421.64,1322.74Z"/></g><g id="WOMAN"><g id="LEGS"><g id="RIGHT_FOOT" data-name="RIGHT FOOT"><path class="cls-3" d="M486.07,1163.3c13.48,1.34,35.3,4,61.33,1.53-6.68,25.78-9.75,50.43-14.61,72.33-3.14,14.1,16,33.19,21.8,47a4.69,4.69,0,0,0-.45-.21c-26.54-4.23-62.08,20.87-58.42-18.31C499.23,1226.42,490.4,1197.65,486.07,1163.3Z"/><path id="SHOE" class="cls-4" d="M496.52,1236.8c-9.13,0-25.94,16.49-24.47,42.89a207,207,0,0,0,7.68,46h106.5c5-37.73-32.09-41.8-32.09-41.8-26.55-4.23-60.75,20.87-57.09-18.3Z"/></g><g id="LEFT_FOOT" data-name="LEFT FOOT"><path class="cls-5" d="M412.07,1164.3c13.48,1.34,42.3,3,68.33.53-6.68,25.78-10.61,72.33-10.61,72.33-3.14,14.1,16,33.19,21.8,47a4.69,4.69,0,0,0-.45-.21c-26.54-4.23-62.08,20.87-58.42-18.31C436.23,1226.42,412.07,1164.3,412.07,1164.3Z"/><path id="SHOE-2" data-name="SHOE" class="cls-6" d="M431.52,1236.8c-9.13,0-23.94,16.49-22.47,42.89a207,207,0,0,0,7.68,46h106.5c5-37.73-32.09-41.8-32.09-41.8-26.55-4.23-60.75,20.87-57.09-18.3Z"/></g><g id="LEGS-2" data-name="LEGS"><path class="cls-7" d="M198.07,595.93s-91.51,110.75-85,184.61,82.37,95.7,222,94.07c0,0,4.09,110.79,76.6,290,0,0,33.65,6.5,75,0,0,0,35,3.53,61-.17,0,0,55.44-362.35,48.7-399.1-8.93-48.7-185.4-92.63-231.08-103.18L327.1,595.93S250.42,605.67,198.07,595.93Z"/><path class="cls-8" d="M300.64,705S447,743.4,464.87,790.47s18.78,378.14,18.78,378.14"/></g></g><g id="BLOUSE"><path class="cls-9" d="M374.63,457.34s-5.68,79.13-47.9,138.78c0,0-69,11.77-129,0,0,0-59.45-62.52-76.49-130.28,0,0-56.61-114.82-31-134.3s89.33-53,89.33-53l129.61,6.36c16,9.72,50.11,25.61,84.2,43.46Z"/><circle class="cls-10" cx="269.6" cy="421.72" r="9.35"/><circle class="cls-10" cx="269.6" cy="459.56" r="9.35"/><circle class="cls-10" cx="269.6" cy="497.39" r="9.35"/></g><g id="RIGHT_HAND" data-name="RIGHT HAND"><path class="cls-9" d="M393.3,328.35c34.08,17.86,134.36,247.7,92.63,272-86.66,50.53-111.3-143-111.3-143Z"/><path class="cls-3" d="M449.47,607.52c11.7,5,41.89-4.21,75.44-26.19s-4.51-36.49-4.51-36.49-44.6-17.9-71.81-5S427.06,597.87,449.47,607.52Z"/><polygon class="cls-11" points="630.58 495.39 447.4 495.39 246.4 626.96 429.57 626.96 630.58 495.39"/><path class="cls-5" d="M562.85,549.67c0-4.78-30.38-32.9-42-22.28-4.87,4.44-5.15,42.57-4.7,49.45C517.57,598.74,562.6,574.19,562.85,549.67Z"/></g><g id="LEFT_HAND" data-name="LEFT HAND"><path class="cls-9" d="M90.16,331.54c-10.41,8.26-120.93,176.52-81.82,254C52.46,673,231.7,600.38,231.7,600.38s-22.74-7-8.13-36.22c0,0-74.16-39.46-133.81-27.69,0,0,46.26-76.7,51.13-106.73S127.5,301.92,90.16,331.54Z"/><line class="cls-12" x1="270.44" y1="512.96" x2="303.1" y2="585.91"/><g id="ARM"><path class="cls-5" d="M223.62,561.82s32.87-18.74,46-11.72c14.39,7.68,31.65,32,33.23,36.09s1.13,8.34.88,12.72-30,4.13-35.72,3.8-36.42,3.31-41.78-1.94C206.56,581.51,223.62,561.82,223.62,561.82Z"/><path class="cls-3" d="M268,602.71c5.76.33,32.06.66,35.41-2.46,6.65-6.17,2.84-15.39-.49-19-3.05-3.32-19.28-23.47-33.31-31.12,0,0,16.27,28.31-1.61,52.61"/></g></g><g id="HEAD"><g id="HAIR"><path class="cls-6" d="M213.93,67.77s-14.61-23.54,0-35.71S234.55.13,261,0c27.32-.13,38.22,21.17,50.73,19.07,17-2.85,28.92-8.33,50.51,3.06,17.28,9.12,18,43.31,35.52,41.58,13.94-1.37,29.42-.49,37.33,15,6,11.73-.4,43.42,8.52,51.94s30,11.3,31.66,33.27c2.2,29.69-28.8,34.06-20.7,57.63,10.66,31-4.38,50.46-30.84,54-18.61,2.47-51.31-25.2-63.3-6.09-10.23,16.29-31.66,23.54-58,13s-42.61-7.31-58.84-.41-36.12,16.63-49.51,4.86-29.55-12.1-47.38-4.73c-24.74,10.23-51.29-6.59-48-28.94,2.73-18.47-22.62-20.8-25.56-41.8-3.84-27.43,36.52-34.49,24.75-46.26S86.54,119,121.41,114.44c33.08-4.3,26-24.91,35.33-39C164.61,63.66,189.18,48.7,213.93,67.77Z"/><path class="cls-13" d="M83.72,158.72c-11-12.46-7.49-50.8,27.59-53.19,33.28-2.26,27.46-23.27,37.65-36.72C157.54,57.5,186.3,44,213.52,67.62"/></g><g id="NECK"><path class="cls-5" d="M218.65,168.93c-.25,21,1.06,78.91-39.16,109.6,0,0,72.22,36.27,88.52,116.62,0,0,11.47-84.69,41.09-110.26,0,0-35.1-19.9-27.39-116Z"/><path class="cls-3" d="M288.32,252.15c-5,4.52-10.64,7.1-16.76,7.1-25.34,0-50.57-38.6-53-79.87.08-4.06.08-7.6.12-10.45h63.06C278.57,208,282.52,234.49,288.32,252.15Z"/></g><path id="HEAD-2" data-name="HEAD" class="cls-5" d="M216.37,149.93c.28-10.56,4-65.74,48.69-63.71S317,133.29,313,169.41s-26,60.46-41.39,58.84S215.15,194.57,216.37,149.93Z"/></g></g></g></g></g></svg>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('dash/assets/js/bundle.js')}}"></script>
    <script src="{{asset('dash/assets/js/scripts.js')}}"></script>
   

</html>