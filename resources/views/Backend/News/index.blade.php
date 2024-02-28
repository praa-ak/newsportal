<x-app-layout>
    <section class="section">
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header justify-content-between">
                  <h4>Company Data</h4>
                  <a href="{{route('newscreate')}}" class="btn btn-primary">Create News<i class="fa fa-plus"></i></a>
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
                        @foreach ($news as $value )
                        <tr>
                            <td>
                                {{$value->id}}
                            </td>


                            <td>
                                {{$value->title}}
                            </td>
                            <td>
                            <img src="{{$value->image}}" alt="">
                            </td>
                            <td>
                                <p>{!! $value->description !!}</p>

                            </td>


                          <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>

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
