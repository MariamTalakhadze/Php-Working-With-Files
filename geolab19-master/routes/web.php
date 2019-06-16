<?php

Route::namespace('Front')->name("blog.")->group(function () {
    
    Route::get("", "BlogController@index")->name("index");
    Route::get("/blog/{id}/{title?}", "BlogController@article")->name("article");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace("Admin")->name("admin.")->prefix("admin")->middleware(["auth","isAdmin"])->group(function(){
    Route::get("/dashboard", function (){
        return view("admin.dashboard.index");
    })->name("dashboard");
    Route::name("blog.")->prefix("blog")->group(function(){
        Route::get("/create", "BlogController@create");
        Route::post("/store", "BlogController@store")->name("store");
        Route::prefix('manage')->group(function(){
            Route::get("", "BlogController@manage")->name("manage");
            Route::get("/confirmed/{id}", "BlogController@confirm")->name("confirm");
            Route::post("/confirmed/{id}", "BlogController@confirm")->name("confirm");
            Route::get("/edit/{id}", "BlogController@edit")->name("edit");
            Route::post("/edit/{id}", "BlogController@edit")->name("edit");    
            Route::get("/delete/{id}", "BlogController@delete")->name("delete");
            Route::post("/delete/{id}", "BlogController@delete")->name("delete");
            Route::middleware(["auth", "mainAdmin"])->group(function(){
                    //admin route admin@admin
                Route::get("/deleted", "BlogController@deleted")->name("deleted");
                // delete permanently
                Route::get("/confirmedByAdmin/{id}", "BlogController@confirmFromAdmin")->name("confirmFromAdmin");
                Route::post("/confirmedByAdmin/{id}", "BlogController@confirmFromAdmin")->name("confirmFromAdmin");
                Route::get("/returned/{id}", "BlogController@returnToAdmin")->name("returnToAdmin");
                Route::post("/returned/{id}", "BlogController@returnToAdmin")->name("returnToAdmin");
                Route::get("/destory/{id}", "BlogController@destory")->name("destroy");
                Route::post("/destory/{id}", "BlogController@destory")->name("destroy");      
            });            
        });  
    });
    Route::post('logout', 'Auth/LoginController@logout')->name("logout");
    
    

});