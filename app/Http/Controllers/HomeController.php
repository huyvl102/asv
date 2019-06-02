<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data['categories'] = Category::where('parent_id', null)->where('is_deleted', false)->get();

        return view('home', $data);
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function product($id)
    {
        $data['mainCategory'] = Category::findOrFail($id);

        $data['otherCategory'] = Category::where('id', '!=', $id)->where('parent_id', null)->where('is_deleted', false)->get();

        $data['products'] = Product::where('category_id', '=', $id)->where('is_deleted', false)->get();

        $data['categories'] = Category::where('parent_id', $id)->where('is_deleted', false)->get();

        return view('product', $data);
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function detail($id)
    {
        $data['product'] = Product::findOrFail($id);

        $data['otherProduct'] = Product::where('category_id', $data['product']->category_id)
            ->where('id', '!=', $data['product']->id)
            ->where('is_deleted', false)
            ->get();

        return view('detail', $data);
    }

    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function changeLanguage($locale)
    {
        if (in_array($locale, Config::get('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
