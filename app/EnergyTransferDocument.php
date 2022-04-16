<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyTransferDocument extends Model
{
    protected $fillable = ['date_acquisition','street', 'nr_4', 'bus', 'plaat', 'postcode', 'ean_electricity', 'single_meter', 'nr', 'meter_type', 'nachtmeter', 'nr_1', 'dag', 'nachi', 'exclusief_nachtmeter', 'nr_2', 'space', 'digital_meter', 'nr_3', 'dag_1', 'nachi_1', 'dag_2', 'nachi_2', 'nee', 'do_you_have_budget', 'meter_nummer', 'meter_stand', 'nee_1', 'nee_2'
    , 'ondernemingsnr', 'first_name', 'name_3', 'company_name', 'tel', 'e_mail', 'straat', 'plaat_1', 'nr_5', 'bus_2', 'postcode_2', 'supplier_electricity', 'natural_gas'
    , 'nee_3', 'ondernemingsnr_1', 'first_name_1', 'name_4', 'company_name_1', 'tel_1', 'e_mail_1', 'straat_1', 'plaat_2', 'nr_6', 'bus_3', 'postcode_3', 'supplier_electricity_1', 'natural_gas_1', 'huurder', 'home_is_currently_used', 'home_is_currently_used_1', 'handtekening', 'handtekening_1'];
}
