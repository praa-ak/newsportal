<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Creation Form</h3>
                        <a href="{{route('category.index')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i><span class="pl-2">Go Back</span></a>
                    </div>
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-6">
                                <label>English Name<span class="text-danger">*</span></label>
                                <input type="text" name="eng_name" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Nepali Name <span class="text-danger">*</span></label>
                                <input type="text" name="nep_name" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                  <option value="1">Active</option>
                                  <option value="0">Not Active</option>
                                </select>
                              </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Save Data</button>
                        </div>

                    </div>
            </form>
            </div>
        </div>
    </section>
</x-app-layout>
