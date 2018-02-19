<!DOCTYPE>
<html lang="ru">

<head>
    <title>Саша – full-stack разработчик</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }

        dl {
            display: table-row;
        }

        dt,
        dd {
            display: table-cell;
            padding: 5px 10px;
        }

    </style>
</head>

<body>
    <?php
        $userFirstname = 'Александра';
        $userLasttname = 'Смирнова';
        $userCityearOfBirth = 1985;
        $userCurrentYear = 2018;
        $userEmail = 'alexsashka2208@gmail.com';
        $userCity = 'Zelenograd';
        $userAbout = 'Full-stack разработчик';
        $userFullname = $userFirstname . ' ' . $userLasttname;
        $userAge = $userCurrentYear - $userCityearOfBirth;
       ?>
        <h1>Страница пользователя Александры</h1>
        <dl>
            <dt>Имя</dt>
            <dd>
                <?= $userFullname ?>
            </dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd>
                <?= $userAge ?>
            </dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd>
                <a href="mailto:alexsashka2208@gmail.com">
                    <?= $userEmail ?>
                </a>
            </dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd>
                <?= $userCity ?>
            </dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd>
                <?= $userAbout ?>
            </dd>
        </dl>
</body>

</html>
