<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\ {
   Http\Controllers\Controller,
   Repositories\KidRepository,
   Http\Controllers\Traits\Indexable,
   Models\Info,
   Http\Requests\MessageRequest
};


class KidController extends Controller
{

    use Indexable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(KidRepository $repository)
    {
        $this->repository = $repository;
        $this->namespace = 'front';
    }



    /**
     * Show the application home page.
     *
     * @return
     */

    public function index(Request $request)
    {
        $news = $this->repository->funcNews($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['news' => $news])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.index', ['news' => $news]);
    }

    public function newsmore(Request $request)
    {
        $news = $this->repository->funcNewsmore($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['news' => $news])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.index', ['news' => $news]);
    }



    /**
     * Show the application news single page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsSingle(Request $request, $id, Info $model_news)
    {
        $news = $this->repository->funcSingle($request, $model_news);

        $new = $model_news->find($id);
        $new->click = $new->click+1;
        $new->save();
        return view('front.news-single', compact('new'), compact('news'));
    }


    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('front.contact');
    }

   /**
     * Sending message.
     *
     * @return
     */
    public function message(MessageRequest $request)
    {
       if(isset($request->validator) && $request->validator->fails())
       {
            return json_encode($request->validator->errors());
        }
        else{
            $this->repository->message($request);

            $lang = App::getLocale();
            if ($lang == 'uz') $text = "Sizning xabaringiz jo'natildi.";
            else $text = 'Ваше сообщение отправлено.';

             return redirect(route('contact'))->with('message-ok', $text);
            }
    }

    /**
     * errors page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('errors.403');
    }

    /**
     * errors page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('errors.403');
    }
    /**
     * login page for Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginAdmin()
    {
        return view('auth.login');
    }

}
