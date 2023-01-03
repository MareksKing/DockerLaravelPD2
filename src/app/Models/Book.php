<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'author_id','category_id', 'description', 'price', 'year'];
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id');
            $table->foreignId('category_id');
            $table->string('name', 256);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('year');
            $table->string('image', 256)->nullable();
            $table->boolean('display');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
