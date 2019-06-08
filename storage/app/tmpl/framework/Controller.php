<?php

namespace App\Http\Controllers;

use App\Services\TempService;
use App\Presenters\TempPresenter;
use App\Transformers\TempTransformer;
use App\Formatters\TempFormatter;

/**
 * Class TempController
 *
 * @package App\Http\Controllers
 */
class TempController extends Controller
{
    /**
     * @var TempService
     */
    protected $service;
    /**
     * @var array
     */
    private $enable_transformers = ['index', 'store', 'create', 'show', 'update', 'destroy', 'edit'];

    /**
     * TempController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->service = new TempService();
    }

    /**
     *
     */
    public function handle()
    {
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->service->index();
        $view_data = [
            'info'       => [
                'description' => 'xxx',
                'author'      => 'Ben',
                'title'       => 'index title',
            ],
            'js_data'    => [
                'data' => [
                    [
                        'id'   => 1,
                        'name' => 'ben',
                        'sex'  => 'man',
                    ], [
                        'id'   => 2,
                        'name' => 'Temp',
                        'sex'  => 'woman',
                    ],
                ],
                'page' => [
                    "current_page" => 1,
                ],
            ],
            'table_data' => [
                [
                    'prop'  => 'id',
                    'label' => 'ID',
                ], [
                    'prop'  => 'name',
                    'label' => '名字',
                ], [
                    'prop'  => 'sex',
                    'label' => '性别',
                ],
            ],
        ];
        if (in_array('index', $this->enable_transformers)) {
            $this->Transformers->index(
                $this->Formatters->index()
            );
        }
        return view('temp.index', $view_data);
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $this->service->store();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->service->create();
        $view_data = [
            'info'        => [
                'description' => 'xxx',
                'author'      => 'Ben',
                'title'       => 'index title',
            ],
            'js_data'     => [
                'data' => [
                    [
                        'id'   => 1,
                        'name' => 'ben',
                        'sex'  => 'man',
                    ], [
                        'id'   => 2,
                        'name' => 'Temp',
                        'sex'  => 'woman',
                    ],
                ],
                'page' => [
                    "current_page" => 1,
                ],
            ],
            'detail_data' => [
                'id',
                'name',
                'sex',
            ],
        ];
        if (in_array('index', $this->enable_transformers)) {
            $this->Transformers->index(
                $this->Formatters->index()
            );
        }
        return view('temp.create', $view_data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $this->service->show($id);
        $view_data = [
            'info'        => [
                'description' => 'xxx',
                'author'      => 'Ben',
                'title'       => 'index title',
            ],
            'js_data'     => [
                'data' => [
                    [
                        'id'   => 1,
                        'name' => 'ben',
                        'sex'  => 'man',
                    ], [
                        'id'   => 2,
                        'name' => 'Temp',
                        'sex'  => 'woman',
                    ],
                ],
                'page' => [
                    "current_page" => 1,
                ],
            ],
            'detail_data' => [
                'id',
                'name',
                'sex',
            ],
        ];
        if (in_array('index', $this->enable_transformers)) {
            $this->Transformers->index(
                $this->Formatters->index()
            );
        }
        return view('temp.show', $view_data);
    }

    /**
     * @param Request $request
     * @param         $id
     */
    public function update(Request $request, $id)
    {
        $this->service->update();
    }

    /**
     * DELETE
     *
     * @param $id
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->service->edit($id);
        $view_data = [
            'info'        => [
                'description' => 'xxx',
                'author'      => 'Ben',
                'title'       => 'index title',
            ],
            'js_data'     => [
                'data' => [
                    [
                        'id'   => 1,
                        'name' => 'ben',
                        'sex'  => 'man',
                    ], [
                        'id'   => 2,
                        'name' => 'Temp',
                        'sex'  => 'woman',
                    ],
                ],
                'page' => [
                    "current_page" => 1,
                ],
            ],
            'detail_data' => [
                'id',
                'name',
                'sex',
            ],
        ];
        if (in_array('index', $this->enable_transformers)) {
            $this->Transformers->index(
                $this->Formatters->index()
            );
        }
        return view('temp.edit', $view_data);
    }
}
