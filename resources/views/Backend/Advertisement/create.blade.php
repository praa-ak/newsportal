<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Creation Form</h3>
                        <a href="{{route('advertise.index')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i><span class="pl-2">Go Back</span></a>
                    </div>
                    <form action="{{route('advertise.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-6">
                                <label>Company Name<span class="text-danger">*</span></label>
                                <input type="text" name="company_name" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Address<span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Contact<span class="text-danger">*</span></label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group col-4  mr-3">
                                <label  for="">Payment Screenshot<span class="text-danger">*</span></label>
                                <input type="file" name="payment" class="form-control" required>
                            </div>

                            <div class="form-group col-4 image-preview " id="image-preview">
                                <label  for="image-upload">Payment Screenshot<span class="text-danger">*</span></label>
                                <input type="file" name="banner" class="form-control" id="image-upload"  required>
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
