<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Factory Design Pattern
Route::get('/factory-method', function () {
    //new \App\Services\TransportService(new \App\Models\FactoryDesignPattern\Ship());
    new \App\Services\FactoryMethod\TransportService(new \App\Models\FactoryMethod\Truck());


});

//Factory Design Pattern
Route::get('/abstract-factory', function () {
    new \App\Services\AbstractFactory\AbstractFactoryService(new \App\Models\AbstractFactory\NormalShapeFactory(),'RECTANGLE');
    new \App\Services\AbstractFactory\AbstractFactoryService(new \App\Models\AbstractFactory\NormalShapeFactory(),'SQUARE');
    new \App\Services\AbstractFactory\AbstractFactoryService(new \App\Models\AbstractFactory\RoundedShapeFactory(),'RECTANGLE');
    new \App\Services\AbstractFactory\AbstractFactoryService(new \App\Models\AbstractFactory\RoundedShapeFactory(),'SQUARE');
});

//Builder Pattern
Route::get('/builder', function () {
    //new \App\Services\Builder\BuilderService(new \App\Models\Builder\ClassicHouse());
    new \App\Services\Builder\BuilderService(new \App\Models\Builder\ModernHouse());
});

//Singleton Pattern
Route::get('/singleton', function () {
    new \App\Services\Singleton\SingletonService(\App\Models\Singleton\Logger::getInstance(),"Hello Man");
    new \App\Services\Singleton\SingletonService(\App\Models\Singleton\Logger::getInstance(),"Hello Women");
});

//Template Pattern
Route::get('/template-method', function () {
    new \App\Services\TemplateMethod\TemplateMethodService(new \App\Models\TemplateMethod\Employee("mahmoud","mohamed","ahmed"));
    new \App\Services\TemplateMethod\TemplateMethodService(new \App\Models\TemplateMethod\Student("mahmoud","mohamed","ahmed"));
});
