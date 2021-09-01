{{-- @extends('front.Admin.front_dashboard.app')
@section('body')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2 pt-club text-white">Blog</h1>
                </div>
                <div class="flex justify-center ">
                  <div class="bg-gray-100 p-4 flex justify-center  items-center w-2/3">
                    <form action="{{ route('store.blog')}}" role="form" method="POST">
                      @method("POST")
                      @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Title</label>
                          <input type="text" name="post_title"class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Image</label>
                          <input type="text" name="post_image"class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Content</label>
                          <input type="text" name="post_content"class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="flex justify-center"> 
                          <button type="submit" name="submit"class="btn btn-success px-12">Create</button>
                         </div>    
                      </form>
                  </div>
                </div>
               
            </main>
        </div>
    </div>
    @endsection --}}
    @extends('front.Admin.frontdashboard.app')
@section('body')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Custom trainer</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Creat trainer</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.blog')}}" method="POST" enctype="multipart/form-data" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="post_title"c aria-describedby="name"
                                        placeholder="title">
                                </div>

                                <div class="form-group">
                                    <select type="text" name="post_category" id="" class="form-control "  style="border-radius: 30px; " >
                                        <option value="Category">Category</option>
                                        <option value="Giải trí">Thể thao</option>
                                        <option value="Tập luyện">Tập luyện</option>
                                        <option value="Giải trí">Giải trí</option>
                                        <option value="Dinh dưỡng">Dinh dưỡng</option>
                                        <option value="Động lực">Động lực</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user"
                                        name="post_image" aria-describedby="price"
                                        placeholder="image">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       name="post_content" aria-describedby="price"
                                        placeholder="content">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="create_at" aria-describedby="price"
                                        placeholder="Created_at">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_link" aria-describedby="price"
                                        placeholder="Link">
                                </div>
                                <div class="flex justify-center"> 
                                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Create</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fitness_LifeStyle 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            @endsection