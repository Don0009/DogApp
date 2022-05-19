<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrangeInternetTv;
use App\OrangeInternetHomeDu;
use App\MobilePhone;
use App\NumberPortaingDu;
use App\NumberPorting;
use App\InternetHome;
use App\ContractApp;
use App\TelenetQuestion;
use App\Telenet_contractApp;
use App\TelenetNewSub;
use App\ApplicationForm;
use App\MobileApplication;
use App\Octa;



















class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

      $orange_internet_tv = OrangeInternetTv::count();
       $orange_internet_home = InternetHome::count();
       $orange_mobile = MobilePhone::count();
       $orange_NumberPorting = NumberPorting::count();
       $orange_NumberPortingDu = NumberPortaingDu::count();


            $orange_all = $orange_internet_tv + $orange_internet_home + $orange_mobile + $orange_NumberPorting + $orange_NumberPortingDu ;


                        //dd($orange_all);


                        // telenet


       $Telenet_new_sub = ContractApp::count();
       $Telenet_question = TelenetQuestion::count();
       $Telenet_contractApp = TelenetNewSub::count();


       $telenet_all =  $Telenet_new_sub + $Telenet_question + $Telenet_contractApp ;



                     //  dd($telenet_all);


                     //Scarlet

       $scarlet_app = ApplicationForm::count();
       $scarlet_mob = MobileApplication::count();


       $scarlet_all =  $scarlet_app + $scarlet_mob ;



                    //Octa

                    $octa_all = Octa::count();



        return view('home', compact('orange_all', 'telenet_all', 'scarlet_all', 'octa_all' ));
    }
}
