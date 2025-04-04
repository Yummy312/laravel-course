<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // Активация мягкого удаления
    protected $table = 'posts'; // Указываем что данная модель связана с таблицей 'posts'

    protected $guarded = []; // означает, что все поля модели могут быть массово присвоены (без ограничений)

    // protected $guarded = ['title', 'content']; // В этом случае поля title и content будут защищены от массового присвоения, а все остальные поля можно будет заполнять.


}
