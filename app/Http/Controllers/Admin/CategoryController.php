<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['categories'] = Category::select(['categories.*', 'parent.name as parentName'])
            ->leftJoin('categories as parent', 'parent.id', '=', 'categories.parent_id')
            ->where('categories.is_deleted', false)
            ->orderBy('categories.id', 'DESC');

        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $data['categories'] = $data['categories']->where(
                function ($query) use ($keyword) {
                    $query->orWhere('categories.name', 'like', "%$keyword%");
                }
            );
        }

        $data['categories'] = $data['categories']->orderBy('categories.id')->paginate(15);

        return view('admin.categories.list', $data)->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoryParent'] = Category::where('is_deleted', false)->where('parent_id', null)->orderBy('id', 'DESC')->get();

        return view('admin.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = new Category();
            $category->name = $request->input('name');
            $category->slug = str_slug($request->input('name'));
            $category->parent_id = $request->get('parent_id');
            $category->save();

            return redirect()->route('admin.category.list')->with([
                'level' => 'success',
                'message' => 'Create category successful !'
            ]);
        } catch (Exception $e) {
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category'] = Category::findOrFail($id);

        $data['categoryParent'] = Category::where('is_deleted', false)->where('parent_id', null)->orderBy('id', 'DESC')->get();

        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->slug = str_slug($request->input('name'));
        $category->parent_id = $request->get('parent_id');
        $category->save();

        return redirect()->route('admin.category.list')->with([
            'level' => 'success',
            'message' => 'Update category successful !'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->is_deleted = true;
        $category->update();

        return back()->with([
            'level' => 'success',
            'message' => 'Deleted category successfully.'
        ]);
    }
}
