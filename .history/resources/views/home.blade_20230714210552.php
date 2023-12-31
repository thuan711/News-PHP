@extends('layout')
@section('tieude')
    Trang chủ
@endsection
@section('noidungchinh')
<!-- Trending Now -->
<div class="trending-now">
      <div class="container relative">
        <span class="trending-now__label">Trending</span>
        <ul class="newsticker">
          <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">A-HA theme is multi-purpose solution for any kind of business</a></li>
          <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">Satelite cost tens of millions or even hundreds of millions of dollars to build</a></li>
          <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">8 Hidden Costs of Starting and Running a Business</a></li>          
        </ul>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>        
      </div>
    </div>    

    <!-- Featured Posts Grid -->      
    <section class="featured-posts-grid bg-dark">
      <div class="container clearfix">
        
        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
          <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="img/blog/featured_grid_slide_1.jpg">
                <img src="img/blog/featured_grid_slide_1.jpg" alt="" class="d-none">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>

              <div class="thumb-text-holder">
                <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">See a 360-Degree View of the Top of the Everest</a>
                </h2>
              </div>
            </article>

            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="img/blog/featured_grid_slide_2.jpg">
                <img src="img/blog/featured_grid_slide_2.jpg" alt="" class="d-none">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>

              <div class="thumb-text-holder">
                <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--blue">Business</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
                </h2>
              </div>
            </article>

            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="img/blog/featured_grid_slide_3.jpg">
                <img src="img/blog/featured_grid_slide_3.jpg" alt="" class="d-none">
                <a href="single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>

              <div class="thumb-text-holder">
                <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--purple">Tech</a>   
                <h2 class="thumb-entry-title">
                  <a href="single-post.html">Tesla's Giant Battery Farm Is Now Live in South Australia</a>
                </h2>
              </div>
            </article>

          </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->
        

        <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
          <article class="entry featured-posts-grid__entry">
            <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_2.jpg);">
              <a href="single-post.html" class="thumb-url"></a>
              <div class="bottom-gradient"></div>
            </div>

            <div class="thumb-text-holder">  
              <h2 class="thumb-entry-title thumb-entry-title--sm">
                <a href="single-post.html">These Are the 20 Best Places to Work in 2018</a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#">DeoThemes</a>
                </li>
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  21 October, 2017
                </li>
                <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li>               
              </ul>
            </div>
          </article>
        </div>

        <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
          <article class="entry featured-posts-grid__entry">
            <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_3.jpg);">
              <a href="single-post.html" class="thumb-url"></a>
              <div class="bottom-gradient"></div>
            </div>

            <div class="thumb-text-holder">  
              <h2 class="thumb-entry-title thumb-entry-title--sm">
                <a href="single-post.html">Experience the Grand Canyon National Park</a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#">DeoThemes</a>
                </li>
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  21 October, 2017
                </li>
                <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">115</a>
                </li>               
              </ul>
            </div>
          </article>
        </div>

      </div>
    </section> <!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">         

      <!-- Content -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">
          
          <!-- Hot News -->
          <section class="section tab-post mb-10">
            <div class="title-wrap">
              <h3 class="section-title">Tin nóng</h3>

              <div class="tabs tab-post__tabs"> 
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">All</a>
                  </li>
                </ul> <!-- end tabs -->
              </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
              
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row">
                @foreach($tinhot as $tin)
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="/tin/{{$tin->id}}">
                          <div class="thumb-container thumb-75">
                            <img data-src="/img/{{$tin->urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                        
                          <a href="#" class="entry__meta-category">science</a>
                          <h2 class="entry__title">
                            <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              {{$tin->ngayDang}}
                            </li>
                           
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>{{$tin->tomTat}}</p>
                        </div>
                      </div>
                    
                    </article>
                   
                  </div>
                  @endforeach
                </div>
              </div> <!-- end pane 1 -->
                           
          </section> <!-- end hot news -->

          <!-- Latest News -->
          <section class="section">
            <div class="title-wrap">
              <h3 class="section-title">Tin mới nhất</h3>
              <a href="#" class="all-posts-url">View All</a>
            </div>
            @foreach($tinmoi as $tin)
            <article class="entry post-list">
            
              <div class="entry__img-holder post-list__img-holder">
                <a href="/tin/{{$tin->id}}">
                  <div class="thumb-container thumb-75">
                    <img data-src="/img/{{$tin->urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body post-list__body">
                <div class="entry__header">
                  
                  <h2 class="entry__title">
                    <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>
                      {{$tin->ngayDang}}
                    </li>
                    
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>{{$tin->tomTat}}</p>
                </div>
              </div>
            </article>
            @endforeach
          </section> <!-- end latest news -->

          <!-- Ad Banner 728 -->
          <div class="text-center pb-40">
            <a href="#">
              <img src="img/blog/placeholder_leaderboard.jpg" alt="">
            </a>
          </div>

          <!-- Editor's Picks -->
          <section class="section editors-picks mb-20">
            <div class="title-wrap">
              <h3 class="section-title">Editor's Picks</h3>
              <a href="#" class="all-posts-url">View All</a>
            </div>
            <div class="row">
              <div class="col-lg-7">
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="single-post.html">
                      <div class="thumb-container thumb-75">
                        <img data-src="img/blog/editors_post_img.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <a href="#" class="entry__meta-category">science</a>
                      <h2 class="entry__title">
                        <a href="single-post.html">Synchrotron scanning reveals amphibious ecomorphology in a new clade of bird-like dinosaurs</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">115</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-lg-5">                
                <ul class="post-list-small">
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Bill Gates's 5 Favorite Books of 2017</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Elon Musk May Be Sending a Tesla Roadster to Space on a SpaceX Rocket</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">GoPro Accidentally Left In Path of Lava and Incredible Footage Survives</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">The One Goal Every Business Should Have, But Almost None Prioritize</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                </ul>
              </div>
            </div>
          </section> <!-- end editors picks -->

          <!-- Posts from categories -->
          <section class="section mb-0">
            <div class="row">

              <!-- World -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--orange">
                  <h3 class="section-title section-title--sm">World</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="single-post.html">
                      <div class="thumb-container thumb-75">
                        <img data-src="img/blog/grid_post_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="single-post.html">To Succeed in 2018, Ecommerce Entrepreneurs Must Focus on This One Change</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">115</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Bill Gates's 5 Favorite Books of 2017</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                </ul>
              </div> <!-- end world -->

              <!-- Science -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--violet">
                  <h3 class="section-title section-title--sm">Science</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="single-post.html">
                      <div class="thumb-container thumb-75">
                        <img data-src="img/blog/grid_post_img_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="single-post.html">What hospitals can do to help keep excess opioids out of communities</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">115</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Bill Gates's 5 Favorite Books of 2017</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                </ul>
              </div> <!-- end science -->

              <!-- Sport -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--light-blue">
                  <h3 class="section-title section-title--sm">Sport</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="single-post.html">
                      <div class="thumb-container thumb-75">
                        <img data-src="img/blog/grid_post_img_5.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="single-post.html">Phil Taylor: The Power and The Glory</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">115</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Bill Gates's 5 Favorite Books of 2017</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                </ul>
              </div> <!-- end sport -->

              <!-- Business -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--blue">
                  <h3 class="section-title section-title--sm">Business</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="single-post.html">
                      <div class="thumb-container thumb-75">
                        <img data-src="img/blog/grid_post_img_6.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="single-post.html">7 Ways Ecommerce Businesses Can Prevent Holiday Fraud</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          21 October, 2017
                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">115</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">What Indie Beauty Companies Can Teach Entrepreneurs About Scaling</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Bill Gates's 5 Favorite Books of 2017</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="single-post.html">Sheryl Sandberg's 6 Steps to Make Sure Everyone Feels Safe at Work</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                </ul>
              </div> <!-- end business -->

            </div>                
          </section> <!-- end posts from categories -->

          <!-- Carousel posts -->
          <section class="section mb-20">
            <div class="title-wrap">
              <h3 class="section-title section-title--sm">More News</h3>
              <div class="carousel-nav">
                <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                  <i class="ui-arrow-left"></i>
                </button>
                <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                  <i class="ui-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_1.jpg" src="img/blog/carousel_img_1.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">The Surprising Way This Designer Picked the Next It Colors</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        21 October, 2017
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_2.jpg" src="img/blog/carousel_img_2.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">What Fashion Editors Are Buying for Every Kid on Our Holiday List</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        21 October, 2017
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_3.jpg" src="img/blog/carousel_img_3.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="single-post.html">Why Coach's Cute New Holiday Collab Is Unexpected</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        21 October, 2017
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
            </div> <!-- end slider -->

          </section>

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">

          <!-- Widget Social Subscribers -->
          <div class="widget widget-social-subscribers">
            <ul class="widget-social-subscribers__list">
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                  <i class="ui-facebook widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Fans</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--twitter">
                  <i class="ui-twitter widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--google">
                  <i class="ui-google widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--rss">
                  <i class="ui-rss widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                  <i class="ui-youtube widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                  <i class="ui-instagram widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Widget Newsletter -->
          <div class="widget widget_mc4wp_form_widget">
            <h4 class="widget-title">Subscribe for news</h4>
            <form class="mc4wp-form" method="post">
              <div class="mc4wp-form-fields">
                <p>
                  <input type="email" name="EMAIL" placeholder="Your email" required="">
                </p>
                <p>
                  <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                </p>
              </div>
            </form>
          </div> <!-- end widget newsletter -->
          
          <!-- Widget Popular/Latest Posts -->
          <div class="widget widget-tabpost">
            <div class="tabs widget-tabpost__tabs">
              <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                  <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Trending</a>
                </li>                                 
                <li class="tabs__item widget-tabpost__tabs-item">
                  <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Latest</a>
                </li>                                 
                <li class="tabs__item widget-tabpost__tabs-item">
                  <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Comments</a>
                </li>                                 
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">
                
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                  <ul class="post-list-small">
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">How Meditation Can Transform Your Business</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                  </ul>
                </div>
                
                <div class="tabs__content-pane" id="tab-latest">
                  <ul class="post-list-small">
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">How Meditation Can Transform Your Business</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>                    
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                  </ul>
                </div>
                
                <div class="tabs__content-pane" id="tab-comments">
                  <ul class="post-list-small">
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">How Meditation Can Transform Your Business</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>                    
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                              <img data-src="img/blog/popular_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                          </ul>
                        </div>                  
                      </article>
                    </li>
                  </ul>
                </div>
                
              </div> <!-- end tab content -->
            </div> <!-- end tabs -->            
          </div> <!-- end widget popular/latest posts -->

          <!-- Widget Ad 300 -->
          <div class="widget widget_media_image">
            <a href="#">
              <img src="img/blog/placeholder_300.jpg" alt="">
            </a>
          </div> <!-- end widget ad 300 -->          

          <!-- Widget Socials -->
          <div class="widget widget-socials">
            <h4 class="widget-title">Follow us</h4>
            <div class="socials">
              <a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a><!--
              --><a class="social social-twitter social--large" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a><!--
              --><a class="social social-google-plus social--large" href="#" title="google" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a><!--
              --><a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
              </a><!--
              --><a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
              </a><!--
              --><a class="social social-rss social--large" href="#" title="rss" target="_blank" aria-label="rss">
                <i class="ui-rss"></i>
              </a>
            </div>
          </div> <!-- end widget socials -->

          <!-- Widget Twitter -->
          <div class="widget">
            <h4 class="widget-title">Our tweets</h4>
            <div class="tweets-container">
              <div id="tweets"></div>                  
            </div>
          </div>

          <!-- Widget Ad 125 -->
          <div class="widget widget-gallery-sm">
            <ul class="widget-gallery-sm__list">
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
            </ul>
          </div> <!-- end widget ad 300 -->

          <!-- Widget Carousel -->
          <div class="widget">
            <h4 class="widget-title">Featured Posts</h4>
            <div id="owl-single" class="owl-carousel owl-theme">

              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="single-post.html">
                    <div class="thumb-bg-holder">
                      <img data-src="img/blog/featured_post_img_1.jpg" src="img/blog/featured_post_img_1.jpg" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="single-post.html">Myanmar little monk reading book outside monastery</a>
                  </h2>
                </div>
              </article>

              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="single-post.html">
                    <div class="thumb-bg-holder">
                      <img data-src="img/blog/featured_post_img_2.jpg" src="img/blog/featured_post_img_2.jpg" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="single-post.html">Spectacular display of northern lights illuminates sky</a>
                  </h2>
                </div>
              </article>


            </div>
          </div>

          <!-- Latest Reviews -->
          <div class="widget widget-reviews">
            <h4 class="widget-title">Latest Reviews</h4>
            @foreach ($loai as $lo)
            <ul class="post-list-small">
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__body p-2">
                    <h3 class="post-list-small__entry-title">
                      <a href="/loai/{{$lo->id}}">{{$lo->ten}}</a>
                    </h3>
                  </div>                  
                </article>
                @endforeach
              </li>
            <ul class="post-list-small">
              <li class="post-list-small__item">
                
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">My First Impressions of iPhone X</a>
                    </h3>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-75">
                      <a href="single-post.html">
                        <img data-src="img/blog/review_post_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">The Best Laptops for Kids</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-rating">
                        <i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star-outline"></i>
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-75">
                      <a href="single-post.html">
                        <img data-src="img/blog/review_post_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">PS4 Joypads Pre-Orders Start Friday in NYC</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-rating">
                        <i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star-outline"></i>
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-75">
                      <a href="single-post.html">
                        <img data-src="img/blog/review_post_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">Hands on: Parrot AR Drone 2.0 review</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-rating">
                        <i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star"></i><!--
                        --><i class="ui-star-outline"></i>
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
            </ul>
          </div>

          <!-- Widget Tags -->
          <div class="widget widget_tag_cloud">
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud">
              <a href="#">Magazine</a>
              <a href="#">Creative</a>
              <a href="#">Responsive</a>
              <a href="#">Modern</a>
              <a href="#">Tech</a>
              <a href="#">WordPress</a>
              <a href="#">Website</a>
              <a href="#">News</a>
            </div>
          </div>

        </aside> <!-- end sidebar -->
  
      </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection