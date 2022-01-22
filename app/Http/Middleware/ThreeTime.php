<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class ThreeTime
{

    public static $count = 0;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->expectsJson()) {
            $this->count += 1;
            if ($this->count == 3) {

            }
        }
        return $next($request);
    }
}
