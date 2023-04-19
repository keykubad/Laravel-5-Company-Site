<?php namespace App\Http\Controllers\admin;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Auth;
use Redirect;
use Hash;
use Input;
use File;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use Request;
use App\Moduller;
class ModullerController extends Controller {
    //ana kısım ilk ekran
    public function modulliste(){
        $moduller        =Moduller::paginate(5);
        $modulkac        =Moduller::all()->count();
       return  view('admin.moduller',compact('moduller','modulkac'));
    }
   public function modulkayit($id){
       $modul=Moduller::find($id);
       $modul->durum= Input::get('durum');
       $modul->save();
       if($modul->save()){
            return Redirect::back()->with(array('mesaj'=>'Modül durumu kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Modül durumu kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
   }

}
