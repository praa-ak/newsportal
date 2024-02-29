<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between">
                  <h4>Company Data</h4>
                  <a href="{{route('news.create')}}" class="btn btn-primary">Create News<i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th class="text-center">
                            SN
                          </th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($news as $value)


                        <tr>
                            <td>
                              {{$value->index}}

                            </td>


                            <td>
                                {{$value->title}}
                            </td>
                            <td>
                            <img src="{{asset('images/'.$value->image)}}" alt="" style="width: 120px">
                            </td>
                            <td>
                                <p>{!! $value->description !!}</p>

                            </td>


                          <td>
                            <a href="{{route('news.edit',$id=$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{route('news.destroy', $id=$value->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
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
        </div>
    </section>
</x-app-layout>
