<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAccountStatus
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Получаем текущего пользователя
        $user = Auth::user();

        // Если нет пользователя или статус не active — редирект на /account-status
        if (!$user || $user->status !== 'active') {
            return redirect('/account-status');
        }

        // Иначе пропускаем запрос дальше
        return $next($request);
    }
}