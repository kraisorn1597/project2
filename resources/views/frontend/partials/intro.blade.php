<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-img">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row offset-md-1">
                    <div class="col">

                    </div>
                    <label for="username" class="col-md-4 col-form-label text-md-right letter-white offset-md-3">{{ __('ชื่อผู้ใช้ :') }}</label>
                    <div class="col-md-4">
                        <input id="username" type="text" autocomplete="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"  autofocus>

                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row offset-md-1">
                    <div class="col">

                    </div>
                    <label for="password" class="col-md-4 col-form-label text-md-right letter-white offset-md-3">{{ __('รหัสผ่าน :') }}</label>

                    <div class="col-md-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                {{--                    <div class="form-group row">--}}
                {{--                        <div class="col-md-6 offset-md-4">--}}
                {{--                            <div class="form-check">--}}
                {{--                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                {{--                                <label class="form-check-label" for="remember">--}}
                {{--                                    {{ __('Remember Me') }}--}}
                {{--                                </label>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                <div class="form-group row mb-0 offset-md-8" style="padding-left: 4%">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        {{--                            @if (Route::has('password.request'))--}}
                        {{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                        {{--                                    {{ __('Forgot Your Password?') }}--}}
                        {{--                                </a>--}}
                        {{--                            @endif--}}
                    </div>
                </div>
            </form>
            {{--            <div class="row">--}}
            {{--                <div class="col">--}}

            {{--                </div>--}}
            {{--                <label class="letter-white">ID :</label>--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <div>--}}
            {{--                        <input id="username" name="username" type="text" class="form-control" required>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="row">--}}
            {{--                <div class="col">--}}

            {{--                </div>--}}
            {{--                <label class="letter-white" style="margin-top: 10px">Password :</label>--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <input id="username" name="username" type="text" class="form-control" style="margin-top: 10px" required>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="row">--}}
            {{--                <div class="col">--}}

            {{--                </div>--}}
            {{--                <div class="col-md-1">--}}
            {{--                    <a class="btn login" style="margin-top: 10px">Login</a>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-3">--}}

            {{--                </div>--}}
            {{--            </div>--}}

            <img src="{{ asset('newbiz/img/laundry1.png') }}" alt="" class="img-fluid">
        </div>
        {{--<div class="card text-center">--}}
        {{--<div class="card-header">--}}
        {{--<ul class="nav nav-tabs card-header-tabs">--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link active" href="#">Active</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="#">Link</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="card-body">--}}
        {{--<h5 class="card-title">Special title treatment</h5>--}}
        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="card">
            <div class="card-header">
                <h6 class="topic4">โปรโมชั่น</h6>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="col-md-12 col-lg-12 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i style="color:#41cf2e;"></i></div>
                            <h4 class="title topic4"><a href="">โปรโมชั่นรายเดือน</a></h4>
                            <p class="description topic4">ซักเกิน 90 กิโลขึ้นไปมีส่วนลด 5 %</p>
                        </div>
                    </div>
                    {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                </blockquote>
            </div>
        </div>
        {{--<div>--}}
        {{--<h2 class="topic">ยินดีต้อนรับ<br><h3 class="topic1">ร้านซักรีดออนไลน์</h3></h2>--}}
        {{--<h2>We provide<br><span>solutions</span><br>for your business!</h2>--}}
        {{--<div>--}}
        {{--<a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
        {{--<a href="#services" class="btn-services scrollto">Our Services</a>--}}
        {{--<a href="#about" class="btn-get-started scrollto">Login</a>--}}
        {{--<a href="#services" class="btn-services scrollto">Register</a>--}}
        {{--<div class="container">--}}
        {{--<div style="max-width: 18rem;">--}}
        {{--<h3 class="colorwhite">เกี่ยวกับ</h3>--}}
        {{--<div>--}}
        {{--<h5 class="card-title colorwhite" style="margin-left: 20px">บริการซัก อบ รีด</h5>--}}
        {{--<p class="card-text colorwhite" style="margin-left: 20px">ร้านซัก อบ รีด บริการรับ-ส่ง เสื้อผ้าลูกค้าถึงที่</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</section><!-- #intro -->