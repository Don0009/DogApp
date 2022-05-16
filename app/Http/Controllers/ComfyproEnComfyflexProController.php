<?php

namespace App\Http\Controllers;

use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\ComfyproEnComfyflexPro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use \Mail;


class ComfyproEnComfyflexProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->hasRole('admin')) {
            $comfypro_en_comfyflex_pros = ComfyproEnComfyflexPro::all();
        } else {
            $comfypro_en_comfyflex_pros = ComfyproEnComfyflexPro::where('user_id', Auth::user()->id)->get();
        }

        return view('luminus/comfypro_en_comfyflex_pro.index', compact('comfypro_en_comfyflex_pros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $lang = $request->lang;
        // dd($lang);
        if ($lang == "du") {
            return view('luminus/comfypro_en_comfyflex_pro.create', compact('lang'));
        } elseif ($lang == "fr"){
            return view('luminus/comfypro_en_comfyflex_pro.create_fr', compact('lang'));
        }
        // return view('luminus/comfy_en_comfyflex.create');
        // return view('luminus/comfypro_en_comfyflex_pro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'client_number' => 'required',
            'contact_id' => 'required',
            'dealer_id' => 'required',
            'seller_id' => 'required',
            'present_to_luminus' => 'required',
            'client_number_1' => 'required',
            'company_form' => 'required',
            'company_number' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'address' => 'required',
            'nr' => 'required',
            'bus' => 'required',
            'post_code' => 'required',
            'township' => 'required',
            'e_mail' => 'required',
            'tel_nr' => 'required',
            'faxnr' => 'required',
            'gsm_nr' => 'required',
            'address_1' => 'required',
            'nr_1' => 'required',
            'bus_1' => 'required',
            'deep' => 'required',
            'post_code_1' => 'required',
            'township_1' => 'required',
            'ean_number' => 'required',
            'current_supplier' => 'required',
            'name_your_network_operator' => 'required',
            'ean_number_1' => 'required',
            'current_supplier_1' => 'required',
            'name_your_network_operator_1' => 'required',
            'payment_for_electricity' => 'required',
            'advance_gas' => 'required',
            'kWh_dag' => 'required',
            'kWh_nacht' => 'required',
            'kWh_excl_nacht' => 'required',
            'annual_consumption' => 'required',
            'naam_1' => 'required',
            'place_1' => 'required',

            'referte' => 'required',
            'name_1' => 'required',
            'adres' => 'required',
            'post_code_2' => 'required',
            'stad' => 'required',
            'land' => 'required',
            'iban' => 'required',
            'code' => 'required',
            'datum' => 'required',
            'plaats' => 'required',
            'client_9' => 'required',
        ]);

          // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){


            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();

        if(isset($data['desired_switchover_date_1'])){
            $data['desired_switchover_date_1'] = Carbon::parse($data['desired_switchover_date_1']);
        }
        if(isset($data['date_1'])){
            $data['date_1'] = Carbon::parse($data['date_1']);
        }
        if(isset($data['desired_switchover_date'])){
            $data['desired_switchover_date'] = Carbon::parse($data['desired_switchover_date']);
        }

        if(isset($data['datum'])){
            $data['datum'] = Carbon::parse($data['datum']);
        }
if ($request->lang=="fr")
        {
            $pdf = new Pdf(public_path('unfilled_forms/luminus/CECFP_F.pdf'), [
                //            'command' => '/some/other/path/to/pdftk',
                            // or on most Windows systems:
                            // 'command' => '/usr/bin/pdftk',
                           'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
                //            'useExec' => true,  // May help on Windows systems if execution fails

            ]);
        }
        else{
            $pdf = new Pdf(public_path('unfilled_forms/luminus/CECFP_D.pdf'), [
                //            'command' => '/some/other/path/to/pdftk',
                            // or on most Windows systems:
                            // 'command' => '/usr/bin/pdftk',
                           'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
                //            'useExec' => true,  // May help on Windows systems if execution fails

            ]);
        }

        // dd($pdf);

        // data copied from Orange

        $data=ComfyproEnComfyflexPro::create($data);

        $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


            $mail =  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
                $message->to('bazighminhas1@gmail.com')
                    ->subject("You have got a Orange Internet TV lead...!")
                    ->cc(['lasha@studiodlvx.be'])
            //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                    ->attach(public_path($pdf_name), [
                        'as' => 'name.pdf',
                        'mime' => 'application/pdf',
                    ]);
                $message->from('no-reply@ecosafety.nyc');
            });
            // Mail Code Ends
                    dd($mail);

        // if(isset($data['date_of_birth'])){
        //     $data['date_of_birth'] = Carbon::parse($data['date_of_birth']);
        // }



        ComfyproEnComfyflexPro::create($data);
        return redirect()->route('comfypro_en_comfyflex_pro.index')->with('success','Comfypro En Comfyflex Pro created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComfyproEnComfyflexPro  $comfyproEnComfyflexPro
     * @return \Illuminate\Http\Response
     */
    public function show(ComfyproEnComfyflexPro $comfyproEnComfyflexPro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComfyproEnComfyflexPro  $comfyproEnComfyflexPro
     * @return \Illuminate\Http\Response
     */
    public function edit(ComfyproEnComfyflexPro $comfyproEnComfyflexPro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComfyproEnComfyflexPro  $comfyproEnComfyflexPro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComfyproEnComfyflexPro $comfyproEnComfyflexPro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComfyproEnComfyflexPro  $comfyproEnComfyflexPro
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComfyproEnComfyflexPro $comfyproEnComfyflexPro)
    {
        //
    }
}
