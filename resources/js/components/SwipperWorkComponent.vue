<template>
    <swiper class="swiper mt-5" :options="swiperOption">
        <swiper-slide>
            <img src="/img/work/1.png" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="/img/work/2.png" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="/img/work/3.png" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="/img/work/4.png" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="/img/work/5.png" alt="">
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </swiper>
</template>
<script>
    import {Swiper, SwiperSlide, directive} from 'vue-awesome-swiper'
    import 'swiper/css/swiper.css'

    export default {
        name: 'swiper-example-autoplay',
        data() {
            return {
                swiperOption: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    }
                }

            }
        },
        mounted() {
            console.log('Current Swiper instance object', this.mySwiper)
            // this.mySwiper.slideTo(3, 1000, false)
        },
        components: {
            Swiper,
            SwiperSlide
        },
        directives: {
            swiper: directive
        }
    }
</script>

<style scoped>

</style>
