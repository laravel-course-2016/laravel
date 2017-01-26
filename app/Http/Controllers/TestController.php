<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Upload;
use Illuminate\Http\Request;
use App\Classes\AwesomeClass;
use App\Classes\Uploader;

class TestController extends Controller
{
    protected $awesome;

    public function __construct(Request $request, AwesomeClass $awesome)
    {
        parent::__construct($request);
        $this->awesome = $awesome;
    }

    public function testGet(Uploader $uploader)
    {
        return '<form enctype="multipart/form-data" method="POST">'.
            csrf_field() .
            '<input type="file" name="file" />
            <input type="submit" value="Go!" />
        </form>';
    }

    public function testPost(Request $request, Uploader $uploader, Upload $uploadModel)
    {
        $rules = [
            'maxSize' => 5 * 1024 * 1024,
            'minSize' => 10 * 1024,
            'allowedExt' => [
                'jpeg',
                'jpg',
                'png',
                'gif',
                'bmp',
                'tiff'
            ],
            'allowedMime' => [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/tiff'
            ],
        ];

        if ($uploader->validate($request, 'file', $rules)) {
            $uploadedPath = $uploader->upload();

            if ($uploadedPath !== false) {
                $uploadsModel = $uploader->register($uploadModel);
                $uploadedProps = $uploader->getProps();
            }

            return $uploadedPath !== false ? 'OK' : 'NE OK';
        }

        return $uploader->getErrors();
    }

    public function someMethod(Request $request)
    {
        $name = $this->request->input('name', 'Дмитрий');
        $surname = $request->input('surname', 'Юрьев');

        /*if (isset($_GET['name'])) {
            $name = $_GET['name'];
        } else {
            $name = 'Дмитрий';
        }*/

       /* var_dump($awesomeClass->getCounter());
        var_dump($awesomeClass->getCounter());
        var_dump($awesomeClass->getCounter());
        var_dump($awesomeClass->getCounter());
        var_dump($awesomeClass->getCounter());*/

        $a = resolve('App\Classes\AwesomeClass');
        var_dump($a->getCounter());


        $b = resolve('App\Classes\AwesomeClass');
        var_dump($b->getCounter());

        /*$awesome = new \App\Classes\AwesomeClass();
        var_dump($awesome->someSerious());
        var_dump($awesome->someSerious());
        var_dump($awesome->someSerious());
        var_dump($awesome->someSerious());
        */

        return view('test', [
           'name' => $name,
            'surname' => $surname
        ]);


        //return $this->request->all();
    }
    public function someMethod2(Request $request, $name, $surname = null)
    {
        //$name = $this->request->input('name', 'Дмитрий');
        //$surname = $request->input('surname', 'Юрьев');

        /*if (isset($_GET['name'])) {
            $name = $_GET['name'];
        } else {
            $name = 'Дмитрий';
        }*/

        return view('test', [
            'name' => $name,
            'surname' => $surname
        ]);


        //return $this->request->all();
    }

    public function showPosts()
    {
        return view('pages.content', [
            'mainContent' => 'Содержимое',
            'title' => 'Заголовок страницы',
            'template' => 'pages.content2',
            'users' => []
        ]);
    }

    public function awesomeMethod()
    {
        //AwesomeClass $awesome
        //$awesome = $this->awesome;
        //$awesome = new AwesomeClass();
        /*var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());
        var_dump($this->awesome->getCounter());*/


        /*$a = resolve('App\Classes\AwesomeClass');
        var_dump($a->getCounter());
        var_dump($a);*/


        /*$b = resolve('App\Classes\AwesomeClass');
        var_dump($b->getCounter());
        var_dump($b);*/


       // return '111';

        /*return response('111', 200)
            ->header('Content-Type', 'text/html')
            ->header('access-control-allow-origin', '*')
            ->cookie('mycookie', '1111', 86400 / 60);*/

        return [
            'a' => 1,
            'b' => 2
        ];



        $arr = [
            'a' => 1,
            'b' => 2
        ];

        return response(json_encode($arr), 200)
            ->header('Content-Type', 'application/json');



        //echo '111';
    }


    public function testOrm()
    {
        //$model = Test::findOrFail(10);

        /*Test::create([
           'name' => 'IVAN',
            'surname' => 'IVANOV',
            'age' => 100
        ]);*/

        $model = Test::firstOrNew([
           'name' => 'Dima',
            'age' => 20
        ]);

        $model->name = 'QWE';
        $model->age = 1000;
        $model->save();


        // Retrieve the flight by the attributes, or create it if it doesn't exist...
        //$flight = App\Flight::firstOrCreate(['name' => 'Flight 10']);

// Retrieve the flight by the attributes, or instantiate a new instance...
        //$flight = App\Flight::firstOrNew(['name' => 'Flight 10']);



/*
        $newTestModel = new Test();
        $newTestModel->name = 'Anton';
        $newTestModel->age = 35;
        $newTestModel->save();
*/
        //abort(404);

        //$model = Test::findOrFail(10);


        //$model = Test::where('name', 'Вася')->get()[0];
        /*$model = Test::where('name', 'Вася')
            ->orderBy('id','DESC')
            ->first();*/
        //dump($model);
        //debug($model);



        //$model->name = 'QWERTY';
        //$model->age = 1;
        //$model->save();

        //dump($model);








/*
        $tests = Test::all();
        dump($tests);*/

        /*foreach ($tests as $test) {
            echo $test->name . ' - ' . $test->age . $test->id;
            dump($test);
        }*/

        //dump($tests);

        return 'OK';
    }
}
