<?php

namespace App\Http\Middleware;

use App\Models\Page;
use Closure;
use Illuminate\Http\Request;

class CheckPageActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // get the page from the request
        $pageName = $request->segment(1);

        $pages=Page::all();

        // check if the page is active
        foreach ($pages as $page) {
            if ($page->name == $pageName) {
                if ($page->is_active == 0) {
                    return abort(404);
                }
            }
        }


        return $next($request);
    }
}
