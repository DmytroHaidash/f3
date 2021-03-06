<?php

return [
    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после: даты.',
    'after_or_equal' => ':attribute должен быть датой после или равен дате.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до: даты.',
    'before_or_equal' => ':attribute должен быть датой до или равен дате.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайтами.',
        'string' => ':attribute должен быть между :min и :max символами.',
        'array' => ':attribute должен содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и: другое должны быть разными.',
    'digits' => ':attribute должен быть :digits.',
    'digits_between' => ':attribute должен быть между :min и :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'exists' => 'Атрибут :selected недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должен быть больше чем :value.',
        'file' => ':attribute должен быть больше, чем :value в килобайтах.',
        'string' => ':attribute должен быть больше, чем :value символов.',
        'array' => ':attribute должен иметь больше чем :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен значению:',
        'file' => ':attribute должен быть больше или равен: значение в килобайтах.',
        'string' => ':attribute должен быть больше или равен символу: значение.',
        'array' => ':attribute должен иметь: элементы значения или более.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Атрибут selected: недействителен.',
    'in_array' => 'Поле :attributeа не существует в: другом.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным адресом IPv4.',
    'ipv6' => ':attribute должен быть действительным адресом IPv6.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => ':attribute должен быть меньше чем: значение.',
        'file' => ':attribute должен быть меньше чем: килобайт.',
        'string' => ':attribute должен быть меньше чем: значение символов.',
        'array' => ':attribute должен иметь меньше чем: значение элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должен быть меньше или равен значению:',
        'file' => ':attribute должен быть меньше или равен: значение в килобайтах.',
        'string' => ':attribute должен быть меньше или равен символу: значение.',
        'array' => ':attribute не должен содержать больше, чем: значения элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше, чем :max килобайт.',
        'string' => ':attribute не может быть больше чем :max символов.',
        'array' => ':attribute может содержать не более :max.',
    ],
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'mimetypes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее: мин.',
        'file' => ':attribute должен быть не менее: минимум килобайт.',
        'string' => ':attribute должен содержать не менее :min символов.',
        'array' => ':attribute должен содержать как минимум :min элементов.',
    ],
    'not_in' => 'Атрибут selected: недействителен.',
    'not_regex' => 'Формат :attribute неверен.',
    'numeric' => ':attribute должен быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Формат :attribute неверен.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute является обязательным, когда :other :value.',
    'required_unless' => 'Поле :attribute является обязательным, если: other не находится в :values.',
    'required_with' => 'Поле :attribute является обязательным при наличии: значения.',
    'required_with_all' => 'Поле :attribute является обязательным при наличии: значений.',
    'required_without' => 'Поле :attribute является обязательным, если: значения отсутствуют.',
    'required_without_all' => 'Поле :attribute является обязательным, если нет ни одного из: значений.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть: размер.',
        'file' => ':attribute должен иметь размер: килобайт.',
        'string' => ':attribute должен быть: размер символов.',
        'array' => ':attribute должен содержать: размер элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих значений: :values',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть допустимой зоной.',
    'unique' => ':attribute уже занят.',
    'uploaded' => 'Не удалось загрузить :attribute',
    'url' => 'Формат :attribute неверен.',
    'uuid' => ':attribute должен быть действительным UUID.',
    'permission' => 'У вас нет доступа для выполнения этой операции.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'на заказ сообщения',
        ],
    ],
    'attributes' => [
        'file' => 'Файл',
        'password' => 'Пароль',
        'title' => 'Заголовок',
        'name' => 'Имя',
        'country' => 'Страна',
        'city' => 'Город',
        'price' => 'Цена',
        'author_id' => 'Автор',
        'category_id' => 'Категория',
        'section_id' => 'Секция',
        'image' => 'Изображение',
        'phone' => 'Телефон',
        'message' => 'Сообщение',
        'confirmation' => 'Подтверждение'
    ],
];