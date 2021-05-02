<?php
namespace App\Http\Controllers;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('background_image'))
        {

            // Getting the image from the client request
            $postBackgroundImage = $request->file('background_image');

            // Retrieving the original image name
            $name = $postBackgroundImage->getClientOriginalName();

            // Defining the folders who the images is going to be sended
            $path = "uploads".DIRECTORY_SEPARATOR.date('Y/m/d').DIRECTORY_SEPARATOR."images";
            $destination = public_path($path);

            // Verifiyng if this image name already existed in the folder and renaming the image if this happens
            if(file_exists(public_path($path.DIRECTORY_SEPARATOR.$name))){
                $name = time().'-'.$postBackgroundImage->getClientOriginalName();
            }

            // Triyng to move the image
            if($postBackgroundImage->move($destination, $name)){

                // Retriving the values
                $data = $request->all();
                $data['author'] = 1;
                $data['background_image'] = "$destination/$name";

                try {
                    $createPost = $this->postService->create($data);
                    if($createPost){
                        var_dump("show. com imnagem");
                    }
                }catch (\Exception $e){
                    var_dump($data);
                    var_dump('Deu ruim');
                    var_dump($e->getMessage());
                }
            }
        }else{
            $data = $request->all();
            $data['author'] = 1;

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
