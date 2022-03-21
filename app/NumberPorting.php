<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumberPorting extends Model
{
    protected $fillable = ['subscription', 'language', 'title', 'customer_type', 'name', 'f_name', 'street', 'no', 'box', 'postal_code', 'town', 'country', 'id_card', 'mail', 'busines', 'company_number', 'legal_status', 'company_name', 'client_num', 'contact_person', 'card_1', 'mobile_number_1', 'sim_number_old_1', 'sim_number_orange_1', 'customer_number_1', 'card_2', 'mobile_number_2', 'sim_number_old_2', 'sim_number_orange_2', 'customer_number_2', 'card_3', 'mobile_number_3', 'sim_number_old_3', 'sim_number_orange_3', 'customer_number_3', 'duplicate', 'date'];
}
