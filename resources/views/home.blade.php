@extends('layouts.main')

@section('container')

    <section>
        <div class="row">
            <div class="col-lg-5 about pt-auto">
                <h2 class="fw-bold">Hello, Welcome to <span>BacaAja</span></h2>
                <div class="row download-cv mb-5">
                    <h5 class="fw-bold">Publish your passion, your way</h5>
                    <p>Create new awesome post in here. Lets start!</p>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col col-lg-3 me-auto pb-5">
                                <a href="javascript:delay('/dashboard')">
                                    <lottie-player id="playlottie" src="https://assets5.lottiefiles.com/packages/lf20_b6ocdgzo.json"  background="transparent"  speed="1"  style="width: 155px; height: 155px;"></lottie-player>
                                </a>
                            </div>
                            <div class="col col-lg-3 ms-auto">
                                <a href="javascript:delay('/posts')">
                                    <lottie-player id="playlottie1" src="https://assets6.lottiefiles.com/packages/lf20_pmn7hvzy.json"  background="transparent"  speed="1"  style="width: 155px; height: 155px;"></lottie-player>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-5 ms-auto mb-auto">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_pov5id7i.json"  background="transparent"  speed="1"  style="width: auto; height: 90vh;"  loop autoplay></lottie-player>
            </div>
        </div>
    </section>
@endsection
