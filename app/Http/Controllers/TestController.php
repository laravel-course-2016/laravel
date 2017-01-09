<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\AwesomeClass;

class TestController extends Controller
{
    protected $awesome;

    public function __construct(Request $request, AwesomeClass $awesome)
    {
        parent::__construct($request);
        $this->awesome = $awesome;
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


        $a = resolve('App\Classes\AwesomeClass');
        var_dump($a->getCounter());
        var_dump($a);


        $b = resolve('App\Classes\AwesomeClass');
        var_dump($b->getCounter());
        var_dump($b);


        //return '111';
    }
}
