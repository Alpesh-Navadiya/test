<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Request;

class IpMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		$ipaddress = $request->ip();
		return $next($request);
		$users = User::where('whitelistip', $ipaddress)->count();
		if ($users >= 1) {
			return $next($request);
		} else {
			return redirect('/');
		}

	}

}
