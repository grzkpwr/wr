<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $theme;
    protected $base_theme;
    private $screen;
    public function __construct(Request $request){
        $this->screen = $request->get('screen','');
        $this->theme = $this->base_theme.'/'.$this->screen;

    }
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string  $view
     * @param  array   $data
     * @param  array   $mergeData
     * @return \Illuminate\View\View
     */
    protected function  view($view = null, $data = [], $mergeData = []){
        if($this->screen!=='') {
            $view_array = explode('.', $view);
            $end = array_pop($view_array);
            array_push($view_array, $this->screen, $end);
            $view = implode('.',$view_array);
        }        //dump($view,$this->screen,$this->theme);
        return view($view,array_merge($data,['theme'=>$this->theme,'base_theme'=>$this->base_theme]),$mergeData);
    }
}
