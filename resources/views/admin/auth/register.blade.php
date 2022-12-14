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
    <title>Registration | Dashboard Admin</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('dash/assets/css/dashlite.css?ver=2.9.1')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('dash/assets/css/theme.css?ver=2.9.1')}}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="{{asset('dash/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{asset('dash/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register</h5>
                                        <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                             <form method="POST" action="{{ route('admin.register') }}">
                                @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                     <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email or Username</label>
                                        <div class="form-control-wrap">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address " required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Enter your passcode" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Confirm Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>

                                            <input id="password" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit"  class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Already have an account ? <a href="admin/login"><strong>Sign in instead</strong></a>
                                </div>

                            </div><!-- .nk-block -->

                        </div><!-- nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":false, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 994.91 1333.9"><defs><style>.cls-1,.cls-13,.cls-15,.cls-2{fill:#fff;}.cls-1,.cls-15{stroke:#3f4d90;}.cls-1,.cls-10,.cls-4{stroke-linejoin:round;}.cls-1,.cls-10,.cls-15,.cls-4{stroke-width:5px;}.cls-14,.cls-2{stroke:#d8baa3;stroke-width:6px;}.cls-14,.cls-15,.cls-2{stroke-miterlimit:10;}.cls-3{fill:#ffb000;}.cls-10,.cls-14,.cls-4{fill:none;}.cls-10,.cls-4{stroke:#fff;}.cls-5{fill:#c36f0b;}.cls-6{fill:#3f4d79;}.cls-7{fill:#ffc033;}.cls-8{fill:#d8baa3;}.cls-9{fill:#f0e1d4;}.cls-10{stroke-linecap:round;}.cls-11{fill:#b65a18;}.cls-12{fill:#722d54;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="????????_1" data-name="???????? 1"><g id="_4" data-name="4"><g id="CHAIR"><rect class="cls-1" x="345.05" y="843.19" width="405.53" height="24.68"/><path class="cls-2" d="M803.79,790.2c0-226.72,112.59-351.48,112.59-351.48H581.7S469.11,563.48,469.11,790.2Z"/><path class="cls-2" d="M348.34,790.2H803.79a0,0,0,0,1,0,0v0a53,53,0,0,1-53,53H295.34a0,0,0,0,1,0,0v0a53,53,0,0,1,53-53Z"/><path class="cls-1" d="M746.39,1338h0a5.71,5.71,0,0,1-5.61-4.63L651.67,867.88h51.08l49.32,463.8A5.71,5.71,0,0,1,746.39,1338Z"/><path class="cls-1" d="M350.08,1338h0a5.71,5.71,0,0,0,5.61-4.63L444.8,867.88H393.73l-49.33,463.8A5.71,5.71,0,0,0,350.08,1338Z"/></g><g id="MAN"><g id="LEFT_HAND" data-name="LEFT HAND"><path class="cls-3" d="M250.79,580.62c137,33,205.64-4.18,218.08-26.86,0,0-6.85-42.58-1.79-108.59s-5.58-213.85-5.58-213.85c-30.19,11.61-74.37,30.19-87.52,68.89s-15.22,144.73-16,190.06c0,0-70.29,24.11-101.78,40.57a19,19,0,0,0-10,19.7Z"/><path class="cls-4" d="M386,490.27s-13.65-5.42-40.78.57"/><g id="LEFT_HAND-2" data-name="LEFT HAND"><path class="cls-5" d="M258.48,556.46a25.06,25.06,0,0,1-10.1,24.36l-1.57,1.11c-10.73,7.41-31.31,13.4-36.19,13.07s-34.88-5.88-34.88-5.88-1.07-4.09,3.32-9.48,36.55-1.11,24.79-12.94c-5.23-5.26-31.28,6.61-42.61,19.77s-16.71,2.73-16.71,2.73,10.85-24.38,14.72-28.79,29.75-23.14,47.24-26c8.34-1.36,20.06-.59,31.7,1.43a24.94,24.94,0,0,1,20.29,20.62Z"/></g></g><g id="LEGS"><path id="LEG" class="cls-5" d="M333.42,1294.82c11.06-2.5,26.35-7.86,34.87-19.15l4.84-26.11s-31.8,3.62-60.85.84l5.63,34.17A12.87,12.87,0,0,0,333.42,1294.82Z"/><g id="SHOE"><path class="cls-3" d="M204,1326.79c.17,1.94,3.67,11.2,3.67,11.2l178.87-6.06v-10c0-16.74-5.69-31.19-8.7-37.47-4.64-9.69-11.08-7.27-11.08-7.27s-17.49,17.1-37.11,17.1c-3.78,0-6.49-2-8.43-4.92a23.32,23.32,0,0,1-2.68-5.82,47.28,47.28,0,0,1-1.72-8.2,7.36,7.36,0,0,0-10.67-5.63c-7.7,4-17.05,12.82-42.09,26.34-1.25.68-2.55,1.37-3.89,2.08C229.72,1314.16,204.34,1308.2,204,1326.79Z"/><path class="cls-6" d="M224.13,1346.84c-5.18,0-11.5-2.34-14.89-6.14a21.28,21.28,0,0,1-4.65-18.15h.14a16.82,16.82,0,0,0,16.14,13.68l155.07-4.54c4.81,0,8.93-3.33,10.61-8v10.42c0,7.05-5.11,12.76-11.42,12.76Z"/><path class="cls-6" d="M257.33,1299.6a49.37,49.37,0,0,1,38.79,35.4l7.14-.25a56.38,56.38,0,0,0-36.77-40l-2.42,1.31c-1.25.68-2.55,1.37-3.89,2.08Q258.76,1298.91,257.33,1299.6Z"/><path class="cls-6" d="M239.64,1306.46v.93a46.81,46.81,0,0,1,42.84,28.07l7.42-.25a53.9,53.9,0,0,0-37.66-33.29A127.92,127.92,0,0,1,239.64,1306.46Z"/></g><path id="LEG-2" data-name="LEG" class="cls-5" d="M550.74,1294.82c11.06-2.5,25.34-7.86,33.86-19.15l2.85-28.28s-29.83,2.61-58.88-.18l6.67,37.36A12.86,12.86,0,0,0,550.74,1294.82Z"/><g id="SHOE-2" data-name="SHOE"><path class="cls-7" d="M431.44,1326.79c.17,1.94,3.67,11.2,3.67,11.2l168.76-6.06v-10c0-16.74-5.69-31.19-8.69-37.47-4.65-9.69-11.08-9.29-11.08-9.29s-17.5,19.12-37.12,19.12c-3.78,0-6.49-2-8.42-4.92a23,23,0,0,1-2.68-5.82,46.36,46.36,0,0,1-1.72-8.2,7.37,7.37,0,0,0-10.68-5.63c-7.7,4-6.94,12.82-32,26.34-1.25.68-2.55,1.37-3.89,2.08C457.15,1314.16,431.77,1308.2,431.44,1326.79Z"/><path class="cls-6" d="M451.56,1346.84c-5.18,0-11.5-2.34-14.89-6.14a21.28,21.28,0,0,1-4.65-18.15h.14a16.82,16.82,0,0,0,16.14,13.68l145-4.54c4.81,0,8.92-3.33,10.6-8v10.42c0,7.05-5.11,12.76-11.42,12.76Z"/><path class="cls-6" d="M484.76,1299.6a49.37,49.37,0,0,1,38.79,35.4l7.14-.25a56.38,56.38,0,0,0-36.77-40l-2.42,1.31c-1.25.68-2.55,1.37-3.89,2.08Q486.19,1298.91,484.76,1299.6Z"/><path class="cls-6" d="M467.07,1306.46v.93a46.81,46.81,0,0,1,42.84,28.07l7.42-.25a53.9,53.9,0,0,0-37.66-33.29A127.92,127.92,0,0,1,467.07,1306.46Z"/></g><path class="cls-8" d="M596.66,841s72.2,102.85,8.83,403c0,0-33.21,11.14-86.14,3,0,0-71.66-291.85-81.41-418.31-17.58-.52-35.79-.84-54.56-.84,0,0,75.73,154.79,2.22,421.62,0,0-54.15,3.87-82.62-.19,0,0-87.39-436.27-81.74-476.84C228,723.61,381.82,661.26,478.58,652.47l216.56-1.34s55.51,56,32.34,135.45C710.1,846.19,596.66,841,596.66,841Z"/></g><g id="TORSO"><path class="cls-9" d="M710.92,671.71a18.86,18.86,0,0,0,3.18,5.85s-189.77,64.6-269.63-16.67C531.24,691.26,673.63,676.38,710.92,671.71Z"/><path class="cls-3" d="M630.82,178.72c9.86,8.1,131.38,78.53,148.79,88.21s-81.22,222.13-78.15,297.93c2.28,56.26,17.72,105.62,17.72,105.62s-174.09,25.63-274.71-9.59c0,0,20.9-31,9.29-95.2C444.35,513.6,425.2,369,430.54,313.37c1.94-20.13,5.42-70.05,31-82.05,38.7-18.17,65.4-34,65.4-34Z"/><path class="cls-4" d="M453.75,568.69c-9.41-52.09-28-155.21-14.11-225"/></g><g id="RIGHT_HAND" data-name="RIGHT HAND"><path class="cls-3" d="M779.61,267.51c51.86,45.67,56.8,234.38,24,268.77-64.24,67.34-258.15,66.58-258.15,66.58s-20.29-2.93-8.68-50.14c0,0,143.76-72.6,157.69-72.17,0,0-2.32-134.68,27.09-174.92S773.51,262.14,779.61,267.51Z"/><path class="cls-10" d="M706.65,586.88c-76.12,19.35-161.19,17-161.19,17"/><path class="cls-4" d="M536.78,551.71s76.42-42.9,157.69-72.17c0,0,3.38-103.2,11.93-133.48"/><g id="ARM"><path class="cls-5" d="M539.75,552s-43.4-16.39-57.43-8.15c-15.35,9-43.77,37.77-45.43,42.61s-1.15,9.89-.85,15.09,52.3,5.11,58.46,4.75,39.93,3.29,45.63-2.9C561.07,580.71,539.75,552,539.75,552Z"/></g></g><g id="HEAD"><path id="NECK" class="cls-11" d="M622.11,110.77s-11.61,29,8.71,68c0,0-27.87,39.69-72,39.44-57-.31-31.93-20.89-31.93-20.89s8.71-13.94,7-38.9Z"/><path id="HEAD-2" data-name="HEAD" class="cls-5" d="M613.2,128c-1.16,5.42-1.33,28.82-11,35.4-12.52,8.52-49.36,21.88-77.22,11.82-3.57-1.29-21.29-53.41-20.13-71.21s1.55-80.88,41-96.75,86.68-7,99.84,39.47c5.38,19,.94,36-6.19,49.51,0,0,4.56,8.18-2.75,16.33C628.8,121.46,613.2,128,613.2,128Z"/><path id="HAIR" class="cls-12" d="M639.52,96.23c-9.28-10.49-22.06,8.16-22.06,8.16l-.18,1a24.13,24.13,0,0,1-8.66-7.93c-5.34-8.08-5.78-17.07-5.07-49.4,0,0-51.81,5.47-89.38-3.56,5.77-16.13,15.41-30.72,31.7-37.27,39.47-15.87,86.69-7,99.84,39.47C651.09,65.69,646.65,82.72,639.52,96.23Z"/><g id="COLLAR"><path class="cls-9" d="M570.83,202.87c7.22-3.35,37.15-14.25,58.3-35.67,0,0,21.11,20.47,21.3,24.11s-44.71,34.08-57.35,35.37Z"/><path class="cls-9" d="M526.94,186.43c2,3.61,7.06,12.13,21.51,16,0,0-10.58,17.28-20.39,22.7,0,0-16-7-20.35-16.12C504.83,203,526.94,186.43,526.94,186.43Z"/><path class="cls-8" d="M548.45,202.43l10.38,15.73,12-15.29,11,11.76s-15.34,7.31-44,2.07Z"/></g></g></g><g id="TABLE"><path class="cls-2" d="M0,604H544.78a20,20,0,0,1,20,20v5.3a20,20,0,0,1-20,20H1"/><polyline class="cls-13" points="429.96 1348.15 429.96 650.02 473.47 650.02 473.47 1348.13"/><polygon class="cls-9" points="429.96 663.9 429.96 650.02 473.47 650.02 473.47 698.27 429.96 663.9"/><polyline class="cls-14" points="429.96 1347.14 429.96 650.02 473.47 650.02 473.47 1347.12"/></g><g id="TABLET"><path class="cls-15" d="M447.83,604H230a18.08,18.08,0,0,1-16.31-10.28L143.28,446.6a9.26,9.26,0,0,1,8.36-13.26H369.47a18.08,18.08,0,0,1,16.31,10.28l70.41,147.14A9.26,9.26,0,0,1,447.83,604Z"/><path class="cls-9" d="M447.48,601.79H233.16A17.52,17.52,0,0,1,218,591.85L187,527l.47-.82h235l.39.81,29.65,62C457,596.23,454.07,601.79,447.48,601.79Z"/><path class="cls-1" d="M425,525.86l-39.85,69.58c-3,5.24-9.35,8.58-16.32,8.58H151c-6.82,0-11.3-5.94-8.36-11.08l38.44-67.08Z"/></g></g></g></g></svg>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <!-- .slider-item -->

                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- nk-split-content -->
                    </div><!-- nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>


</html>