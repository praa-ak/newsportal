<x-layout>
    <section class="section container">
        <div class="card-header">
            <h3>Ad Creation Form</h3>
        </div>
    <form action="{{route('adstore')}}" method="POST" class="col-6"   enctype="multipart/form-data">
        @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Company Name</label>
      <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Contact</label>
        <input type="text" name="contact" class="form-control" id="exampleInputEmail1">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputEmail1">

      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Payment Screenshot</label>
      <input type="file" name="payment" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Advertisement Banner</label>
        <input type="file" name="banner" class="form-control" id="exampleInputPassword1">
      </div>
      <div> <button type="submit" class="btn btn-success">Save Data</button></div>

  </form>


</section>
</x-layout>
