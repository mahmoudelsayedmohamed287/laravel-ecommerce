<!-- New line required  -->

@if(count($result['commonContent']['homeBanners'])>0)
    @foreach(($result['commonContent']['homeBanners']) as $homeBanners)
    
    @if($homeBanners->type==1)
@if($homeBanners->status==1)
    
    <div class="new-product">
	<a title="Banner Image" href="{{ $homeBanners->banners_url}}"><div class="like-bnr" style="background-image: url('{{asset('').$homeBanners->banners_image}}');"></div></a>
    </div>
@endif
    @endif
    
     @if($homeBanners->type==2)
    @if($homeBanners->status==1)
    <a title="Banner Image" href="{{ $homeBanners->banners_url}}"><div class="week-sale-bnr" style="background-image: url('{{asset('').$homeBanners->banners_image}}');"></div></a>
@endif
    @endif
    
    @endforeach
@endif





