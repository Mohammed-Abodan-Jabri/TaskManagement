<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'required' => 'هذا الحقل مطلوب *',
    'string' => 'يجب أن يكون نص',
    'max'=>'يجب أن يكون طول النص لايزيد عن 255 حرف',
    'boolean'=>'يجب أن يكون true أو false',
    'integer'=>'النسبة يجب أن تكون رقم',
    'min_percentage'=>' النسبة يجب أن لا تقل على الصفر (0)',
    'max_percentage'=>' النسبة يجب أن لا تزيد على (100)',
    'startTask'=>'يجب أن يكون نوع بداية المهمة تاريخ',
    'endTask'=>'يجب أن يكون نوع نهاية المهمة تاريخ',
    'after_or_equal'=>'يجب أن يكون تاريخ نهاية المهة بعد او يساوي تاريخ البداية',



    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
