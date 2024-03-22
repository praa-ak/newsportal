<x-app-layout>
    <section class="section container">
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3> Creation Form</h3>
                        <a href="{{ route('news.index') }}" class="btn btn-primary"><i
                                class="fa fa-chevron-left"></i><span>Go Back</span></a>
                    </div>
                    <form action="{{ route('news.update',$id = $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body ">
                            <div class="row ">
                                <div class="form-group col-6">
                                    <label>Select any Category</label>
                                    <select class="multiple-select form-control" name="categories[]" multiple="multiple">
                                        @foreach ($category as $value)
                                        <option value="{{$value->id}}" @foreach ($news->categories as $item )
                                            {{$item->id == $value->id ? 'selected':''}}
                                        @endforeach>{{$value->eng_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" value="{{$news->title}}">
                                </div>

                                <div class="form-group col-12">
                                    <label>Descritpion</label>
                                    <textarea name="description" class="summernote">{{$news->description}}</textarea>
                                </div>
                                <div class="form-group col-6">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <img src="{{asset($news->image)}}" width="120" alt="">

                            </div>




                            <div>
                                <button type="submit" class="btn btn-success">Save Data</button>
                            </div>
                    </form>
                </div>
            </div>
    </section>
</x-app-layout>
