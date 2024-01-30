<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\MenuModel;
use App\Models\PagesModel;
use App\Models\typeMenuModel;
use App\Models\User;
use App\Repositories\Pages\PageRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $pageRepository;
    protected $categoryRepository;
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }
    public function listMenu(Request $request)
    {
        $pages = $this->pageRepository->getAll();
        $menu = MenuModel::whereNull('parent_menu')->with('chirendMenu')->get();
        $getTypeMenu = typeMenuModel::orderBy('id', 'desc')->get();
        // dd($menu);
        return view('admin.layouts.main_menu.list', compact('menu', 'pages', 'getTypeMenu'));
    }

    public function addMenu(Request $request)
    {
        $menu = MenuModel::whereNull('parent_menu')->with('chirendMenu')->get();
        $category = CategoryModel::whereNull('parent_category')->with('childrendCategory')->get();
        return view('admin.layouts.main_menu.add', compact('category', 'menu'));
    }
    public function postAddMenu(Request $request)
    {
        $menu = new MenuModel();
        // if($request->links){
        //     $typeMenu = isset($_POST['customLinkSubmit']) ? $_POST['customLinkSubmit'] : '';

        //     $links = $request->links;
        //     switch ($typeMenu) {
        //         case 'customLinkSubmit':
        //             $menu->title = $links['title'];
        //             $menu->url = $links['link'];

        //             break;

        //         default:
        //             # code...
        //             break;
        //     }
        // }

        $menu->link_url = $request->url;
        $menu->position = $request->position;
        $menu->status = $request->status;
        $menu->parent_menu = $request->parent_menu;
        if ($request->typeMenu == 1) {
            $menu->type = "pages";
        } else if ($request->typeMenu == 2) {
            $menu->type = "category";
        } else {
            $menu->type = "custom";
        }
        $menu->save();
        return back();
    }

    public function typeMenu(Request $request)
    {
        $option = '';
        if ($request->typeMenu) {
            if ($request->typeMenu == 1) {
                $page =  PagesModel::orderBy('id_page', 'desc')->get();
                foreach ($page as $p) {
                    $option .= '<option value ="' . $p->slug . '" data-name="pages" data-slug ="' . $p->slug . '">' . $p->name_page . '</option>';
                }
            }
            if ($request->typeMenu == 2) {
                $page =  CategoryModel::whereNull('parent_category')->with('childrendCategory')->orderBy('id_category', 'desc')->get();
                $step = '-----';
                foreach ($page as $p) {
                    $option .= '<option value ="' . $p->slug . '" data-name="pages" data-slug ="' . $p->slug . '">' . $p->name_category . '</option>';
                    if (count($p->childrendCategory) > 0) {
                        foreach ($p->childrendCategory as $childC) {
                            $option .= '<option value ="' . $childC->slug . '" data-name="pages" data-slug ="' . $childC->slug . '">' . $step . $childC->name_category . '</option>';
                        }
                    }
                }
            }

            if ($request->typeMenu == 3) {
            }
        }

        return $option;
    }

    public function putEditMenu(Request $request)
    {
        $decode_data  = $request->data;

        foreach ($decode_data as $data) {
            $menu = MenuModel::where('id_menu', '=', $data['id_menu'])->first();
            $menu->position = $data['position'];
            if (empty($menu->parent_category)) {
                $menu->parent_menu = null;
            }
            $menu->save();

            if (!empty($data['children']) && count($data['children']) > 0) {
                foreach ($data['children'] as $child) {
                    // dd($child);
                    $menu = MenuModel::where('id_menu', '=', $child['id_menu'])->first();
                    $menu->parent_menu = $data['id_menu'];
                    $menu->position = $child['position'];
                    $menu->save();
                }
            }
        }
        return response()->json([
            'status' => 200,
            'message' => $request->all()
        ]);
    }

    public function apiPutEditMenu(Request $request)
    {
        $menu =  MenuModel::find($request->id);
        $menu->name_menu = $request->name;
        $menu->slug = $request->slug;
        $menu->link_url = $request->url;
        $menu->position = $request->position;
        $menu->status = $request->status;
        $menu->parent_menu = $request->parent_menu;
        if ($request->typeMenu == 1) {
            $menu->type = "pages";
        } else if ($request->typeMenu == 2) {
            $menu->type = "category";
        } else {
            $menu->type = "custom";
        }
        $menu->save();
        return response()->json(
            [
                'status' => 200,
                'data' => $request->all()
            ]
        );
    }

    public function editEditMenu(Request $request)
    {
        if ($request->id) {
            $menu = MenuModel::find($request->id);
            // $category = CategoryModel::where('slug','=',$menu->slug)->first();
            return response()->json([
                'status' => 200,
                'data' => $menu
            ]);
        }
    }

    public function deleteMenu(Request $request)
    {
        if ($request->id) {
            $menu = MenuModel::find($request->id);
            if ($menu) {
                $menu->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Xoá menu thành công'
                ]);
            }
            return response()->json([
                'status' => 404,
                'message' => 'Menu không tồn tại'
            ]);
        }
    }
    public function addTypeMenu(Request $request)
    {

        $typeMenuCreate =  typeMenuModel::create([
            'title' => $request->title,
            'enabled' => $request->enabled ? true : false
        ]);
        return back()->with(['message' => 'thêm thành công']);
    }

    public function editTypeMenu(Request $request, $id)
    {
        $pages = $this->pageRepository->getAll();
        $menu = MenuModel::whereNull('parent_menu')->with('chirendMenu')->orderBy('position','asc')->get();
        // dd($menu);
        $getTypeMenu = typeMenuModel::orderBy('id', 'desc')->get();

        return view('admin.layouts.main_menu.edit', compact('pages', 'menu', 'getTypeMenu', 'id'));
    }

    public function updateTypeMenu(Request $request, $id)
    {
        if (isset($_REQUEST['updateMenuForm'])) {
            $updateFormMenu = MenuModel::where('id_menu', $request->id_menu)->update([
                'title' => $request->title,
                'url' => $request->url
            ]);
            return back()->with('success', 'Cập nhật thành công');
        }

        $data = $request->data;
        // foreach ($data as $value) {
        //     $findMenu = MenuModel::where('id_menu', $value['id_menu'])->first();
        //     if ($findMenu) {
        //         $findMenu->title = $value['title'];
        //         if ($value['position'] != 'null') {
        //             $findMenu->position = $value['id'];
        //         }
        //         $findMenu->parent_menu = $value['parent'];
        //         $findMenu->url = $value['url'];
        //         $findMenu->save();
        //     } else {
        //         MenuModel::create([
        //             'title' => $value['title'],
        //             'position' => $value['id'],
        //             'parent_menu' => $value['parent'],
        //             'url' => $value['url']
        //         ]);
        //     }
        //     // if (isset($value->children)) {
        //     //     foreach ($value->children as $child) {
        //     //         $findMenu = MenuModel::where('id_menu', $child->id_menu)->first();
        //     //         if ($findMenu) {
        //     //             $findMenu->title = $child->title;
        //     //             if ($child->position != 'null') {
        //     //                 $findMenu->position = $child->id;
        //     //             }
        //     //             $findMenu->parent_menu = $value->id_menu;
        //     //             $findMenu->url = $child->url;
        //     //             $findMenu->save();
        //     //         } else {
        //     //             MenuModel::create([
        //     //                 'title' => $child->title,
        //     //                 'position' => $child->id,
        //     //                 'parent_menu' => $value->id_menu,
        //     //                 'url' => $child->url
        //     //             ]);
        //     //         }
        //     //     }
        //     // }
        // }
        if ($data['parent'] != 'undefined') {
            $find_id = MenuModel::find($data['id']);
            if ($find_id->first()) {
                $results = MenuModel::find($data['id'])->update([
                    'title' => $data['title'],
                    'position' => $data['position'],
                    'parent_menu' => $data['parent'],
                    'url' => $data['url']
                ]);
            }
        } else {
            $results = MenuModel::find($data['id'])->update([
                'title' => $data['title'],
                'position' => $data['position'],
                'url' => $data['url'],
                'parent_menu' => NULL,
            ]);
        }
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);


        // dd($request->all());
        // $typeMenuUpdate =  typeMenuModel::where('id',$id)->update([
        //     'title' => $request->title,
        //     'enabled' => $request->enabled ? true : false
        // ]);

        // return back()->with('success','Cập nhật thành công');
    }
    
    public function creatingMenu(Request $request){
        $data = $request->data;
        foreach($data as $item){
           $check_menu = MenuModel::where('title',$item['title']);
            if(!$check_menu->first()){
                MenuModel::create([
                    
                    'title' => $item['title'],
                    'url' => $item['link'],
                    'type' => $item['type']
                ]);
            }
        }
       
        return response()->json([
            'status' => 200,
            'data' => $request->all()
        ]);
    }
}
