<?php

namespace App\Http\Controllers;

use App\Http\Services\impl\CategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categoryService;

    public function __construct(CategoryServices $categoryServices)
    {
        $this->categoryService = $categoryServices;
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        return view('admin.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new re  source.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->categoryService->create($request);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryService->findById($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $this->categoryService->update($request, $id);
        return redirect()->route('categories.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        $category = $this->findById($id);
        $category->fill($request->all());
        $category['slug'] = Str::slug($request->name);
        $this->categoryRepo->storeOrUpdate($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryService->destroy($id);
        return redirect()->route('categories.index');

    }
}
