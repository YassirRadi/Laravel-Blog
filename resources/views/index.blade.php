@extends('layouts.master')


@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="section-padding pt-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

          @foreach ($articles as $item)

          <div class="mb-4 post-list border-bottom pb-4">
            <div class="row no-gutters">
              <div class="col-md-5">
                <a class="post-thumb" href="blog-single.html">
                  <img src="images/fashion/img-1.jpg" alt="photo" class="img-fluid w-100"/>
                </a>
              </div>

              <div class="col-md-7">
                <div class="post-article mt-sm-3">
                  <div class="meta-cat">
                    <span
                      class="letter-spacing cat-name font-extra text-uppercase font-sm">
                      Explore
                    </span>
                  </div>
                  <h3 class="post-title mt-2">
                    <a href="blog-single.html">{{ $item->title }}</a>
                  </h3>

                  <div class="post-meta">
                    <ul class="list-inline">
                      <li class="post-like list-inline-item">
                        <span class="font-sm letter-spacing-1 text-uppercase">
                           <i class="ti-time mr-2"></i>3 min read</span>
                      </li>
                      <li class="post-view list-inline-item letter-spacing-1">
                        259 Views
                      </li>
                    </ul>
                  </div>
                  <div class="post-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit.Magnam nesciunt architecto quaerat necessitatibus
                      tenetur ratione eius numquam!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        @endforeach

            <div class="m-auto">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>
        </div>


        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
          <div class="sidebar sidebar-right">
            <div class="sidebar-wrap mt-5 mt-lg-0">
              <div class="sidebar-widget category mb-5">
                <h4 class="text-center widget-title">Catgeories</h4>
                <ul class="list-unstyled">
                  <li class="align-items-center d-flex justify-content-between">
                    <a href="#">Innovation</a>
                    <span>14</span>
                  </li>
                  <li class="align-items-center d-flex justify-content-between">
                    <a href="#">Software</a>
                    <span>2</span>
                  </li>
                  <li class="align-items-center d-flex justify-content-between">
                    <a href="#">Social</a>
                    <span>10</span>
                  </li>
                  <li class="align-items-center d-flex justify-content-between">
                    <a href="#">Trends</a>
                    <span>5</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
