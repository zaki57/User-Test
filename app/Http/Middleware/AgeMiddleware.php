<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle()
    {
        $user = auth()->user;

        if ($user->age <= 18) {

            return redirect('/home');

        }
        //else - user should be allowed to pass through any route - there must be something here but I cant recall
    }
}
