@extends('layout')
@section('noidungchinh')
<section class="blog spad">
        <div class="container">
            <div class="row">
            <article class="col-sm-9">
    @foreach($data as $tin)
        @if($loop->iteration <= 3)
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/{{$tin->urlHinh}}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                            <h5>{{$tin->tieuDe}}</h5>
                            <p>{{$tin->tomTat}}</p>
                            <a href="/tin/{{$tin->id}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</article>
            
                <aside class="col-sm-3">
					<div class="card mt-1 ml-n2 mr-n2">
						<div class="card-header font-weight-bold"><i class="fas fa-list"></i> DANH MỤC
					</div>
						@foreach ($loai as $lo)
						<div class="card-body p-0">
							<ul class="list-group">
								<li class="list-group-item">
									<a href="/loai/{{$lo->id}}">{{$lo->ten}}</a>
								</li>
							</ul>
						</div>
						@endforeach
					</div>
				</aside>
            </div>

        </div>
</section>
@endsection