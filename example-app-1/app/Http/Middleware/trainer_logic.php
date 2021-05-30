<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class trainer_logic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $trainer_logic = $request->input('trainer_logic');
        //is null
        if (empty($trainer_logic)) {
            $trainer_logic = 10;
        }       
        //is string
        if (!is_numeric($trainer_logic)) {
            return redirect('error');
        }
        if($trainer_logic<10){
            $trainer_logic=10;
        }
        else if($trainer_logic>10&&$trainer_logic<30){
            $trainer_logic=30;
        }
        else if($trainer_logic>30&&$trainer_logic<50){
            $trainer_logic=50;
        }
        else{
            $trainer_logic=50;
        }
        $request->merge([ 'trainer_logic' => $trainer_logic]);
        return $next($request);
    }
}
