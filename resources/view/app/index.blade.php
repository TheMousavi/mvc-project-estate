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
                        <p><?= $slide->body ?></p>
                        <span class="price"><?= $slide->amount ?>  </span>
                        <a href="#" class="btn-custom p-3 px-4 bg-primary">مشاهده جزئیات<span class="icon-plus mr-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
@endsection
