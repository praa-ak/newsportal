<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Edit Form</h3>
                        <a href="{{route('advertise.index')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i><span class="pl-2">Go Back</span></a>
                    </div>
                    <form action="{{route('advertise.update',$id = $ad->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                    <div class="card-body ">
                        <div class="row ">
                            <div class="form-group col-6">
                                <label>Company Name<span class="text-danger">*</span></label>
                                <input type="text" name="company_name" value="{{$ad->company_name}}" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Address<span class="text-danger">*</span></label>
                                <input type="text" name="address" value="{{$ad->address}}" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Contact<span class="text-danger">*</span></label>
                                <input type="text" name="contact" value="{{$ad->contact}}" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{$ad->email}}" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Payment Screenshot<span class="text-danger">*</span></label>
                                <input type="file" name="payment" value="{{$ad->payment}}" class="form-control" >
                            </div>
                            <div class="form-group col-6">
                                <label>Ad Banner<span class="text-danger">*</span></label>
                                <input type="file" name="banner" value="{{$ad->banner}}" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                  <option value="accept">Accept</option>
                                  <option value="pending">Pending</option>
                                  <option value="decline">Decline</option>
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
