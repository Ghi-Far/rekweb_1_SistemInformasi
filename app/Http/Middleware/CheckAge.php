<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        $age = $request->query('age');

        if ($age === null) {
            return redirect('/produk/input-usia');
        }

        if ((int) $age < 17) {
            return response(
                'Akses ditolak: usia minimal 17 tahun.', 
                403
            );
        }

        return $next($request);
    }
}
