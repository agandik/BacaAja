@extends('layouts.main')

@section('container')

    <section>
        <div class="row">
            <div class="col-lg-5 about">
                <h4 class="fw-bold" data-aos="fade-left">Hello, Welcome to <span>BacaAja</span></h4>
                <div class="row download-cv mt-5 mb-5">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col col-lg-3 me-auto">
                                <a href="javascript:delay('/dashboard')">
                                    <lottie-player id="playlottie" src="https://assets5.lottiefiles.com/packages/lf20_b6ocdgzo.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"></lottie-player>
                                </a>
                            </div>
                            <div class="col col-lg-3 ms-auto">
                                <a href="javascript:delay('/posts')">
                                    <lottie-player id="playlottie1" src="https://assets6.lottiefiles.com/packages/lf20_pmn7hvzy.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"></lottie-player>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-5 ms-auto">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_pov5id7i.json"  background="transparent"  speed="1"  style="width: auto; height: 90vh;"  loop autoplay></lottie-player>
            </div>
        </div>
    </section>
@endsection
