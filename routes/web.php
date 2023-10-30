<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Vina Nur Fauziah",
        "email" => "vinanurfauziahh@gmail.com",
        "image" => "vina.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Vina Nur Fauziah",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam blanditiis explicabo veniam eveniet sint. 
        Ipsa, blanditiis quasi architecto placeat maxime perferendis, est iure enim ullam alias nulla. Temporibus quo dignissimos, 
        aut minus fuga asperiores laborum voluptatem nesciunt reprehenderit numquam aperiam tenetur quaerat. Delectus maiores similique, ullam, 
        mollitia explicabo eaque neque asperiores blanditiis quisquam aliquam voluptatum eius cumque inventore officia. Odio commodi 
        officiis maxime sint, tenetur deserunt suscipit incidunt labore blanditiis, veniam rem ut aut adipisci similique, facere voluptas quas aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Nadjrilillah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sequi nulla dignissimos aut maxime. Harum eos, aliquam dignissimos eveniet voluptas voluptatum nobis incidunt ullam. 
            Magni consequuntur id eos dolorum beatae temporibus numquam, nemo, repudiandae aliquid sit quod fugiat incidunt praesentium illum, 
            reprehenderit necessitatibus doloremque? Repellat perspiciatis laborum commodi debitis distinctio, qui error molestias ab culpa doloremque. 
            Recusandae saepe atque quisquam tempora, architecto tempore! Blanditiis eaque omnis odio culpa nobis a expedita natus debitis architecto velit, 
            cum iure, praesentium beatae officiis adipisci repudiandae at ratione, et quibusdam. Odio, praesentium aspernatur! Ducimus, voluptatem rem? 
            Est eligendi nostrum dolores. Doloribus ex placeat quis."
        ],
    
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Vina Nur Fauziah",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam blanditiis explicabo veniam eveniet sint. 
        Ipsa, blanditiis quasi architecto placeat maxime perferendis, est iure enim ullam alias nulla. Temporibus quo dignissimos, 
        aut minus fuga asperiores laborum voluptatem nesciunt reprehenderit numquam aperiam tenetur quaerat. Delectus maiores similique, ullam, 
        mollitia explicabo eaque neque asperiores blanditiis quisquam aliquam voluptatum eius cumque inventore officia. Odio commodi 
        officiis maxime sint, tenetur deserunt suscipit incidunt labore blanditiis, veniam rem ut aut adipisci similique, facere voluptas quas aspernatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Nadjrilillah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sequi nulla dignissimos aut maxime. Harum eos, aliquam dignissimos eveniet voluptas voluptatum nobis incidunt ullam. 
            Magni consequuntur id eos dolorum beatae temporibus numquam, nemo, repudiandae aliquid sit quod fugiat incidunt praesentium illum, 
            reprehenderit necessitatibus doloremque? Repellat perspiciatis laborum commodi debitis distinctio, qui error molestias ab culpa doloremque. 
            Recusandae saepe atque quisquam tempora, architecto tempore! Blanditiis eaque omnis odio culpa nobis a expedita natus debitis architecto velit, 
            cum iure, praesentium beatae officiis adipisci repudiandae at ratione, et quibusdam. Odio, praesentium aspernatur! Ducimus, voluptatem rem? 
            Est eligendi nostrum dolores. Doloribus ex placeat quis."
        ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

