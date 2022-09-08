@extends('frontend/layouts.template')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Welcome To Shenila's portfolio</h1>
        <h2>Hi, I'm Shenila. I am a front-end developer with a strong focus on problem solving and innovation. I'm also a macchiato lover but don't really like strong coffee.</h2>
        <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="{{asset('frontend/assets/img/flamingo.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>About Shen</h3>
          <p>My passion for building digital products is shaped by having the mindset of putting humans in the center of attention; to ensure the product team is solving the right problem for the people.
            My design process is backed-up with the iterative approach of user research, problem definition, hypotheses creations, prototyping, and testing.
            My strong focus is on discovery research and building design concepts that will enable organizations in defining a new strategy or product opportunities to help the business gain its competitive advantage.</p>

          <!--<div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Dine Pad</a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
          </div> -->

        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  @endsection