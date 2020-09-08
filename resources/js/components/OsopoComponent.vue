<template>
    <div class="row">

        <div class="col-6">
            <div class="row mt-3">
                <div class="col-12">
                    <label>Ваш номер телефона</label>
                    <the-mask :mask="['+### ### ### ###']" class="form-control" placeholder=""/>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <label for="">Типы рисков</label>
                    <select class="form-control" v-model="objectproSelected">
                        <option v-for="option in objectpro" v-bind:value="option.value">
                            {{ option.text }}
                        </option>
                    </select>
                </div>
            </div>

            <b-form-group label="Расположение вблизи населенных пунктов,охраняемых зон, рек, озер и.т.п">
                <b-form-radio v-model="selected" name="some-radios" value="1" size="lg">Нет</b-form-radio>
                <b-form-radio v-model="selected" name="some-radios" value="2" size="lg">Да</b-form-radio>
            </b-form-group>

            <div class="row mt-2">
                <div class="col-12">
                    <p>
                        Лимит ответственности по риску нанесения ущерба жизни и здоровью третьих лиц составляет 300000
                        сомов на одного человека.
                    </p>
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
                        <button class="btn btn-primary btn-lg" value="Расчитать" @click="calculation">Расчитать премию
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import {ModelSelect} from 'vue-search-select'

    export default {
        data() {
            return {
                count: 1,
                selected: 1,
                objectproSelected: null,
                tipAuto: null,
                tipPer: null,
                som: 0,
                objectpro: [
                    {
                        text: 'ведутся горные работы, работы по обогащению полезных ископаемых, а также работы в подземных условиях',
                        value: '10000000'
                    },
                    {
                        text: 'получаются расплавы черных, цветных металлов, горных пород и сплавы на основе этих расплавов',
                        value: '10000000'
                    },
                    {
                        text: 'используется оборудование, работающее под давлением более 0,07 МПа или при температуре нагрева воды 115 град. Цельсия и выше',
                        value: '7000000'
                    },
                    {
                        text: 'используются стационарно установленные и передвижные грузоподъемные механизмы, эскалаторы, канатные дороги, фуникулеры',
                        value: '1000000'
                    },
                    {
                        text: 'получаются, образуются, перерабатываются, используются, хранятся, транспортируются, уничтожаются, реализуются воспламеняющиеся, горючие, окисляющие, взрывчатые, токсичные и радиоактивные вещества; порядок отнесения к опасным производственным объектам, на которых используются указанные вредные и опасные вещества, устанавливается Правительством Кыргызской Республики',
                        value: '15000000'
                    },
                    {
                        text: 'ведутся захоронения отходов горно-металлургического производства, содержащих вещества, опасные для жизнедеятельности человека и окружающей среды',
                        value: '10000000'
                    },
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            calculation: function () {
                var summ = 0;
                if (this.selected == 1) {
                    summ = 0.144*this.objectproSelected/100
                }
                if(this.selected == 2){
                    summ = (0.144*1.5) * this.objectproSelected/100
                }

                var n = parseFloat(summ).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ");

                this.som = n;
            }
        },
        components: {
            ModelSelect,
        }
    }
</script>
