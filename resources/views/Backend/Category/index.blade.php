<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Category Data</h4>
                            <a href="{{ route('category.create') }}" class="btn btn-primary ">Create<i
                                    class="fa fa-plus pl-2"></i></a>
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
                                            <th>Nepali Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $index => $value)
                                            <tr>
                                                <td class="">
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $value->eng_name }}
                                                </td>
                                                <td>
                                                    {{ $value->nep_name }}
                                                </td>
                                                <td>
                                                    {{ $value->slug }}
                                                </td>
                                                @if ($value->status == '1')
                                                    <td>
                                                        <span class="badge bg-success">Active</span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span class="badge bg-secondary">Not Active</span>
                                                    </td>
                                                @endif
                                                <td class="d-flex">
                                                    <a href="{{ route('category.edit', $id = $value->id) }}"
                                                        class="btn btn-sm btn-primary mx-2">Edit</a>
                                                    <form action="{{ route('category.destroy', $id = $value->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
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
