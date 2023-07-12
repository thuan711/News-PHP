@extends('layout')
@section('noidungchinh')
<section class="blog spad">
        <div class="container">
            <div class="row">
           
                
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/{{$tt->urlHinh}}"></div>
                        <div class="blog__item__text">
                            <img src="img/{{$tt->urlHinh}}" alt="">
                            
                            <h2>{{$tt->tieuDe}}</h2>
                            <h5>{{$tt->tomTat}}</h5>
                            <p>{{$tt->noiDung}}</p>
                        </div>
                    </div>
                </div>
            
            
        </div>
</section>
@endsection