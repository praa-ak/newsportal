<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Creation Form</h3>
                        <a href="{{route('companytable')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i><span>Go Back</span></a>
                    </div>
                    <form action="{{route('savecompany')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-6">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Contact <span class="text-danger">*</span></label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="form-group col-6">
                                <label>Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Save Data</button>
                        </div>

                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</x-app-layout>
