<template>
    <div class="bd-example">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active w-100"
                     style="background-image:url('/img/2.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center center;height:625px">
                    <div class="container">
                        <div class="row pt-5 mt-5" style="color:#fff">
                            <div class="col-12">
                                <p class="display-sm-4">
                                    Нам 15 лет!
                                </p>
                                <p class="lead">
                                    Мы сделаем все возможное, чтобы ваше пребывание <br>
                                    за рубежом принесло вам только положительные эмоции!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    import {Swiper, SwiperSlide, directive} from 'vue-awesome-swiper'
    import 'swiper/css/swiper.css'

    export default {
        name: 'swiper-example-autoplay',
        data() {
            return {
                swiperOption: {
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
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
    .bd-example {
        position: relative;
    }
</style>
