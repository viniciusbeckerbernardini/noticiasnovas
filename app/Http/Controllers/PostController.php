<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{
    private $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('background_image')){
            // Getting the image from the client request
            $postBackgroundImage = $request->file('background_image');
            // Retrieving the original image name
            $name = $postBackgroundImage->getClientOriginalName();
            // Defining the folders who the images is going to be sended
            $path = date('Y/m/d')."/images";
            $destination = public_path($path);
            // Verifiyng if this image name already existed in the folder and renaming the image if this happens
            if(file_exists(public_path(`/images/$name}`))){
                $name = time().'-'.$postBackgroundImage->getClientOriginalName();
            }
            // Triyng to move the image
            if($postBackgroundImage->move($destination, $name)){
                // Retriving the values
                $data = $request->all();
                $data['author'] = 1;
                $data['background_image'] = "$destination/$name";
                DB::beginTransaction();
                try {
                    if($this->post->create($data)){
                        var_dump("show. com imnagem");
                        DB::commit();
                    }else{
                        var_dump("owws");
                    }
                }catch (\Exception $e){
                    var_dump($data);
                    var_dump('Deu ruim');
                    var_dump($e->getMessage());
                    DB::rollBack();
                }
            }
        }else{
            $data = $request->all();
            var_dump($data);
            $data['author'] = 1;
            DB::beginTransaction();
            try {
                if($this->post->create($data)){
                    var_dump("show, mas caí no else, sem imagem");
                    DB::commit();
                }else{
                    var_dump("owws");
                }
            }catch (\Exception $e){
                var_dump($data);
                var_dump('Deu ruim');
                var_dump($e->getMessage());
                DB::rollBack();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
