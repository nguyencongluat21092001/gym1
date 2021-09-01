@extends('front.Admin.frontdashboard.app')
@section('body')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List trainer</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Adress</th>
                                            <th>Phone</th>
                                            <td>Comment</td>
                                            <td>time</td>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    @foreach ($contacts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_name}}</td>
                                            <td>{{$post->post_age}}</td>
                                            <td>{{$post->post_adress}}</td>
                                            <td>{{$post->post_phone}}</td>
                                            <td>{{$post->post_comment}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td><button type="button" class="btn btn-info">edit</button></td>
                                            <td><button type="button" class="btn btn-danger">remove</button></td>
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
