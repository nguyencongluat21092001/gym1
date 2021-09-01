
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
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>Month</th>
                                            <th>Cardio</th>
                                            <th>Swimming</th>
                                            <th>Yoga</th>
                                            <th>Zumba</th>
                                            <th>Masssage</th>
                                            <th>Boxing</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packs as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->post_category}}</td>
                                            <td>{{$post->post_price}}</td>
                                            <td>{{$post->post_month}}</td>
                                            <td>{{$post->post_cardio}}</td>
                                            <td>{{$post->post_swimming}}</td>
                                            <td>{{$post->post_yoga}}</td>
                                            <td>{{$post->post_zumba}}</td>
                                            <td>{{$post->post_massage}}</td>
                                            <td>{{$post->post_boxing}}</td>
                                            <td><button type="button" class="btn btn-info">edit</button></td>
                                            <td><button type="button" class="btn btn-danger btn-circle"> <a href="deletepricing/{{$post['id']}}"><i class="fas fa-trash"></i></button></td>
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