@extends('layouts.master')

@section('content')
 <!--== Start Page Header Area ==-->

<div class="breadcrumb-area">
    <div class="container">
        <ol class="default-breadcrumb">
            <li class="crumb">
              <div class="link"><a href="/" class="fa fa-home"></a></div>
            </li>
            <li class="crumb active">
                <div class="link"><span aria-current="location">{{$slug1->caption ?? $slug1 }}</span></div>
            </li>
            @if(isset($slug2))
                <li class="crumb active">
                    <div class="link"><span aria-current="location">{{$slug2->caption ?? $slug2 }}</span></div>
                </li>
            @endif
            
        </ol>
    
    </div>
</div>   
<!--== End Page Header Area ==-->


    <div class="gallery">
        <div class="container">
            <div class="gallery-view">
                <div class="row" id="lightgallery">
                    @foreach($photos as $photo)
                    <div class="item col-md-4" data-src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}"
                        data-sub-html="<h4>Employment Link</h4>">
                        <a href="">
                            <img src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}" alt="Employment Link" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
