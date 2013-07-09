<?php

return array(
    array(
        'value'       => '%RELAY_URL%',
        'title'       => 'URL',
        'description' => 'Значение для настройки SOAP-протокола в личном кабинете Qiwi',
    ),
    array(
        'value'       => '%RELAY_URL%?result=success',
        'title'       => 'URL для отправки в случае успешной оплаты счёта',
        'description' => 'Пользователь будет перенаправлен на этот URL в случае успешной оплаты счёта.<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Qiwi.</strong>',
    ),
    array(
        'value'       => '%RELAY_URL%?result=fail',
        'title'       => 'URL для отправки в случае ошибки',
        'description' => 'Пользователь будет перенаправлен на этот URL в том случае, если при оплате счета произошла ошибка.<br><strong>Указанный в этом поле адрес скопируйте и сохраните в соответствующем поле внутри вашего аккаунта Qiwi.</strong>',
    ),
);
