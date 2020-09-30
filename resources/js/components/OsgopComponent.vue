<template>
    <div>
        <form ref="forms">
            <input type="hidden" name="_token" v-bind:value="csrf">

            <div class="row">
                <div class="col-6">
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Ваш номер телефона</label>
                            <the-mask :mask="['+### ### ### ###']" class="form-control" placeholder=""v-model="phone" />

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Вид деятельности</label>
                            <model-select :options="risk"
                                          class="form-control"
                                          placeholder="Выберите"
                                          name="vid"
                                          v-model="selectedRisk">
                            </model-select>

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="">Административно-управленческий персонал</label>
                            <input type="number" min="0" class="form-control" name="administrator"
                                   v-model="administrator">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="">Производственный персонал</label>
                            <input type="number" min="0" class="form-control" name="personal" v-model="proizvodstvo"
                                   placeholder="Годовой фонд оплаты труда">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="">Вспомогательный персонал</label>
                            <input type="number" min="0" class="form-control" name="personal" v-model="personal">
                        </div>
                    </div>


                    <div class="row mt-2">
                        <div class="col-12">
                            <label>Количество фондов труда</label>

                            <model-select :options="fond"
                                          class="form-control"
                                          placeholder="Выберите"
                                          name=""
                                          v-model="selectedFond">
                            </model-select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label>Период</label>

                            <model-select :options="period"
                                          class="form-control"
                                          placeholder="Выберите"
                                          name=""
                                          v-model="selectedPeriod">
                            </model-select>
                        </div>
                    </div>
<!--                    <div class="row mt-2">-->
<!--                        <div class="col-12">-->
<!--                            <label>Captcha</label>-->
<!--                            <form @submit.prevent="onSubmit">-->
<!--                                <vue-recaptcha-->
<!--                                    ref="invisibleRecaptcha"-->
<!--                                    @verify="onVerify"-->
<!--                                    sitekey="6LfcvSgTAAAAAOmxZDHc60aBnIFvNDEKYZXLCFV1">-->
<!--                                </vue-recaptcha>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->




                </div>
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <div class="text-center">

                        <div class="row">
                            <div class="col-12">
                                <h2>Премия к оплате <span class="text-danger">{{ som }} Сом</span></h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                                <span  class="btn btn-primary btn-lg" value="Расчитать" @click="calculation">Расчет
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </form>

    </div>


</template>
<script>
import {ModelSelect} from 'vue-search-select'
import VueRecaptcha from 'vue-recaptcha';

export default {
    name: 'osgop',
    data() {
        return {
            som: 0,
            administrator: 0,
            phone: null,
            people: 0,
            recaptchas:null,
            personal: 0,
            proizvodstvo: 0,
            selectedPeriod: null,
            selectedRisk: null,
            selectedFond: null,
            risk: [
                {text: 'Горнодобывающая промышленность', value: '0.47'},
                {text: 'Гостиницы и рестораны', value: '0.12'},
                {text: 'Здравоохранение и предоставление социальных услуг', value: '0.07'},
                {text: 'Обрабатывающая промышленность', value: '0.19'},
                {text: 'Образование', value: '0.02'},
                {
                    text: 'Операции с недвижимым имуществом, аренда и предоставление услуг потребителям',
                    value: '0.07'
                },
                {text: 'Предоставление коммунальных, социальных и персональных услуг', value: '0.08'},
                {text: 'Производство электроэнергии, газа и воды', value: '0.15'},
                {text: 'Рыболовство, рыбоводство', value: '0.21'},
                {text: 'Сельское хозяйство, охота и лесное хозяйство', value: '0.21'},
                {text: 'Строительство', value: '0.14'},
                {
                    text: 'Торговля; ремонт автомобилей, бытовых изделий и предметов личного пользования',
                    value: '0.11'
                },
                {text: 'Транспорт и связь', value: '0.08'},
                {text: 'Финансовая деятельность', value: '0.06'},
            ],
            fond: [
                {text: '1', value: '1.00'},
                {text: '2', value: '1.84'},
                {text: '3', value: '2.63'},
                {text: '4', value: '3.39'},
                {text: '5', value: '4.13'},
                {text: '6', value: '4.85'},
                {text: '7', value: '5.55'},
                {text: '8', value: '6.25'},
                {text: '9', value: '6.93'},
                {text: '10', value: '7.60'},
                {text: '11', value: '8.27'},
                {text: '12', value: '8.93'},
                {text: '13', value: '9.58'},
                {text: '14', value: '10.23'},
                {text: '15', value: '10.87'},
                {text: '16', value: '11.50'},
                {text: '17', value: '12.13'},
                {text: '18', value: '12.76'},
                {text: '19', value: '13.38'},
                {text: '20', value: '14.00'},

            ],
            period: [
                {text: 'до 1 месяца включительно', value: '20'},
                {text: 'от 1 до 2 месяцев включительно', value: '30'},
                {text: 'от 2 до 3 месяцев включительно', value: '40'},
                {text: 'от 3 до 4 месяцев включительно', value: '50'},
                {text: 'от 4 до 5 месяцев включительно', value: '60'},
                {text: 'от 5 до 6 месяцев включительно', value: '70'},
                {text: 'от 6 до 7 месяцев включительно', value: '75'},
                {text: 'от 7 до 8 месяцев включительно', value: '80'},
                {text: 'от 8 до 9 месяцев включительно', value: '85'},
                {text: 'от 9 до 10 месяцев включительно', value: '90'},
                {text: 'от 10 до 11 месяцев включительно', value: '95'},
                {text: 'свыше 11 месяцев', value: '100'},
            ]

        }
    },
    props: ['csrf'],
    methods: {
        onSubmit: function () {
            this.$refs.invisibleRecaptcha.execute()
        },
        onVerify: async function (response) {
            this.show = true
            var request = await axios.post(process.env.MIX_HTTP + window.location.hostname + '/recaptcha/',
                {
                    token: response,
                }
            );
            if (request.status) {
                this.recaptchas = true
                this.calculation()
            }
        },
        resets(){
            window.location.reload();
        },
        calculation: async function () {
            var adm = this.administrator * 0.03 * this.selectedFond * this.selectedPeriod;
            var vspom = this.personal * 0.12 * this.selectedFond * this.selectedPeriod;
            var proiz = this.proizvodstvo * this.selectedRisk * this.selectedFond * this.selectedPeriod;

            var som = (adm + vspom + proiz) / 10000;
            var n = parseFloat(som).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ");


            const data = {};

            var periodText = this.period.filter(x => x.value == this.selectedPeriod)
            var fondText = this.fond.filter(x => x.value == this.selectedFond)


            Object.assign(data, {'Административно-управленческий персонал': this.administrator})
            Object.assign(data, {'Количество фондов труда': fondText[0].text})
            Object.assign(data, {'Период': periodText[0].text})
            Object.assign(data, {'Производственный персонал': this.proizvodstvo})
            Object.assign(data, {'Вспомогательный персонал': this.personal})
            Object.assign(data, {'phone': this.phone})
            Object.assign(data, {'sum': this.som})
            Object.assign(data, {'type': 'osgop'})
            this.som = n;
            await axios.post(process.env.MIX_HTTP + window.location.hostname + '/story', data);

        }
    },
    mounted() {

    },
    components: {
        ModelSelect,
        VueRecaptcha
    }

}
</script>

<style scoped>

</style>
