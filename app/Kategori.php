<?php namespace App;

/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Request;
use URL;
    class Kategori
{
       public static function generate()
    {
        $menus = Sayfalar::WhereMainmenu()->where('sayfadil', '=', 'tr')->where('durum', '=', '1')->orderBy('sira', 'asc')->get();
        //ek dilleri çekiyoruz
        if(Request::segment(1)=="en"){
            $menus = Sayfalar::WhereMainmenu()->where('sayfadil', '=', 'en')->where('durum', '=', '1')->orderBy('sira', 'asc')->get();
        }
        if(Request::segment(1)=="de"){
            $menus = Sayfalar::WhereMainmenu()->where('sayfadil', '=', 'de')->where('durum', '=', '1')->orderBy('sira', 'asc')->get();
        }
        if(Request::segment(1)=="fr"){
            $menus = Sayfalar::WhereMainmenu()->where('sayfadil', '=', 'fr')->where('durum', '=', '1')->orderBy('sira', 'asc')->get();
        }
        foreach ($menus as $menu):
        if(Request::segment(1)=="en"){
             $url=URL::to('/en/sayfa/'. $menu->sayfaurl .'');
            if($menu->modulid > 0){
                if(Request::segment(3)==$menu->sayfaurl){
                    echo '<li class="selected"><a href="'. $url ."/".$menu->id.'"> ' . $menu->sayfaadi . '</a>';
                }else{
                    echo "<li><a href='". $url ."/".$menu->id."'> " . $menu->sayfaadi . "</a>";
                }
            }else{
                echo "<li><a href='". $url ."'> " . $menu->sayfaadi . "</a>";
            }
        }elseif(Request::segment(1)=="de"){
            $url=URL::to('/de/sayfa/'. $menu->sayfaurl .'');
                if(Request::segment(3)==$menu->sayfaurl){
                    echo '<li class="selected"><a href="'. $url ."/".$menu->id.'"> ' . $menu->sayfaadi . '</a>';
                }else{
                    echo "<li><a href='". $url ."/".$menu->id."'> " . $menu->sayfaadi . "</a>";
                }
        }elseif(Request::segment(1)=="fr"){
            $url=URL::to('/fr/sayfa/'. $menu->sayfaurl .'');
             if($menu->modulid > 0){
                if(Request::segment(3)==$menu->sayfaurl){
                    echo '<li class="selected"><a href="'. $url ."/".$menu->id.'"> ' . $menu->sayfaadi . '</a>';
                }else{
                    echo "<li><a href='". $url ."/".$menu->id."'> " . $menu->sayfaadi . "</a>";
                }
            }else{
                echo "<li><a href='". $url ."'> " . $menu->sayfaadi . "</a>";
            }
        }else{
            $url=URL::to('sayfa/'. $menu->sayfaurl .'');
            if($menu->modulid > 0){
                if(Request::segment(2)==$menu->sayfaurl){
                    echo '<li class="dropdown"><a href="'. $url ."/".$menu->id.'"> ' . $menu->sayfaadi . '</a>';
                }else{
                    echo "<li class='dropdown'><a href='". $url ."/".$menu->id."'> " . $menu->sayfaadi . "</a>";
                }
            }else{
                if(Request::segment(2)==$menu->sayfaurl){
                    echo '<li class="dropdown"><a href="'. $url .'"> ' . $menu->sayfaadi . '</a>';
                }else{
                    echo "<li class='dropdown'><a href='". $url ."'> " . $menu->sayfaadi . "</a>";
                }
               
            }
        }
            
            static::recursive($menu->id);
            echo "</li>";

        endforeach;

    }
    /**
     * @param int $id
     */
    private static function recursive($id)
    {
        $menu = Sayfalar::findOrFail($id);

                //ek dilleri çekiyoruz
     
        if ( $menu->submenus->count() )
        {
            echo '<ul>';
            foreach ($menu->submenus as $submenu):
                    if(Request::segment(1)=="en"){
                        $url=URL::to('/en/sayfa/'. $submenu->sayfaurl .'');
                        if($submenu->modulid > 0){
                            if(Request::segment(2)==$submenu->sayfaurl){
                                echo '<li class="selected"><a href="'. $url ."/".$submenu->id.'"> ' . $submenu->sayfaadi . '</a>';
                            }else{
                                echo "<li><a href='". $url ."/".$submenu->id."'> " . $submenu->sayfaadi . "</a>";
                            }
                        }else{
                            echo "<li><a href='". $url ."'> " . $submenu->sayfaadi . "</a>";
                        }
                    }elseif(Request::segment(1)=="de"){
                        $url=URL::to('/de/sayfa/'. $submenu->sayfaurl .'');
                         if($submenu->modulid > 0){
                            if(Request::segment(2)==$submenu->sayfaurl){
                                echo '<li class="selected"><a href="'. $url ."/".$submenu->id.'"> ' . $submenu->sayfaadi . '</a>';
                            }else{
                                echo "<li><a href='". $url ."/".$submenu->id."'> " . $submenu->sayfaadi . "</a>";
                            }
                        }else{
                            echo "<li><a href='". $url ."'> " . $submenu->sayfaadi . "</a>";
                        }
                    }elseif(Request::segment(1)=="fr"){
                        $url=URL::to('/fr/sayfa/'. $submenu->sayfaurl .'');
                        if($submenu->modulid > 0){
                            if(Request::segment(2)==$submenu->sayfaurl){
                                echo '<li class="selected"><a href="'. $url ."/".$submenu->id.'"> ' . $submenu->sayfaadi . '</a>';
                            }else{
                                echo "<li><a href='". $url ."/".$submenu->id."'> " . $submenu->sayfaadi . "</a>";
                            }
                        }else{
                            echo "<li><a href='". $url ."'> " . $submenu->sayfaadi . "</a>";
                        }
                    }else{
                        $url=URL::to('sayfa/'. $submenu->sayfaurl .'');
                        if($submenu->modulid > 0){
                            if(Request::segment(2)==$submenu->sayfaurl){
                                echo '<li><a href="'. $url ."/".$submenu->id.'"> ' . $submenu->sayfaadi . '</a>';
                            }else{
                                echo "<li><a href='". $url ."/".$submenu->id."'> " . $submenu->sayfaadi . "</a>";
                            }
                        }else{
                            echo "<li><a href='". $url ."'> " . $submenu->sayfaadi . "</a>";
                        }
                    }
                
                static::recursive($submenu->id);
                echo "</li>";
            endforeach;
            echo "</ul>";
        }
    }  

}