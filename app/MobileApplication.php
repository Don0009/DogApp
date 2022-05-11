<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function Ramsey\Uuid\v1;

class MobileApplication extends Model
{
    protected $fillable = [
        'user_id', 'form_lang', 'f_name', 'name', 'id_card_number',
        'adress', 'no', 'box', 'postal_code', 'city',
        'phone', 'gsm', 'mail', 'date_of_birth', 'gender',
        'language', 'vat', 'new_sim_number', 'mobile_subscription', 'subscription1',
        'subscription2', 'subscription3', 'subscription4', 'subscription5', 'subscription6',
        'sub_name1', 'sub_name2', 'sub_name3', 'sub_name4', 'sub_name5',
        'new_num1', 'new_num2', 'new_num3', 'new_num4', 'new_num5',
        'num_transfer1', 'num_transfer2', 'num_transfer3', 'num_transfer4', 'num_transfer5',
        'payment_method', 'iban_number', 'name_account_holder', 'submitted_contact', 'made_in',
        'the', 'dealer_reference', 'agent', 'mob_num1',
        'current_payment_method1', 'current_sim_number1', 'name1', 'f_name1', 'customer_number1',
        'current_operator1', 'date1', 'mob_num2', 'current_payment_method2',
        'current_sim_number2', 'name2', 'f_name2', 'customer_number2', 'current_operator2',
        'date2',  'mob_num3', 'current_payment_method3', 'current_sim_number3',
        'name3', 'f_name3', 'customer_number3', 'current_operator3', 'date3',
        'mob_num4', 'current_payment_method4', 'current_sim_number4', 'name4',
        'f_name4', 'customer_number4', 'current_operator4', 'date4',
        'mob_num5', 'current_payment_method5', 'current_sim_number5', 'name5', 'f_name5',
        'customer_number5', 'current_operator5', 'date5'







    ];
}
