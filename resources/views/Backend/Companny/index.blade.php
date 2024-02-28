<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Company Data</h4>
                            <a href="{{ route('companycreate') }}" class="btn btn-primary">Create<i
                                    class="fa fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                SN
                                            </th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @if (!empty($company))
                                        <tbody>

                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <img src="{{ asset($company->logo) }}" alt="">
                                                </td>

                                                <td>
                                                    {{ $company->name }}
                                                </td>
                                                <td>
                                                    {{ $company->address }}
                                                </td>
                                                <td>
                                                    {{ $company->contact }}
                                                </td>
                                                <td>
                                                    {{ $company->email }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('editcompany', $id = $company->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete</a>

                                                </td>






                                            </tr>
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
