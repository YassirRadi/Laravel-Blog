@extends('layouts.master')

@section('content')

    <section class="single-block-wrapper section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="single-post">
              <div class="post-header mb-5 text-center">
                <div class="meta-cat">
                  <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">
                    {{ $article->category->name }}
                  </a>
                </div>
                <h2 class="post-title mt-2">
                  {{ $article->title }}
                </h2>

                <div class="post-meta">
                  <span class="text-uppercase font-sm letter-spacing-1 mr-3">
                    {{ $article->user->name }}
                  </span>
                  <span class="text-uppercase font-sm letter-spacing-1">
                    {{ strtoupper(date('F d, Y', strtotime($article->created_at))) }}
                  </span>
                </div>
                <div class="post-featured-image mt-5">
                  <img
                    src="{{asset('storage/' . $article->image_url)}}"
                    class="img-fluid w-100"
                    alt="featured-image"
                  />
                </div>
              </div>
              <div class="post-body">
                <div class="entry-content">
                  {{ $article->content }}
                </div>

                <div class="post-tags py-4">
                  <a href="#">#Health</a>
                  <a href="#">#Game</a>
                  <a href="#">#Tour</a>
                </div>

                <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">
                  <span class="single-comment-o">
                    <i class="fa fa-comment-o"></i>0 comment</span>

                  <div class="post-share">
                    <span class="count-number-like">2</span>
                    <a class="penci-post-like single-like-button"
                      ><i class="ti-heart"></i
                    ></a>
                  </div>

                  <div class="list-posts-share">
                    <a target="_blank" rel="nofollow" href="#">
                      <i class="ti-facebook"></i>
                    </a>
                    <a target="_blank" rel="nofollow" href="#">
                      <i class="ti-twitter"></i></a>
                    <a target="_blank" rel="nofollow" href="#">
                      <i class="ti-pinterest"></i>
                    </a>
                    <a target="_blank" rel="nofollow" href="#">
                      <i class="ti-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="comment-area my-5">
              <h3 class="mb-4 text-center">2 Comments</h3>
              <div class="comment-area-box media">
                <img src="images/blog-user-2.jpg" class="img-fluid float-left mr-3 mt-2"/>

                <div class="media-body ml-4">
                  <h4 class="mb-0">Micle harison</h4>
                  <span class="date-comm font-sm text-capitalize text-color">
                    <i class="ti-time mr-2"></i>June 7, 2019
                  </span>

                  <div class="comment-content mt-3">
                    <p>
                      Lorem ipsum dolor sit amet, usu ut perfecto postulant
                      deterruisset, libris causae volutpat at est, ius id modus
                      laoreet urbanitas. Mel ei delenit dolores.
                    </p>
                  </div>
                </div>
              </div>

              <div class="comment-area-box media mt-5">
                <img src="images/blog-user-3.jpg" alt="" class="mt-2 img-fluid float-left mr-3"/>

                <div class="media-body ml-4">
                  <h4 class="mb-0">John Doe</h4>
                  <span class="date-comm font-sm text-capitalize text-color">
                    <i class="ti-time mr-2"></i>June 7, 2019
                  </span>

                  <div class="comment-content mt-3">
                    <p>
                      Some consultants are employed indirectly by the client via
                      a consultancy staffing company.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            @auth
            <form action=""" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
              @csrf
              
              <h3 class="mb-4 text-center">Leave a comment</h3>
              <div class="row">
                <div class="col-lg-12">
                  <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Write a comment..."></textarea>
                </div>
              </div>

              <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            @endauth

            @guest
                <h3>Oops! Commenting is only available to registered users. <a class="text-primary text-underline" href="/register">Sign Up</a></h4>
            @endguest
          </div>
        </div>
      </div>
    </section>

@endsection