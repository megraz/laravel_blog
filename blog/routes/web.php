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

Route::resource('articles', 'ArticleController');


// Route::get('/articles/{index}', function ($index) {
//    $articles = [
//         "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
//         "Vivamus id massa ac ex rutrum vestibulum.",
//         "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
//    ];
   
//    return $articles[$index];
// }); // l'url  comme index doit être obligatoirement un nombre dc .../index.php/articles/1 le 1 correspond à l'index
// on peut indiquer n'importe quel nombre qui corresp à celui de l'index

Route::get('/articles', function () {

    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
    "Nam purus justo, porttitor vel urna id, blandit aliquam orci.",
  ];
  return view('article.articles')->with('articles', $articles); //déplacer les vues pr qu'elles héritent..
  });
  
  Route::get('/article/{index}', function($index){
    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];
  
    if (!array_key_exists($index, $articles)){
        return Redirect::to('/articles');
    }
  
    return $articles[$index];
  })->where('index', '[0-9]+');
// ici création d'une route qui affiche l'index du tableau
//l'index est un nbr dc ds l'url .../articles/2(l'index étant un nbr)
// si l'index n'existe pas ex: .../articles/9 alors rediriger vers /articles on a alors l'intégralité de l'index et non pas l'index filtré par numéro


Route::get('/articles/{year?}/{tag?}', function ($year, $tags) {
    $articles = [
        [
            "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "year" => 2018,
            "tags" => ["Lorem", "Ipsum"]
        ],
        [
            "title" => "Vivamus id massa ac ex rutrum vestibulum.",
            "year" => 2018,
            "tags" => ["Lorem", "Massa"]
        ],
        [
            "title" => "Nam purus justo, porttitor vel urna id, blandit aliquam orci.",
            "year" => 2017,
            "tags" => ["Ipsum", "Massa"]
        ],
    ];

    //  filtrer les articles en fonction de l'année et/ou du tag renseigné(s) et d'afficher la liste correspondante
    $find = []; // commencer par créer un tableau vide
    foreach($articles as $article){
        if($year && $article['year'] == $year){ //&& pr que year ne soit pas nul
            $find[] = $article; //si l'année demandée correspond alors elle est mise ds le tableau
        }
        
        if($tags){ 
            foreach($article['tags'] as $tag){
                if($tag == $tags){
                    $find[] = $article;
                }
            }
        }
 
 
    }
 
    return $find;
 });

