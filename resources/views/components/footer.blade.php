<div>
    <form action="{{route('substore')}}" method="post">
        @csrf
        <div class="row my-3">
            <div class="col-md-8">
                <input class="form-control" type="email" name="email"
                    placeholder="eg. youremail@gmail.com"
                    value="">
                                            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-danger">Subscribe</button>
            </div>
        </div>
    </form>
</div>
