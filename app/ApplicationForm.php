<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $fillable = [
        'user_id', 'form_lang', 'f_name', 'name', 'id_card_number', 'adress', 'no', 'box', 'postal_code', 'commune', 'type_of_habitat', 'stage', 'phone', 'gsm', 'mail', 'date_of_birth', 'gender', 'language', 'society', 'vat', 'internet_connection', 'operator', 'your_subscription', 'telephony_day_1', 'telephony_day_2', 'telephony_hour_1', 'telephony_hour_2', 'mobile_tele_day_1', 'mobile_tele_day_2', 'fixe_telephony_hour_1', 'fixe_telephony_hour_2', 'decoder_1', 'decoder_2', 'allsport_1', 'allsport_2', 'movies_series_1', 'movies_series_2', 'total_one_time_costs_vat', 'total_monthly_costs_vat', 'digital_tv', 'type_number',  'current_phone_number', 'obt', 'other', 'client_number', 'install_adress', 'install_no', 'install_box', 'install_postal_code', 'install_commune', 'payment_method', 'iban_number', 'name_account_holder', 'submitted_contact', 'made_in', 'the', 'contact_date', 'signature', 'sign_customer_holder', 'dealer_reference', 'agent', 'undersigned', 'main_line', '2nd_line', 'holder_no', 'street',

        'number', 'add_box', 'add_postal_code', 'add_commune', 'vat_number', 'current_operator', 'cus_number', 'signature_1', 'signature_owner', 'contact_date_1'

    ];
}
