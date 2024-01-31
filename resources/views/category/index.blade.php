@include('header')
<h4>categori</h4>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">categori</h4>
                        <a href="{{ url('categories/create')}}" class="btn btn-primary float-right">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Is Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                                        <td>
                                            <a href="{{ url('categories/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                                            <a href="{{ url('categories/'.$item->id.'/delete') }}" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')"
                                                >Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
