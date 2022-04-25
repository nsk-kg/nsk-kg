<template>
    <div class="bd-example">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active w-100"
                     style="background-image:url('/img/main-photo.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center center;height:625px">
                    <div class="container">
                        <div class="row pt-5 mt-5" style="color: black">
                            <div class="col-12">
                                <p class="display-sm-4">
                                    15 лет успешной работы <br>
                                    на страховом рынке <br>
                                    Кыргызской Республики!
                                </p>
                                <p class="lead">
                                    Каждый день нас преследуют непредвиденные ситуации. <br>
                                    Мы хотим, чтобы вы и ваше имущество были <br>
                                    всегда защищены от влияния внешних факторов.
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
