<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Models\AttributeModel;
use App\Models\AttributeValue;
use App\Models\CategoryModel;
use App\Models\filterCategoryModel;
use App\Models\FilterCategoryOption;
use App\Repositories\Attributes\AttributeRepositoryInterface;
use App\Repositories\Categories\CategoriesRepositoryInterface as CategoriesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    protected $_categoryRepository;
    protected $_attributeRepository;
    public function __construct(CategoriesRepository $categoriesRepository, AttributeRepositoryInterface $attributeRepository){
        $this->_categoryRepository = $categoriesRepository;
        $this->_attributeRepository = $attributeRepository;
    }

    public function listCategory(Request $request)
    {
        return view('admin.layouts.categories.list');
    }

    public function apiListCategory()
    {
        $listCategory = json_decode($this->_categoryRepository->getAll());
        return response()->json([
            'status' => 200,
            'data' => $listCategory
        ]);
    }

    public function addCategory(Request $request)
    {
        $attr = $this->_attributeRepository->getAll();
        $listCategory = $this->_categoryRepository->parentsNull();
        $attributes = AttributeModel::with(['attributevalue' => function($query) {
            $query->where('is_required', AttributeValue::SHOW_IS_REQUIRED);
        }])->where('active', AttributeModel::ACTIVE)->get();
        return view('admin.layouts.categories.add', compact('listCategory', 'attr', 'attributes'));
    }

    public function editCategory(Request $request)
    {
        $cate =  $this->_categoryRepository->find($request->id);
        $attributes = $this->_attributeRepository->active()->get();
        dd($attributes);
        $listCategory = $this->_categoryRepository->parentsNull()->get();
        return view('admin.layouts.categories.edit', compact('cate', 'listCategory','attributes'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \App\Http\Requests\RequestCategory  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddCategory(RequestCategory $request)
    {

        $category = new CategoryModel();
        $category->name_category = $request->name_category;
        $category->slug = $request->slug;
        $category->desc_category = $request->desc_short;
        if ($request->parent_category) {
            $category->parent_category = $request->parent_category;
        };
        if ($request->image) {
            $imageName = $request->image;
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
            if (in_array($typeImage, $imageExtensions)) {
                $path = 'public/uploads/images/';
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $category->image_category = $link_url;
                $category->name_image = $name_image;
            }
        }
        $category->hide = $request->hide;
        $category->meta_title =  $request->meta_title;
        $category->meta_description =  $request->meta_description;
        $category->meta_keyword =  $request->meta_keywords;
        $category->tags = $request->tags;
        $category->save();

        if ($request->attr && !empty($request->attr['value'])) {
            foreach($request->attr as $item){
                filterCategoryModel::create([
                    'id_category' => $category->id_category,
                    'id_attr' => $item['id_attr'],
                    'value' => implode(',', $item['value'])
                ]);
            }
        }

        return redirect()->route('admin.category.listCategory')->with('success', 'Thành công');
    }

    public function putEditCategory(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
                'slug' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->with(['errors' => $validator->errors()]);
        };
        $category =  CategoryModel::where('id_category', '=', $id)->first();
        $category->name_category = $request->name;
        $category->slug = $request->slug;
        $category->desc_category = $request->desc;
        if ($request->parent_category) {
            $category->parent_category = $request->parent_category;
        };
        if ($request->image) {
            // Xóa hình ảnh trong thư mục
            $path = 'public/uploads/images/';

            if ( $category->name_image && file_exists($path . $category->name_image)) {
                unlink($path . $category->name_image);
            }
            $imageName = $request->image;
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
            if (in_array($typeImage, $imageExtensions)) {

                $path = 'public/uploads/images/';
                // dd($imageName);
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $category->image_category = $link_url;
                $category->name_image = $name_image;
            }
        }
        $category->hide = $request->status;
        $category->ihome = $request->ihome;
        $category->meta_title =  $request->meta_title;
        $category->meta_description =  $request->meta_description;
        $category->meta_keyword =  $request->meta_keywords;
        $category->tags = $request->tags;
        $category->desc_category = $request->desc_short;
        $category->save();
        if ($request->attr) {
           
            if ($request->attr['id_attr']) {
                $filterCategorys =  filterCategoryModel::where('id_category', '=', $id)->first();
                if ($filterCategorys) {
                    if (isset($request->attr['option'])) {
                        // dd($request->attr['option']);
                        foreach ($request->attr['option'] as $item) {
                            $filter = FilterCategoryOption::where('id_filter_category', '=', $filterCategorys->id_filter_category)->where('name','regexp',$item['name'])->first();
                            if($filter){
                                $filter->value = $item['value'];
                                $filter->save();
                                continue;
                            }else{
                                $filter = new FilterCategoryOption();
                                $filter->id_category = $id;
                                $filter->id_filter_category = $filterCategorys->id_filter_category;
                                $filter->name = $item['name'];
                                $filter->value = $item['value'];
                                $filter->save();
                                continue;
                            }
                        }
                       
                            
                        
                    }
                }
            }
        }
        // if ($request->idFilter) {
        //     $filter = explode(',', $request->idFilter);
        //     $filderModel  = FilterModel::find($filter);
        //     $category->filters()->sync($filderModel);
        // }
        // return response()->json([
        //     "status" => 200,
        //     "data" => $request->all()
        // ]);
        return back()->with(['status' => 200, 'message' => 'Cập nhật thành công']);
    }

    public function deleteCategory(Request $request)
    {
        if ($request->data) {
            foreach ($request->data as $item) {
                $find_category = CategoryModel::where('id_category', '=', $item)->first();
                if ($find_category) {
                    // Xoá hình ảnh
                    // $path = 'public/uploads/images/';
                    // if (file_exists($path . $find_category->name_image)) {
                    //     unlink($path . $find_category->name_image);
                    // }
                    $find_category->delete();
                }
            }
        }
        return response()->json([
            "status" => 200,
            "message" => "Xoá thành công",
            'id' => $request->data
        ]);
    }

    public function getChildCategory(Request $request)
    {
        if ($request->id) {
            // $childCategory = CategoryModel::where('parent_category', '=', $request->id)->get();
            // $filter = FilterCategory::where('id_category', '=', $request->id)->with('childFilter', 'category', 'filter')->get();
            $filters = filterCategoryModel::where('id_category', '=', $request->id)->with('filterCategoryOption')->get();
            return response()->json([
                'status' => 200,
                'data' => $filters
            ]);
    
        }
    }
}
