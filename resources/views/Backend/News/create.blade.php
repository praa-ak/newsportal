<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Creation Form</h3>
                        <a href="{{route('newstable')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i><span>Go Back</span></a>
                    </div>
                    <form action="{{route('savenews')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-6">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>Descritpion</label>
                                <textarea name="description" class="summernote-simple"></textarea>
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

