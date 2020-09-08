<template>
    <div class="row">

        <div class="col-6">
            <div class="row mt-3">
                <div class="col-12">
                    <label>Ваш номер телефона</label>
                    <the-mask :mask="['+### ### ### ###']" class="form-control" placeholder=""/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>Выберите тип вашего автотранспорта:</label>
                   <select v-model="tipAuto" class="form-control">
                       <option value="1.2">Легковые автомобили, автобусы, микроавтобусы</option>
                       <option value="0.5">Троллейбусы</option>
                   </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <label for="">Тип перевозки</label>
                    <select v-model="tipPer" class="form-control">
                        <option value="0.8">Внутригородские</option>
                        <option value="1.2">Междугородние и международные</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <label>Количество мест</label>
                    <input type="number" min="1" v-model="count" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-6 d-flex align-items-center justify-content-center">
            <div class="text-center">

                <div class="row">
                    <div class="col-12">
                        <h2 >Премия к оплате <span class="text-danger">{{som}} Сом</span></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12"><button class="btn btn-primary btn-lg" value="Расчитать" @click="calculation">Расчитать премию</button></div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                count:1,
                tipAuto:null,
                tipPer:null,
                som:0
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            calculation: function () {

               var t = (310.000*this.count)*0.045*this.tipAuto*this.tipPer*10

                // var adm = this.administrator * 0.03 * this.selectedFond * this.selectedPeriod;
                // var vspom = this.personal * 0.12 * this.selectedFond * this.selectedPeriod;
                // var proiz = this.proizvodstvo * 0.47 * this.selectedFond * this.selectedPeriod;
                // var som = (adm + vspom + proiz)/10000;
                var n = parseFloat(t).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ");

                this.som = n ;
            }
        },
    }
</script>
