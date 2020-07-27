<template>

    <div class="bd-example">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active w-100"
                     style="background-image:url('/img/1-1.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:625px">

                    <div class="container">
                        <div class="row pt-5 mt-5" style="color:#fff">
                            <div class="col-12">
                                <p class="display-4">
                                    Страхование путешествия
                                </p>
                                <p class="lead">
                                    Мы сделаем все возможное, чтобы ваше пребывание <br>
                                    за рубежом принесло вам только положительные эмоции!
                                </p>

                            </div>
                        </div>
                        <div class="row pt-5 mt-5" style="">
                            <div class="col-3 ">
                                <button type="button" class="btn btn-light btn-lg btn-block">Здоровье</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block p-2">Обязательное
                                    страхование
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block">Авто</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block ">Имущество</button>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="carousel-item w-100"
                     style="background-image:url('/img/2-2.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:625px">

                    <div class="container">
                        <div class="row pt-5 mt-5" style="color:#fff">
                            <div class="col-12">
                                <p class="display-4">
                                    Страхование квартир и домов
                                </p>
                                <p class="lead">
                                    Пожар, потоп, грабители или стихийное бедствие <br>
                                    — эти проблемы уже не страшны.<br>
                                    Защитите свое
                                </p>

                            </div>
                        </div>
                        <div class="row pt-5 mt-5" style="">
                            <div class="col-3 ">
                                <button type="button" class="btn btn-light btn-lg btn-block">Здоровье</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block p-2">Обязательное
                                    страхование
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block">Авто</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block ">Имущество</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="carousel-item  w-100"
                     style="background-image:url('/img/3-3.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:625px">
                    <div class="container">
                        <div class="row pt-5 mt-5" style="color:#fff">
                            <div class="col-12">
                                <p class="display-4">
                                    КАСКО
                                </p>
                                <p class="lead">
                                    Это защита для вашего автомобиля от множества <br>
                                    рисков:
                                    от мелких царапин до угона.

                                </p>

                            </div>
                        </div>
                        <div class="row pt-5 mt-5" style="">
                            <div class="col-3 ">
                                <button type="button" class="btn btn-light btn-lg btn-block">Здоровье</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block p-2">Обязательное
                                    страхование
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block">Авто</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light btn-lg btn-block ">Имущество</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
                banners: ['/1.jpg', '/2.jpg', '/3.jpg'],
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

</style>
