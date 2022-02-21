<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Mail</title>
    <style>
        #msform {
            width: 800px;
            margin: 50px auto;
            position: relative;
            display: flex;
        }
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            margin: 0 2%;
            width: 50%;
        }
        /*inputs*/
        #msform p {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }
        /*headings*/
        .fs-title {
            font-size: 15px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form id="msform">
        <fieldset>
            <h2 class="fs-title">Основные данные</h2>
            <h3>1. Есть ли у Вас опыт работы в страховании?</h3>
            <p>{{$mess->insuranceExperience}}</p>
            <h3>2. Есть ли у Вас опыт работы с клиентами?</h3>
            <p>{{$mess->clientExperience}}</p>
            <h3>3. Работали ли Вы с компьютером?</h3>
            <p>{{$mess->compExperience}}</p>
            <h3>4. Чем вы занимаетесь в настоящее время?</h3>
            <p>{{$mess->about}}</p>
            <h3>5. Вы согласны пройти собеседование?</h3>
            <p>{{$mess->interviewReady}}</p>
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Контактная информация</h2>
            <h3>Фамилия</h3>
            <p>{{$mess->surname}}</p>
            <h3>Имя</h3>
            <p>{{$mess->name}}</p>
            <h3>Электронная почта</h3>
            <p>{{$mess->email}}</p>
            <h3>Контактный телефон</h3>
            <p>{{$mess->phone}}</p>
            <h3>Город</h3>
            <p>{{$mess->city}}</p>
            <h3>Адрес</h3>
            <p>{{$mess->address}}</p>
            <h3>Дата рождения</h3>
            <p>{{$mess->birthday}}</p>
        </fieldset>
    </form>
</body>
</html>

