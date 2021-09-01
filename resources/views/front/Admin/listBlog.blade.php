 @extends('front.Admin.frontdashboard.app')
@section('body')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Blog</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <td>Category</td>
                                            <th>Image</th>
                                            <th>Content</th>
                                            <th>Link</th>
                                            <th>Time</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($blogs as $post)
                                           
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_title}}</td>
                                            <td>{{$post->post_category}}</td>
                                            <td><img src="storage/images/blog/{{$post->post_image}}" width="100px"></td>
                                            <td>{{$post->post_content}}</td>
                                            <td>{{$post->post_link}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td> <button type="button" class="btn btn-info">edit</button></td>
                                            <td><button type="button" class="btn btn-danger btn-circle"> <a href="deleteblog/{{$post['id']}}"><i class="fas fa-trash"></i></button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection          