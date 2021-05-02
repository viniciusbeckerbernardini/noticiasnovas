@include('admin.template.header')
@include('admin.template.navbar')
    <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        @include('admin.template.breadcumb')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <form action="/dashboard/post/create" enctype="multipart/form-data" method="post" role="form">
                {{csrf_field()}}
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Post</h3>
                                </div>
                                <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="post-slug">Slug do post</label>
                                            <div class="row">
                                                <div class="col-2"><span class="form-control">{{\Illuminate\Support\Facades\URL::to('/')}}/</span></div>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" id="post-slug" name="slug" placeholder="Digite o slug">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="post-title">Título do post</label>
                                            <input type="text" class="form-control" name="name" id="post-title" placeholder="Digite do título">
                                        </div>
                                        <div class="form-group">
                                            <label for="tinymce">Conteúdo</label>
                                            <textarea class="form-control" id="tinymce" name="content" placeholder="Texto"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto de destaque</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="background_image" class="custom-file-input" id="post-background-image">
                                                    <label class="custom-file-label" for="post-background-image">Escolha o arquivo</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Enviar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="post-date">Data da postagem</label>
                                            <input type="date" name="post_date" class="form-control" id="post-date">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck12">
                                                <label class="form-check-label" for="exampleCheck12">Salvar como rascunho</label>
                                            </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                        <button type="submit" class="btn btn-danger">Recomeçar</button>
                                    </div>
                            </div>
                            <!-- /.card -->
                        <!--/.col (right) -->
                    </div>
                        </div>
                        <!--Categorias-->
                        <!-- left column -->
                        <div class="col-md-2">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Categoria(as)</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck13">
                                            <label class="form-check-label" for="exampleCheck13">Esportes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck14">
                                            <label class="form-check-label" for="exampleCheck14">Porto Alegre</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck15">
                                            <label class="form-check-label" for="exampleCheck15">Jardim Algarve</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <!--/.col (right) -->
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    <!-- /.content-wrapper -->
@include('admin.template.footer')
