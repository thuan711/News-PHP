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
          @foreach($xemnhieu as $tin)
            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="/img/{{$tin->urlHinh}}">
                <img src="/img/{{$tin->urlHinh}}" alt="" class="d-none">
                <a href="/tin/{{$tin->id}}" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>

              <div class="thumb-text-holder">
                
                <h2 class="thumb-entry-title">
                  <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                </h2>
              </div>
            </article>
          @endforeach

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
              <h3 class="section-title">Lựa chọn của biên tập viên</h3>
              <a href="#" class="all-posts-url">View All</a>
            </div>
            <div class="row">
              <div class="col-lg-7">
                <article class="entry">
                @foreach($tinnb as $tin)
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
                  @endforeach
                </article>
              </div>
              <div class="col-lg-5">                
                <ul class="post-list-small">
                @foreach($data as $tin)
                  <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                      <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                          <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                        </h3>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            {{$tin->ngayDang}}
                          </li>
                        </ul>
                      </div>                  
                    </article>
                  </li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
          </section> <!-- end editors picks -->

          <!-- Posts from categories -->
          

          <!-- Carousel posts -->
          <section class="section mb-20">
            <div class="title-wrap">
              <h3 class="section-title section-title--sm">Xem nhiều</h3>
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
            @foreach($xemnhieu as $tin)
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="/tin/{{$tin->id}}">
                    <div class="thumb-container thumb-75">
                      <img data-src="/img/{{$tin->urlHinh}}" src="/img/{{$tin->urlHinh}}" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        {{$tin->ngayDang}}
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
              @endforeach
            </div> <!-- end slider -->

          </section>

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
        <div class="widget widget-reviews">
            <h4 class="widget-title">Danh mục tin tức</h4>
            @foreach ($loai as $lo)
            <ul class="post-list-small">
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__body" style="font-size: 20;">
                    <h3 class="post-list-small__entry-title">
                      <a href="/loai/{{$lo->id}}">{{$lo->ten}}</a> <hr>
                    </h3>
                  </div>                  
                </article>
              </li>
            </ul>
            @endforeach
          </div>
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
                  <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Xu hướng</a>
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
                      @foreach($dbl as $tin)
                   
                      <article class="post-list-small__entry clearfix mb-2">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="/tin/{{$tin->id}}">
                              <img data-src="/img/{{$tin->urlHinh}}" src="img/empty.png" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              {{$tin->ngayDang}}
                            </li>
                          </ul>
                        </div>                  
                      </article>
                      @endforeach
                      
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

         

          <!-- Latest Reviews -->
          

          

        </aside> <!-- end sidebar -->
  
      </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection