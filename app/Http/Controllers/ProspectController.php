<?php

namespace App\Http\Controllers;

use Mail;
use Redirect;
use App\Models\User;
use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Mail\EmailConfirmation;
use MercurySeries\Flashy\Flashy;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\ProspectFormRequest;
use App\Notifications\InscriptionProspect;
use Illuminate\Notifications\Notification;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospects=Prospect::all();
        $totalProspect=Prospect::count();

        return view('welcome')->with(['totalProspect'=>$totalProspect]);
       // return view('prospects.index', compact('prospects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProspectFormRequest $request)
    {
        $prospect = Prospect::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email
        ]);


       
     $prospect->notify(new InscriptionProspect($request->prenom));
       
       if($prospect){
           $arr = array('msg' => 'Merci de votre inscription ! Nous vous avons envoyé un mail.', 'status' => true);
       }else {
        $arr = array('msg' => 'Cet email existe déjà.', 'status' => true);
       }
       return Response() ->json($arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendMail()
    {

        return view('emails.envoi');
    }
}
