<div class="swiper-container" style="
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;">
    <div class="swiper-wrapper" style="
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 350px;
    ">
        @foreach( $users as $user)
        <div class="swiper-slide" style="background-image:url('{{asset('storage/'.$user->avatar)}}')">
            <div class="fixed-bottom">
                <strong style="color:white;">{{$user->email}}</strong>
                <a href="#" class="btn btn-sm btn btn-outline-primary float-right mr-2 mb-2"><i
                        class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-sm btn btn-outline-primary float-right mr-2 mb-2"><i
                        class="fas fa-pen-alt"></i></a>
                <a href="#" class="btn btn-sm btn btn-outline-primary float-right mr-2 mb-2"><i
                        class="far fa-trash-alt"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<script>
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,

    },
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: '.swiper-pagination',
    },
});
</script>