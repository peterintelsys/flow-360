<?php namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Auth;

class SetLangue {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$language = Session::get('language', Config::get('app.locale'));
        
        $user = Auth::user();

        

        if ($user->lang == 'se'){
            $language = 'se';
        }
        if($user->lang == 'en'){
            $language = 'en';
        }
        
        App::setLocale($language);     
       

        return $next($request);
    }

}