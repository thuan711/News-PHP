@extends('layout')
@section('tieude')
    {{$title}}
@endsection
@section('noidungchinh')
<section class="blog spad">
        <div class="container">
            <h1>Các tin thuộc loại: {{$title}}</h1>
            <div class="row">
            @foreach($listtin as $tin)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/{{$tin->urlHinh}}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                            <h5>{{$tin->tieuDe}}</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li>{{ $listtin->onEachSide(2)->links()}}</li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
</section>
@endsection