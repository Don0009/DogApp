<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EngieContract extends Model
{
    protected $fillable =['company_name','legal_form','name','first_name','client_number','nace_code','tel','gsm','e_mail','you_wish_to_receive','you_wish_to_be_informed'
    ,'btw_be','rpr','company_name_1','legal_form_1','name_1','first_name_1','street','no','bus','postcode','place','documnet_id','electrabel_sa_1','electrabel_sa_2'
    ,'street_1','no_1','floor','bus_1','apartment','post_code','place_1','electricity','natural_gas','excluding_night','gemengd_professioneel_verbruik'
    ,'only_professional_use','in_case_of_moving_house','you_already_have_contract','clear_selection'
    ,'you_move_or_build','you_already_have_an_electricity_contract','you_want_to_change_your_existing','you_want_a_contract_for_an_extra'
    ,'you_move_or_build_1','you_already_have_an_electricity_contract_1','you_want_to_change_your_existing_1','you_move_or_build_2','you_already_have_an_electricity_contract_2'
    ,'you_want_to_change_your_existing_2','you_want_to_change_your_existing_3','place_2','desired_start_date','clear_selection_1','you_move_or_build_3','you_already_have_an_electricity_contract_3','you_want_to_change_your_existing_4'
    ,'you_want_a_contract_for_an_extra_1','you_move_or_build_4','you_already_have_an_electricity_contract_4','you_want_to_change_your_existing_5','you_move_or_build_5','you_already_have_an_electricity_contract_5','you_want_to_change_your_existing_6'
    ,'place_3','desired_start_date_1','valid_for_the_two_energies','code_p','monthly','bimonthly','quarterly_advance'
    ,'by_e_mail','per_post','by_bank_transfer','via_domiciliëring','through_a_new','debit_account_number','drawn_up','of_which_the_customer','handtekening'
    ,'do_not_wish_to_receive_commercial_communications'];
}
