<template>
    <form class="form">
        <h1 class="display-sm-4">
            Стать агентом
        </h1>

        <p class="intro">
            Если Вы решили стать страховым агентом, пожалуйста, ответьте на несколько вопросов. Это поможет нам узнать насколько вы подходите на должность агента.
        </p>

        <div class="row">
            <div class="col-md-6 col-xs-12 pt-4">
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>1. Есть ли у Вас опыт работы в страховании?</h4>
                        <div class="select-wrapper">
                            <select class="form-control" v-model="fields[0].value">
                                <option :value="item" v-for="(item, index) in insuranceExperience" :key="index">
                                    {{ item }}
                                </option>
                            </select>
                        </div>
                        <div v-if="!fields[0].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>2. Есть ли у Вас опыт работы с клиентами?</h4>
                        <div class="select-wrapper">
                            <select class="form-control" v-model="fields[1].value">
                                <option :value="item" v-for="(item, index) in clientExperience" :key="index">
                                    {{ item }}
                                </option>
                            </select>
                        </div>
                        <div v-if="!fields[1].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>3. Работали ли Вы с компьютером?</h4>
                        <div class="select-wrapper">
                            <select class="form-control" v-model="fields[2].value">
                                <option :value="item" v-for="(item, index) in computerExperience" :key="index">
                                    {{ item }}
                                </option>
                            </select>
                        </div>
                        <div v-if="!fields[2].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>4. Чем вы занимаетесь в настоящее время?</h4>
                        <textarea class="form-control textarea" placeholder="Расскажите чем вы занимаетесь в 2-3 предложениях"
                                  v-model.trim="fields[3].value"></textarea>
                        <div v-if="!fields[3].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>5. Вы согласны пройти собеседование?</h4>
                        <div class="select-wrapper">
                            <select class="form-control" v-model="fields[4].value">
                                <option :value="item" v-for="(item, index) in interviewReady" :key="index">
                                    {{ item }}
                                </option>
                            </select>
                        </div>
                        <div v-if="!fields[4].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h4>6. Контактная информация</h4>
                        <label>Фамилия</label>
                        <input  class="form-control" placeholder="Введите фамилию" v-model="fields[5].value"/>
                        <div v-if="!fields[5].valid" class="form-err-text">Введите фамилию</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Имя</label>
                        <input  class="form-control" placeholder="Введите имя" v-model="fields[6].value"/>
                        <div v-if="!fields[6].valid" class="form-err-text">Введите имя</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Электронная почта</label>
                        <input  type="email" class="form-control" placeholder="Ваша электронная почта" v-model="fields[7].value"/>
                        <div v-if="!fields[7].valid" class="form-err-text">Введите правильный формат почты</div>
                        <p class="form-tip">Мы ответим на почту в течение 1–3-х дней</p>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <label>Контактный телефон</label>
                        <the-mask :mask="['+### ### ### ###']" class="form-control" placeholder="+XXX XXX XXX XXX" v-model="fields[8].value"/>
                        <div v-if="!fields[8].valid" class="form-err-text">Введите номер</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Ваш город</label>
                        <div class="select-wrapper">
                            <select class="form-control" v-model="fields[9].value">
                                <option :value="item" v-for="(item, index) in branches" :key="'city' + index">
                                    {{ item }}
                                </option>
                            </select>
                        </div>
                        <div v-if="!fields[9].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>Адрес</label>
                        <input  class="form-control" placeholder="Введите ваш адрес" v-model="fields[10].value"/>
                        <div v-if="!fields[10].valid" class="form-err-text">Введите ваш адрес</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="control-label">Дата рождения</label>
                        <input type="date" class="form-control" placeholder="дд.мм.гггг" v-model="fields[11].value">
                        <div v-if="!fields[11].valid" class="form-err-text">Выберите вариант</div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary btn-lg" @click.prevent="validateForm">Отправить заявку
                    </button>
                </div>

            </div>
        </div>
    </form>
</template>

<script>
import axios from 'axios';

export default {
    name: "",
    data: () => ({
        branches: [
            'Бишкек', 'Ош'
        ],
        insuranceExperience: [
            'Нет','Да, в качестве агента','Да, в качестве сотрудника страховой компании',
        ],
        clientExperience: [
            'Нет','Да, в качестве продавца товаров','Да, в качестве продавца услуг','Да, в качестве сотрудника сервиса',
        ],
        computerExperience: [
            'Нет','Да, я — пользователь','Да, я — опытный пользователь','Да, в качестве сотрудника сервиса',
        ],
        interviewReady: [
            'Нет','Да'
        ],
        fields: [
            {
                name: 'insexp',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'cliexp',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'compexp',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'about',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'intready',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'surname',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'name',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'email',
                value: '',
                pattern: /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                valid: true,
            },
            {
                name: 'phone',
                value: '',
                pattern: /^\d{12}$/,
                valid: true,
            },
            {
                name: 'city',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'address',
                value: '',
                pattern: /.+/,
                valid: true,
            },
            {
                name: 'birthday',
                value: '',
                pattern: /.+/,
                valid: true,
            },
        ],
    }),
    methods: {
        validateForm() {
          this.fields.forEach(field => {
             if(!field.pattern.test(field.value) || field.value.length < 2) {
                 field.valid = false;
             } else {
                 field.valid = true;
             }
          });
          for(let i = 0; i < this.fields.length; i++) {
              if(this.fields[i].valid === false) {
                  break;
              }
              if(i === this.fields.length - 1 && this.fields[i].valid === true) {
                  this.sendForm();
              }
          }
        },
        sendForm() {
            let response = {
                insuranceExperience: this.fields[0].value,
                clientExperience: this.fields[1].value,
                compExperience: this.fields[2].value,
                about: this.fields[3].value,
                interviewReady: this.fields[4].value,
                surname: this.fields[5].value,
                name: this.fields[6].value,
                email: this.fields[7].value,
                phone: '+' + this.fields[8].value,
                city: this.fields[9].value,
                address: this.fields[10].value,
                birthday: this.fields[11].value,
            }
            this.fields.forEach(field => {
               field.value = '';
            });
            axios.post('./api/sendAgent',response);
            axios.post('./api/send-mail', response);
            alert('Ваша заявка отправлена!');
        },
    },
}
</script>

<style scoped>
    .form-err-text {
        color: red;
    }
    .intro {
        margin-bottom: 40px;
        font-size: 16px;
        line-height: 26px;
        color: #727171;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    @media (min-width: 768px) {
        .intro {
            width: 610px;
        }
    }
</style>
