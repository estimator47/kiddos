<?php

namespace App\Repositories;


use Illuminate\Support\Facades\App;
use App\Models\ {
    Info,
    Teacher,
    Gallery,
    Message
};
use Illuminate\Support\Facades\DB;
class KidRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_news;
    protected $model_teacher;
    protected $model_gallery;
    protected $model_message;



    /**
     * Create a new ProductRepository instance.
     *
     * @param  \
     */
    public function __construct(Info $news, Teacher $teacher, Gallery $gallery, Message $message)

    {
        $this->model_news = $news;
        $this->model_teacher = $teacher;
        $this->model_gallery = $gallery;
        $this->model_message = $message;

    }

    /**
     * Create a query for News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNews($request)
    {
        $lang = App::getLocale();
        if ($lang == 'uz') $text = "";
        else $text = $lang;

        $query = $this->model_news
            ->select('id', 'name', 'info' , 'nameru', 'inforu' , 'image', 'click', 'created_at')
            ->LIMIT (9)
            ->orderBy('id', 'desc');
            if(isset($request->search)) {
                $query->where('name'.$text, 'like', '%' . $request->search . '%');
            }
         return $query->get();
    }

    /**
     * Create a query for more News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNewsmore($request)
    {
            $query = $this->model_news
            ->select('id', 'name', 'info' , 'nameru', 'inforu' ,'image', 'click', 'created_at')
            ->offset(($request->more*3)+6)
            ->limit(3)
            ->orderBy('id', 'desc');
           return $query->get();
    }

    /**
     * Create a query for Teacher.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSingle($request, $new)
    {

        $query = $this->model_news
            ->select('id', 'name', 'info', 'nameru', 'inforu', 'image', 'click', 'created_at')
            ->limit(4)
            ->orderBy('click', 'desc');
        return $query->get();
    }

   /**
     * Create a query for Teacher.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcTeacher($request)
    {
        $query = $this->model_teacher
            ->select('id', 'name', 'occupation', 'info', 'nameru', 'occupationru', 'inforu', 'image')
            ->orderBy('id', 'asc');
        return $query->get();
    }



    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcGallery($request)
    {
        $query = $this->model_gallery
            ->select('id', 'image')
            ->orderBy('id', 'desc');
        return $query->get();
    }

    /**
     * Saving messages.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function message($request)
    {
        //Message::create($request->all());
        $this->model_message->name = $request->name;
        $this->model_message->phone = $request->phone;
        $this->model_message->message = $request->message;
        $this->model_message->bold = 0;
        $this->model_message->save();

    }


/*
    public function funcNewsmore($request)
    {
        if (isset($_COOKIE['id'])) {
            $page = $_COOKIE['id'];
            $limit_page = ($page*3)+6;
            $query = $this->model_news
            ->select('id', 'name', 'date', 'info' ,'image')
            ->offset($limit_page)
            ->limit(3)
            ->orderBy('id', 'desc');
            setcookie('id',$page+1, time()+86000,'/');
        }
        else {
            $query = $this->model_news
            ->select('id', 'name', 'date', 'info' ,'image')
            ->offset(9)
            ->limit(3)
            ->orderBy('id', 'desc');
            setcookie('id',2, time()+86000,'/');
        }

         return $query->get();
    }
*/


}
