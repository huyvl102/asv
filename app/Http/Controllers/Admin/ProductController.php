<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['products'] = Product::where('products.is_deleted', false)->orderBy('products.id', 'DESC');

        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $data['products'] = $data['products']->where(
                function ($query) use ($keyword) {
                    $query->orWhere('products.name', 'like', "%$keyword%");
                }
            );
        }

        $data['products'] = $data['products']->orderBy('products.id')->paginate(15);

        return view('admin.products.list', $data)->with('i', ($request->input('page', 1) - 1) * 10);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::where('is_deleted', false)->get();

        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $product = new Product();
            $product->name = strtoupper($request->input('name'));
            $product->name_en = strtoupper($request->input('name_en'));
            $product->slug = str_slug($request->input('name'));
            $product->description = $request->input('description');
            $product->description_en = $request->input('description_en');
            $product->category_id = $request->get('category_id');
            $product->save();
            if ($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $image = new Image();
                    $fileName = $file->getClientOriginalName();
                    $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                    $image->product_id = $product->id;
                    $image->url = $name;
                    $image->size = number_format($file->getSize() / 1024, 1) . ' Kb';
                    $image->format = $file->getClientOriginalExtension();
                    $file->move('upload/images/products/', $name);
                    $image->save();
                }
            }

            return redirect()->route('admin.product.list')->with([
                'level' => 'success',
                'message' => 'Create product successful!'
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
    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $img = public_path('upload/images/products/' . $image->url);
        if (strlen($image->url) > 0 && file_exists($img)) {
            unlink($img);
        }

        $image->delete();

        return back()->with([
            'level' => 'success',
            'message' => 'Deleted image successfully!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);

        $data['categories'] = Category::where('is_deleted', false)->get();

        $data['images'] = Image::where('product_id', $id)->get();

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = strtoupper($request->input('name'));
        $product->name_en = strtoupper($request->input('name_en'));
        $product->slug = str_slug($request->input('name'));
        $product->description = $request->input('description');
        $product->description_en = $request->input('description_en');
        $product->category_id = $request->get('category_id');

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $image = new Image();
                $fileName = $file->getClientOriginalName();
                $name = md5(($fileName) . date('Y-m-d H:i:s')) . '.' . $file->getClientOriginalExtension();
                $image->product_id = $product->id;
                $image->url = $name;
                $image->size = number_format($file->getSize() / 1024, 1) . ' Kb';
                $image->format = $file->getClientOriginalExtension();
                $file->move('upload/images/products/', $name);
                $image->save();
            }
        }

        $product->save();

        return redirect()->route('admin.product.list')->with([
            'level' => 'success',
            'message' => 'Update product successful!'
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
        $product = Product::findOrFail($id);
        $product->is_deleted = true;
        $product->update();

        return back()->with([
            'level' => 'success',
            'message' => 'Deleted product successfully!'
        ]);
    }
}
