<?php namespace event\event\components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use event\event\models\Event;
use event\event\models\Type;
use event\event\models\Sub;
use event\event\models\Periode;
use event\event\models\SubList;
use demande\demande\models\DemandeAnnullationEvent;
use event\event\models\AccessEvent;
use event\event\models\NotifDemande;
use Mail;
use Flash;
use Db;
use Config;
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class ManageEvent extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ManageEvent',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    public function loadpEpirerEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    public function onAnnule(){
        $event_id=Input::get('event_id');
        $user_id=Input::get('user_id');
        $annule=Input::get('annule');
        if($annule==true){
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['annule_demande' => false]);
            Db::table('demande_demande_demande_annulation_event')->where('event_id',$event_id)->delete();
        }else{
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['annule_demande' => true]);
            $notif=new NotifDemande();
            $notif->save();
            $event=Db::table('event_event_')
            ->where('id', $event_id)->increment('demande_notif',1);
            $annuleDemande=new DemandeAnnullationEvent();
            $annuleDemande->user_id=$user_id;
            $annuleDemande->event_id=$event_id;
            $annuleDemande->save();
        }
       
       
        return Redirect::back();
    }
    public function onActive(){
        $event_id=Request::segment(2);
       // dd(Request::segment(2));
        $email=Input::get('email');
       // dd($email);
        $user = Db::table('users')->where('email', Input::get('email'))->first();
        if($user){
            $accesEven=new AccessEvent();
            $accesEven->user_id=$user->id;
            $accesEven->event_id=$event_id;
            $accesEven->save();
            $vars = ['name' => 'Joe', 'user' => 'Mary'];
           // $email=Input::get('email');
            Mail::send('event.event::mail.message', $vars, function($message) {
    
                $message->to(Input::get('email'), 'Admin Person');
                $message->subject('Invitation de suivre un évènement');
    
            });
            return Redirect::back();

        }else{
            return Redirect::to('/email_not_found');
        }
       
    }
    public function loadUrl(){
        return Config::get('app.url');
    }
    public function onPromo(){
        $event_id=Input::get('event_id');
        $promo=Input::get('promo');
        if($promo==true){
        }else{
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['promo' => true]);
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['code_promo' => str_random(40)]);
        }
       
       
        return Redirect::back();
    }
   
}
