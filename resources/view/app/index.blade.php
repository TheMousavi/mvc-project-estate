@extends('app.layouts.app')

@section('head-tag')
    <title>املاک</title>
@endsection

@section('content')
    <section class="home-slider owl-carousel">

        <?php foreach ($slides as $slide) { ?>


        <div class="slider-item" style="background-image:url('<?= asset($slide->image) ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
                    <div class="col-md-6 text p-4 ftco-animate" style="direction: rtl;">
                        <h1 class="mb-3"><?= $slide->title ?></h1>
                        <span class="location d-block mb-3"><i class="icon-my_location"></i><?= $slide->address ?></span>
                        <p><?= html_entity_decode($slide->body) ?></p>
                        <span class="price"><?= $slide->amount ?>  </span>
                        <a href="<?= $slide->url ?> " class="btn-custom p-3 px-4 bg-primary">مشاهده جزئیات<span class="icon-plus mr-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>



    <section class="ftco-section ftco-properties">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">اخرین پست ها</span>
                    <h2 class="mb-4">اخرین اگهی ها</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-slider owl-carousel ftco-animate">

                        <?php foreach ($newestAds as $advertise) {?>
                        <div class="item">
                            <div class="properties">
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <span class="status <?= $advertise->sellStatus() == 'خرید' ? 'sale':'rent' ?>"><?= $advertise->sellStatus() ?></span>
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#"><?= $advertise->title ?></a></h3>
                                            <p><?= $advertise->type() ?></p>
                                        </div>
                                        <div class="two">
                                            <span class="price"><?= $advertise->amount ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">پیشنهادات ویژه</span>
                    <h2 class="mb-4">بهترین اگهی ها</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($bestAds as $advertise) { ?>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="properties">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <span class="status <?= $advertise->sellStatus() == 'خرید' ? 'sale':'rent' ?>"><?= $advertise->sellStatus() ?></span>
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#"><?= $advertise->title ?></a></h3>
                                    <p>ویلایی</p>
                                </div>
                                <div class="two">
                                    <span class="price"><?= $advertise->amount ?></span>
                                </div>
                            </div>
                            <p><?= substr(html_entity_decode($advertise->description) , 0 , 40) ?></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="flaticon-selection mx-1"></i><?= $advertise->area ?> </span>
                                <span class="ml-auto"><i class="flaticon-bathtub"></i> <?= $advertise->room ?></span>
                                <span><i class="flaticon-bed"></i> <?= $advertise->toilet ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">برخی اطلاعات جالب</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="9000">0</strong>
                                    <span>مشتریان خوشحال</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>آگهی ها</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>نمایندگان</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>متراژ کلی </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">مقالات</span>
                    <h2>آخرین بلاگ ها</h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php  foreach ($posts as $post){ ?>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('<?= asset($post->image) ?>');">
                        </a>
                        <div class="text mt-3 d-block">
                            <h3 class="heading mt-3"><a href="#"><?= $post->title ?></a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">۱۳۹۸/۲/۲۹</a></div>
                                <div><a href="#"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
@endsection
