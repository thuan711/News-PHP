@extends('layout')
@section('tieude')
    {{$tin->tieuDe}}
@endsection
@section('noidungchinh')

<section class="blog spad">
        <div class="container">
            <img src="/img/{{$tin->urlHinh}}" alt="" style="width:100%">
            <div class="row">
                <div class="blog__item">
                    <div class="blog__item__text">
                        <span><img src="/img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                        <h2>{{$tin->tieuDe}}</h2>
                        <h4>{{$tin->tomTat}}</h4>
                        <p>{!!$tin->noiDung!!}</p>
                    </div>
                </div>
            </div>
            <h3>Tin liên quan</h3>
            <div class="row">
                @foreach($tinlienquan as $tin)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="blog__item">
                            <a href="/tin/{{$tin->id}}">
                                <div class="blog__item__pic set-bg">
                                    <img src="/img/{{$tin->urlHinh}}" alt="">
                                </div>
                            </a>
                            <div class="blog__item__text">
                                <span><img src="/img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                                <h5>{{$tin->tieuDe}}</h5>
                                <p>{{$tin->tomTat}}</p>
                                <a href="/tin/{{$tin->id}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
<div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">

          <!-- Breadcrumbs -->
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="index.html" class="breadcrumbs__url"><i class="ui-home"></i></a>
            </li>
            <li class="breadcrumbs__item">
              <a href="index.html" class="breadcrumbs__url">News</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
              World
            </li>
          </ul>

          <!-- standard post -->
          <article class="entry">
            
            <div class="single-post__entry-header entry__header">
              <a href="#" class="entry__meta-category">World</a>
              <h1 class="single-post__entry-title">
                Myanmar little monk reading book outside monastery
              </h1>

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

            <div class="entry__img-holder">
              <img src="img/blog/single_post_featured_img.jpg" alt="" class="entry__img">
            </div>

            <!-- Share -->
            <div class="entry__share">
              <div class="socials entry__share-socials">
                <a href="#" class="social social-facebook entry__share-social social--wide social--medium">
                  <i class="ui-facebook"></i>
                  <span class="social__text">Share on Facebook</span>
                </a>
                <a href="#" class="social social-twitter entry__share-social social--wide social--medium">
                  <i class="ui-twitter"></i>
                  <span class="social__text">Share on Twitter</span>
                </a>
                <a href="#" class="social social-google-plus entry__share-social social--medium">
                  <i class="ui-google"></i>
                </a>
                <a href="#" class="social social-pinterest entry__share-social social--medium">
                  <i class="ui-pinterest"></i>
                </a>
              </div>                    
            </div> <!-- share -->

            <div class="entry__article">
              <p>Namira is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut. <a href="#">Morbi consequat purus</a> ac ultricies commodo. Integer aliquam ante a mauris gravida, vitae bibendum neque pharetra. Nulla rhoncus orci varius purus lobortis euismod. Fusce tincidunt dictum est et rhoncus. <strong>Vivamus hendrerit</strong> congue nisi, et nisl tincida vestibulum elit tincidunt eu. Vivamus ac pharetra orci, in feugiat massa. Proin congue mauris pretium, ultricies tortor in, aliquam urna. Vivamus mi tortor, finibus a interdum ac, ultricies in elit.</p>

              <blockquote><p>“Dreams and dedication are powerful combination.”</p>
              <cite>William Longgood</cite>
              </blockquote>

              <h2>Set a bigger goals and chase them everyday</h2>            

              <p>Music can help you get into a “flow state” -- losing yourself in the task at hand. Even repetitive tasks or mundane assignments seem more bearable, or even fun, when your favorite tunes are in your ears. Plus, your eyes won’t be so prone to checking the time. <a href="#">Check out these</a> and more reasons to bring your music to work in this Zing Instruments infographic below. A great piece of music is an instant mood lifter. Plenty of scientific evidence backs this up - we`re happier bunnies when listening to music.</p>

              <figure>
                <img data-src="img/blog/single_post_img.jpg" src="img/empty.png" alt="" class="lazyload">
                <figcaption>The best WordPress theme</figcaption>
              </figure>              

              <p>Nulla rhoncus orci varius purus lobortis euismod. Fusce tincidunt dictum est et rhoncus. Vivamus hendrerit congue nisi, et nisl tincida vestibulum elit tincidunt eu. Vivamus ac pharetra orci, in feugiat massa. Proin congue mauris pretium, ultricies tortor in, aliquam urna. Vivamus mi tortor, finibus a interdum ac, ultricies in elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere hendrerit ex eu scelerisque.</p>

              <h3>Summary</h3>
              
              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion.</p>

              <!-- Final Review -->
              <div class="final-review">
                <div class="title-wrap">
                  <h5 class="uppercase">Final Review</h5>
                </div>

                <!-- progress -->
                <div class="progress-bars" id="animated-bars">
                  <h6 class="progress-bars__label">Loading Speed
                    <span class="progress-bars__percent">76%</span>
                  </h6>
                  <div class="progress-bars__base">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" class="progress-bars__bar" role="progressbar">
                      <span class="sr-only">76% Complete</span>
                    </div>
                  </div>

                  <h6 class="progress-bars__label">Memory
                    <span class="progress-bars__percent">66%</span>
                  </h6>
                  <div class="progress-bars__base">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" class="progress-bars__bar" role="progressbar">
                      <span class="sr-only">66% Complete</span>
                    </div>
                  </div>

                  <h6 class="progress-bars__label">CPU Power
                    <span class="progress-bars__percent">90%</span>
                  </h6>
                  <div class="progress-bars__base">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" class="progress-bars__bar" role="progressbar">
                      <span class="sr-only">90% Complete</span>
                    </div>
                  </div>
                </div> <!-- end progress -->
                
                <div class="final-review__total-score">
                  <div class="final-review__total-score-text-holder">
                    <h6 class="uppercase">Total Score</h6>
                    <p>In order to understand how the conscious and subconscious minds work together as a team to create your reality, let me again use an analogy. Your subconscious mind is like fertile soil which accepts any seed you plant within it.</p>
                  </div>
                  <div class="final-review__total-score-wrap">
                    <span class="final-review__total-score-number final-review__total-score-number--min">8</span>
                    <span class="final-review__total-score-number final-review__total-score-number--max">10</span>
                  </div>
                </div>
                

              </div> <!-- end final review -->

              <!-- tags -->
              <div class="entry__tags">
                <span class="entry__tags-label">Tags:</span>
                <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
              </div> <!-- end tags -->

            </div> <!-- end entry article -->

            <!-- Newsletter -->
            <div class="widget widget_mc4wp_form_widget">
              <h4 class="widget-title">Get the amazing news right in your inbox</h4>
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
            </div>

            <!-- Author -->
            <div class="title-wrap mt-40">
              <h5 class="uppercase">about author</h5>
            </div>
            <div class="entry-author clearfix">
              <img alt="" data-src="img/blog/author_large.jpg" src="img/empty.png" class="avatar lazyload">
              <div class="entry-author__info">
                <h6 class="entry-author__name">
                  <a href="#">John Carpet</a>
                </h6>
                <p class="mb-0">But unfortunately for most of us our role as gardener has never been explained to us. And in misunderstanding our role, we have allowed seeds of all types, both good and bad, to enter our inner garden.</p>
              </div>
            </div>

            <!-- Prev / Next Post -->
            <nav class="entry-navigation">
              <div class="clearfix">
                <div class="entry-navigation--left">
                  <i class="ui-arrow-left"></i>
                  <span class="entry-navigation__label">Previous Post</span>
                  <div class="entry-navigation__link">
                    <a href="#" rel="next">How to design your first mobile app</a>
                  </div>
                </div>
                <div class="entry-navigation--right">
                  <span class="entry-navigation__label">Next Post</span>
                  <i class="ui-arrow-right"></i>
                  <div class="entry-navigation__link">
                    <a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
                  </div>
                </div>
              </div>
            </nav>

            <!-- Related Posts -->
            <div class="related-posts">
              <div class="title-wrap mt-40">
                <h5 class="uppercase">Related Posts</h5>
              </div>
              <div class="row row-20">
                <div class="col-md-4">
                  <article class="entry">
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container thumb-75">
                          <img data-src="img/blog/carousel_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
                      <div class="entry__header">
                        <h2 class="entry__title entry__title--sm">
                          <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                        </h2>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="entry">
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container thumb-75">
                          <img data-src="img/blog/carousel_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
                      <div class="entry__header">
                        <h2 class="entry__title entry__title--sm">
                          <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                        </h2>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="entry">
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container thumb-75">
                          <img data-src="img/blog/carousel_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
                      <div class="entry__header">
                        <h2 class="entry__title entry__title--sm">
                          <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                        </h2>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div> <!-- end related posts -->                

          </article> <!-- end standard post -->


          <!-- Comments -->
          <div class="entry-comments mt-30">
            <div class="title-wrap mt-40">
              <h5 class="uppercase">3 comments</h5>
            </div>
            <ul class="comment-list">
              <li class="comment">  
                <div class="comment-body">
                  <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_1.jpg">
                  </div>
                  <div class="comment-text">
                    <h6 class="comment-author">Joeby Ragpa</h6>
                    <div class="comment-metadata">
                      <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>                      
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                  </div>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="img/blog/comment_2.jpg">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Alexander Samokhin</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li> <!-- end reply comment -->
                </ul>

              </li> <!-- end 1-2 comment -->

              <li>
                <div class="comment-body">
                  <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_3.jpg">
                  </div>
                  <div class="comment-text">
                    <h6 class="comment-author">Chris Root</h6>
                    <div class="comment-metadata">
                      <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                    </div>                      
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                  </div>
                </div>
              </li> <!-- end 3 comment -->

            </ul>         
          </div> <!-- end comments -->


          <!-- Comment Form -->
          <div id="respond" class="comment-respond">
            <div class="title-wrap">
              <h5 class="comment-respond__title uppercase">Leave a Reply</h5>
            </div>
            <form id="form" class="comment-form" method="post" action="#">
              <p class="comment-form-comment">
                <!-- <label for="comment">Comment</label> -->
                <textarea id="comment" name="comment" rows="5" required="required" placeholder="Comment*"></textarea>
              </p>

              <div class="row row-20">
                <div class="col-lg-4">
                  <input name="name" id="name" type="text" placeholder="Name*">
                </div>
                <div class="col-lg-4">
                  <input name="email" id="email" type="email" placeholder="Email*">
                </div>
                <div class="col-lg-4">
                  <input name="website" id="website" type="text" placeholder="Website">
                </div>
              </div>

              <p class="comment-form-submit">
                <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
              </p>
              
            </form>
          </div> <!-- end comment form -->

        </div> <!-- end col -->
        
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
            <ul class="post-list-small">
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-75">
                      <a href="single-post.html">
                        <img data-src="img/blog/review_post_1.jpg" src="img/blog/review_post_1.jpg" alt="" class=" lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">My First Impressions of iPhone X</a>
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