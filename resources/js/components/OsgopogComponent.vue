<template>
    <div>

        <code-loader v-if="!loading"
                        :speed="3"
                        :animate="true"
        >

        </code-loader>

        <div v-else class="row">
            <div class="col-6">
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Ваш номер телефона</label>
                        <the-mask :mask="['+### ### ### ###']" class="form-control" placeholder="" v-model="phone" />

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Класс риска  </label>
                        <model-select :options="risk"
                                      class="form-control"
                                      placeholder="Выберите"
                                      name=""
                                      v-model="selectedRisk">
                        </model-select>

                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-12">
                        <label>Грузоподъемность автотранспортного средства </label>

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

            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="text-center">

                    <div class="row">
                        <div class="col-12">
                            <h2>Премия к оплате <span class="text-danger">{{som}} Сом</span></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary btn-lg" value="Расчитать" @click="calculation">Расчитать
                                премию
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


</template>
<script>
    import {ModelSelect} from 'vue-search-select'
    import { ContentLoader } from 'vue-content-loader';
    import { CodeLoader  } from 'vue-content-loader';

    export default {
        name: 'osgop',
        data() {
            return {
                vid:[
                    {text:'',value:1},
                    {text:'',value:2}
                ],

                loading:false,
                som: 0,
                administrator: 0,
                people: 0,
                personal: 0,
                proizvodstvo: 0,
                selectedPeriod: null,
                selectedRisk: null,
                selectedFond: null,

                classRisk: [
                    {
                        text: '2.5', value:
                            {
                                1:1500000, 2:500000, 3:500000, 4:1500000, 5:1500000, 6:1500000, 7:2000000, 8:1500000, 9:1500000
                            }
                    }, {
                        text: '5', value:
                            {
                                1:3000000, 2:100000, 3:100000, 4:3000000, 5:3000000, 6:3000000, 7:4000000, 8:3000000, 9:3000000
                            }
                    },{
                        text: '7.5', value:
                            {
                                1:5500000, 2:175000, 3:175000, 4:5500000, 5:5000000, 6:5500000, 7:7000000, 8:5000000, 9:5000000
                            }
                    },
                    {
                        text: '10', value:
                            {
                                1:8000000, 2:3250000, 3:2500000, 4:8000000, 5:7000000, 6:8000000, 7:10000000, 8:7000000, 9:7000000
                            }
                    },
                    {
                        text: '12.5', value:
                            {
                                1:10500000, 2:3250000, 3:3250000, 4:10500000, 5:9000000, 6:10500000, 7:13000000, 8:9000000, 9:9000000
                            }
                    },
                    {
                        text: '15', value:
                            {
                                1:13000000, 2:4000000, 3:4000000, 4:13000000, 5:11000000, 6:13000000, 7:16000000, 8:11000000, 9:11000000
                            }
                    },
                    {
                        text: '20', value:
                            {
                                1:17000000, 2:5000000, 3:5000000, 4:17000000, 5:13000000, 6:17000000, 7:20000000, 8:13000000, 9:13000000
                            }
                    },
                    {
                        text: '100', value:
                            {
                                1:20000000, 2:6000000, 3:6000000, 4:20000000, 5:16000000, 6:20000000, 7:24000000, 8:16000000, 9:16000000
                            }
                    }
                ],

                risk: [
                    {text:'Класс 1 - взрывчатые вещества',value:'1'},
                    {text:'Класс 2 - газы сжатые, сжиженные и растворенные под давлением',value:'2'},
                    {text:'Класс 3 - легковоспламеняющиеся жидкости',value:'3'},
                    {text:'Класс 4 - легковоспламеняющиеся вещества и материалы',value:'4'},
                    {text:'Класс 5 - окисляющие вещества и органические перекиси',value:'5'},
                    {text:'Класс 6 - ядовитые (токсичные) вещества',value:'6'},
                    {text:'Класс 7 - радиоактивные и инфекционные вещества',value:'7'},
                    {text:'Класс 8 - едкие и коррозийные вещества',value:'8'},
                    {text:'Класс 9 - прочие опасные вещества',value:'9'}
                ],
                fond: [
                    {value: '2.5', text: '2.5'},
                    {value: '5', text: '5'},
                    {value: '7.5', text: '7.5'},
                    {value: '10', text: '10'},
                    {value: '12.5', text: '12.5'},
                    {value: '15', text: '15'},
                    {value: '20', text: '20'},
                    {value: '100', text: '100'},
                ],
                period: [
                    {text: 'до 15 дней включительно', value: '10'},
                    {text: 'до 1 месяцев включительно', value: '20'},
                    {text: 'до 2 месяцев включительно', value: '30'},
                    {text: 'до 3 месяцев включительно', value: '40'},
                    {text: 'до 4 месяцев включительно', value: '50'},
                    {text: 'до 5 месяцев включительно', value: '60'},
                    {text: 'до 6 месяцев включительно', value: '70'},
                    {text: 'до 7 месяцев включительно', value: '75'},
                    {text: 'до 8 месяцев включительно', value: '80'},
                    {text: 'до 9 месяцев включительно', value: '85'},
                    {text: 'до 10 месяцев включительно', value: '90'},
                    {text: 'до 11 месяцев включительно', value: '95'},
                    {text: 'до 12 месяцев включительно', value: '100'},
                ]
            }
        },
        methods: {
            calculation: async function () {
                console.log('period '+this.selectedPeriod)
                console.log('risk '+this.selectedRisk)
                console.log('ves '+this.selectedFond)

                var ves = this.classRisk.filter(x => x.text == this.selectedFond)
                var summ = ves[0].value[this.selectedRisk]
                var period = this.period.filter(x=> x.value == this.selectedPeriod)

                console.log(summ )
                console.log(period[0].value)

                const data = {};

                this.som = summ * 0.01 * (period[0].value/100)
                this.som = parseFloat(this.som).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ")


                Object.assign(data, {'sum': this.som})
                Object.assign(data, {'type': 'osgopog'})
                Object.assign(data, {'phone': this.phone})
                Object.assign(data, {'Класс риска': ves[0].value[this.selectedRisk] })
                Object.assign(data, {'Вес': this.selectedFond})
                Object.assign(data, {'Период': period[0].text})

                await axios.post(process.env.MIX_HTTP + window.location.hostname + '/story', data);
            }
        },
        mounted() {
            setTimeout(() => {
                this.loading = true;
            }, 2000);
        },
        components: {
            ModelSelect,
            ContentLoader,
            CodeLoader
        }

    }
</script>

<style scoped>

</style>
