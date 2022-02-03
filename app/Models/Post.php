<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    /**
     * Input bisa dengan menggunakan script dibawah dalam tinker asal telah menentukan fillable
     *Post::create([
     * 'title' => 'judul ke 4',
     * 'excerpt' => 'isi excerpt',
     * 'body' => 'isi body'
     *]) 
     * 
     * */    
    //protected $fillable = ['title','excerpt','body'];
    /**
     * atau menggunakan guarded
     * artinya id gak boleh diisi, sisanya boleh
     */
    protected $guarded = ['id'];
    protected $with = ['author','category'];
    /**
     * untuk merubah data id ke 3 dalam tinker
     * >> Post::find(3)->update(['title' => 'Judul ketiga berubah'])
     * merubah data menggunakan where
     * >> Post::where('title', 'judul ketiga berubah') -> update(['excerpt' => 'excerpt ketiga berubah'])
     */

    // ini fitur pencarian kata 'scope' itu wajib dan kata setelahnya bebas
    public function scopeFilter($query, array $filters){

        // ** yang ini sama aja kayak yang dibawah, cuma if nya lebih ribet**
        // if (isset($filters['search'])? $filters['search'] : false ) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
                });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            // pakai use ($category) untuk mengambil variabel fungsi diatas
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }
    
     //satu post hanya punya satu kategori
     public function category(){
         // $post->category 'untuk melihat category di tinker'
        return $this->belongsTo(Category::class);
     }

    //disuru ubah pake author usernya

    //  public function user(){
    //      return $this->belongsTo(User::class);
    //  }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //untuk mencari slug di route Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
