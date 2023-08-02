@extends('layout')
@section('tieude')
    Dịch vụ
@endsection
@section('noidungchinh')
<!-- Map Begin -->
<!-- Page Title -->
<section class="page-title" style="background-image: url(https://images.unsplash.com/photo-1506765515384-028b60a970df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80);">
      <div class="full-overlay"></div>
      <div class="container">
        <div class="page-title__holder">
          <h1 class="page-title__title">Dịch vụ</h1>
          <p class="lead white">AhaMag cung cấp các gói dịch vụ Preminium dành cho khách hàng muốn có các trải nghiệm mới mẻ, không quảng cáo, xem thêm các tin tức hot trên thị trường. Gói Preminium của chúng tôi sinh ra dành cho bạn!</p>
        </div>        
      </div>
    </section>

    <div class="main-container container mt-40" id="main-container">         

        <!-- Content -->
        <div class="row">
  
          <!-- Posts -->
          <div class="col-lg-8 blog__content mb-30">
      

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