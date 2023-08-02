@extends('layout')
@section('tieude')
    Liên hệ
@endsection
@section('noidungchinh')
<!-- Map Begin -->
<!-- Page Title -->
<section class="page-title" style="background-image: url(img/blog/contact.jpg);">
      <div class="full-overlay"></div>
      <div class="container">
        <div class="page-title__holder">
          <h1 class="page-title__title">Liên hệ</h1>
          <p class="lead white">AhaMag được thành lập vào năm 2001 và chúng tôi vẫn đang kinh doanh. Còn về điều này thì sao, chúng tôi cung cấp cho bạn tạp chí tốt nhất trên thị trường.</p>
        </div>        
      </div>
    </section>

    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-12 blog__content mb-30">          
          <div class="row justify-content-md-center">
            <div class="col-lg-8">

              <h3>Liên hệ với chúng tôi</h3>
        

              <!-- Contact Form -->
              <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="/guilienhe">
                <div class="contact-name">
                  <label for="name">Tên <abbr title="required" class="required">*</abbr></label>
                  <input name="ht" id="name" type="text">
                </div>
                <div class="contact-email">
                  <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                  <input name="em" id="email" type="email">
                </div>
                <div class="contact-message">
                  <label for="message">Nội dung <abbr title="required" class="required">*</abbr></label>
                  <textarea id="message" name="nd" rows="7" required="required"></textarea>
                </div>

                <input type="submit" class="btn btn-lg btn-color btn-button" value="Gửi" id="submit-message">
                <div id="msg" class="message"></div>
              </form>

            </div>
          </div>
        </div> <!-- end col -->
      
      </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection