@extends('layouts.main')

@section('container')

    <section>
        <div class="row">
            <div class="col-lg-5 about">
                <h4 class="fw-bold" data-aos="fade-left">Hello, Welcome to <span>BacaAja</span></h4>
                <div class="row download-cv mt-5 mb-5">
                    <div class="col-lg-5">
                        <a href="javascript:delay('/dashboard')">
                            <lottie-player id="playlottie" src="https://assets8.lottiefiles.com/packages/lf20_wotq4bi0.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"></lottie-player>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="javascript:delay('/posts')">
                            <lottie-player id="playlottie1" src="https://assets2.lottiefiles.com/packages/lf20_u5n5hcrd.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"></lottie-player>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ms-auto">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_pov5id7i.json"  background="transparent"  speed="1"  style="width: auto; height: 90vh;"  loop autoplay></lottie-player>
            </div>
        </div>
    </section>
@endsection
