<template>
    <swiper class="swiper mt-5" ref="$swiper" :options="swiperOption">
        <swiper-slide><img src="/img/slider/1.png" alt="..."></swiper-slide>
        <swiper-slide><img src="/img/slider/2.png" alt="..."></swiper-slide>
        <swiper-slide><img src="/img/slider/3.png" alt="..."></swiper-slide>
        <swiper-slide><img src="/img/slider/4.png" alt="..."></swiper-slide>
        <swiper-slide><img src="/img/slider/5.jpg" alt="..."></swiper-slide>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
    </swiper>
</template>
<script>
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'
    import 'swiper/css/swiper.css'

    export default {
        name: 'swiper-example-autoplay',
        data: function () {
            return {
                swiperOption: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    },
                    on: {
                        resize: () => {
                            this.changeSlidersCount();
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                }
            };
        },
        methods:{
            changeSlidersCount(){
                this.$refs.$swiper.$swiper.params.slidesPerView = window.innerWidth <= 767 ? 1 : window.innerWidth <= 991 ? 2 : 3;
            }
        },
        mounted() {
            this.changeSlidersCount();
        },
        components: {
            Swiper,
            SwiperSlide
        }
    }
</script>

<style scoped>

</style>
