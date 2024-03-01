<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Advertisement Data</h4>
                            <a href="{{ route('advertise.create') }}" class="btn btn-primary ">Create<i
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
                                            <th>Company Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Payment</th>
                                            <th>Banner</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ad as $index => $value)
                                            <tr>
                                                <td class="">
                                                    {{ ++$index }}
                                                </td>
                                                <td>
                                                    {{ $value->company_name }}
                                                </td>
                                                <td>
                                                    {{ $value->address }}
                                                </td>
                                                <td>
                                                    {{ $value->contact }}
                                                </td>
                                                <td>
                                                    {{ $value->email }}
                                                </td>
                                                <td>
                                                   <img src="{{asset('images/'.$value->payment)}}" alt="" style="width: 120px">
                                                </td>
                                                <td>
                                                    <img src="{{asset('images/'.$value->banner)}}" alt="" style="width: 120px">
                                                </td>

                                                @if ($value->status == 'accept')
                                                    <td>
                                                        <span class="badge bg-success">Accepted</span>
                                                    </td>
                                                @elseif ($value->status == 'pending')
                                                    <td>
                                                        <span class="badge bg-secondary">Pending</span>
                                                    </td>
                                                @else
                                                <td>
                                                    <span class="badge bg-danger">Declined</span>
                                                </td>

                                                @endif
                                                <td class="d-flex">
                                                    <a href="{{ route('advertise.edit', $id = $value->id) }}"
                                                        class="btn btn-sm btn-primary mx-2">Edit</a>
                                                    <form action="{{ route('advertise.destroy', $id = $value->id) }}"
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
