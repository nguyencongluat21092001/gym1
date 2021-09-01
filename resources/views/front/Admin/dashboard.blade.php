

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
                            <form action="{{ route('store.post')}}" method="POST" enctype="multipart/form-data" class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_name" aria-describedby="name"
                                        placeholder="Name trainer...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_age" aria-describedby="price"
                                        placeholder="Age trainer">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user"
                                        name="post_image" aria-describedby="price"
                                        placeholder="Image trainer ...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_introduce" aria-describedby="price"
                                        placeholder="Introduce...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="post_experience" aria-describedby="price"
                                        placeholder="Experience...">
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