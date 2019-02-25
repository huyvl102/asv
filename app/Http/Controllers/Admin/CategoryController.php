<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Image;
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
        $data['categoryParent'] = Category::where('is_deleted', false)->where('parent_id', null)->get();

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
            $category->name = strtoupper($request->input('name'));
            $category->name_en = strtoupper($request->input('name_en'));
            $category->slug = str_slug($request->input('name'));
            $category->parent_id = $request->get('parent_id');
            $category->save();
            if ($request->hasFile('image')) {
                $image = new Image();
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                $image->category_id = $category->id;
                $image->url = $name;
                $image->size = number_format($file->getSize() / 1024, 1) . ' Kb';
                $image->format = $file->getClientOriginalExtension();
                $file->move('upload/images/categories/', $name);
                $image->save();
            }

            return redirect()->route('admin.category.list')->with([
                'level' => 'success',
                'message' => 'Create category successful!'
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

        $data['categoryParent'] = Category::where('is_deleted', false)->where('parent_id', null)->get();

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
        $category->name = strtoupper($request->input('name'));
        $category->name_en = strtoupper($request->input('name_en'));
        $category->slug = str_slug($request->input('name'));
        $category->parent_id = $request->get('parent_id');
        if ($request->hasFile('image')) {
            $image = public_path('upload/images/categories/' . $category->image['url']);
            if (strlen($category->image['url']) > 0 && file_exists($image)) {
                unlink($image);
            }
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
            $imageBefore = Image::where('url', $category->image['url'])->first();
            if (isset($imageBefore)) {
                $imageBefore->category_id = $category->id;
                $imageBefore->url = $name;
                $imageBefore->size = number_format($file->getSize() / 1024, 1) . ' Kb';
                $imageBefore->format = $file->getClientOriginalExtension();
                $file->move('upload/images/categories/', $name);
                $imageBefore->save();
            } else {
                $newImage = new Image();
                $newImage->category_id = $category->id;
                $newImage->url = $name;
                $newImage->size = number_format($file->getSize() / 1024, 1) . ' Kb';
                $newImage->format = $file->getClientOriginalExtension();
                $file->move('upload/images/categories/', $name);
                $newImage->save();
            }
        }
        $category->save();

        return redirect()->route('admin.category.list')->with([
            'level' => 'success',
            'message' => 'Update category successful!'
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
            'message' => 'Deleted category successfully!'
        ]);
    }
}
