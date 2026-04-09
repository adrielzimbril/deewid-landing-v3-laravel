<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller {

  public function index() {
    $posts_per_page = '5';

    $posts = Blog::where('status', 1)->orderBy('id', 'desc')->paginate($posts_per_page);

    $tags = Blog::where('status', 1)->get()->pluck('tag')->toArray();

    return view('content.blog', compact('posts', 'tags'));
  }

  public function post($slug) {
    $userType = Auth::user()?->type;
    $post = Blog::where('slug', $slug)->first();

    // Check post status
    if (isset($post->status) && !$post->status && $userType !== "admin") {
      abort(404);
    }

    $previousPost = Blog::where('id', '<', $post->id)
      ->where('status', true)
      ->orderByDesc('id')
      ->first();

    $nextPost = Blog::where('id', '>', $post->id)
      ->where('status', true)
      ->orderBy('id')
      ->first();

    $relatedPosts = Blog::where('id', '!=', $post->id)
      ->where('status', true)
      ->where(function ($query) use ($post) {
        $categories = explode(',', $post->category);
        $tags = explode(',', $post->tag);
        foreach ($categories as $category) {
          $query->orWhere('category', 'LIKE', '%' . $category . '%');
        }
        foreach ($tags as $tag) {
          $query->orWhere('tag', 'LIKE', '%' . $tag . '%');
        }
      })
      ->orderByDesc('id')
      ->take(2)
      ->get();

    if ($post) {
      return view('content.blog-single', compact('post', 'previousPost', 'nextPost', 'relatedPosts'));
    } else {
      abort(404);
    }
  }

  public function tag($slug)
  : View | \Illuminate\Foundation\Application | Factory | Application {

    $posts_per_page = '5';

    $posts = Blog::where('tag', 'like', "%{$slug}%")->where('status', 1)->orderBy('id', 'desc')->paginate($posts_per_page);
    $tags = Blog::where('status', 1)->get()->pluck('tag')->toArray();
    $hero = [
      'type'     => 'tag',
      'title'    => $slug,
      'subtitle' => __('Tag Archive'),
    ];

    if ($posts->isEmpty()) {
      abort(404);
    }

    return view('content.blog', compact('posts', 'tags', 'hero'));
  }

  public function category($slug)
  : View | \Illuminate\Foundation\Application | Factory | Application {

    $posts_per_page = '5';

    $posts = Blog::where('category', 'like', "%{$slug}%")->where('status', 1)->orderBy('id', 'desc')->paginate($posts_per_page);
    $tags = Blog::where('status', 1)->get()->pluck('tag')->toArray();
    $hero = [
      'type'     => 'category',
      'title'    => $slug,
      'subtitle' => __('Category Archive'),
    ];

    if ($posts->isEmpty()) {
      abort(404);
    }

    return view('content.blog', compact('posts', 'tags', 'hero'));
  }

  public function author($user_id)
  : View | \Illuminate\Foundation\Application | Factory | Application {
    $posts_per_page = '5';

    $posts = Blog::where('user_id', $user_id)->where('status', 1)->orderBy('id', 'desc')->paginate($posts_per_page);
    $tags = Blog::where('status', 1)->get()->pluck('tag')->toArray();
    $hero = [
      'type'     => 'author',
      'title'    => $user_id,
      'subtitle' => 'Author Archive',
    ];

    if ($posts->isEmpty()) {
      abort(404);
    }

    return view('content.blog', compact('posts', 'tags', 'hero'));
  }

  // dashboard

  public function blogList() {
    $list = Blog::orderBy('id', 'desc')->get();
    return view('panel.blog.list', compact('list'));
  }

  public function blogAddOrUpdate($id = null) {
    if ($id == null) {
      $blog = null;
    } else {
      $blog = Blog::where('id', $id)->firstOrFail();
    }

    return view('panel.blog.form', compact('blog'));
  }

  public function blogDelete($id = null) {
    $post = Blog::where('id', $id)->firstOrFail();
    $post->delete();
    return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
  }

  public function blogAddOrUpdateSave(Request $request) {

    if ($request->post_id != 'undefined') {
      $post = Blog::where('id', $request->post_id)->firstOrFail();
    } else {
      $post = new Blog;
    }

    if ($request->hasFile('feature_image')) {
      $path = 'upload/images/blog/';
      $image = $request->file('feature_image');
      $image_name = Str::random(4) . '-' . Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

      //Resim uzantı kontrolü
      $imageTypes = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
      if (!in_array(Str::lower($image->getClientOriginalExtension()), $imageTypes)) {
        $data = [
          'errors' => ['The file extension must be jpg, jpeg, png, webp or svg.'],
        ];
        return response()->json($data, 419);
      }

      $image->move($path, $image_name);

      $feature_image = $path . $image_name;
    }

    $post->title = $request->title;
    $post->content = $request->content;
    $post->feature_image = $feature_image ?? $post->feature_image;
    $post->slug = Str::slug($request->slug);
    $post->seo_title = $request->seo_title;
    $post->seo_description = $request->seo_description;
    $post->category = $request->category;
    $post->tag = $request->tag;
    $post->status = $request->status;
    $post->user_id = Auth::user()->id;
    $post->save();
  }

}
