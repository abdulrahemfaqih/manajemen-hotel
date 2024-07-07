@section('css')
    <style>
        .input-search {
            width: 300px;
        }
    </style>
@endsection
<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Hotel</h1>
            @include('partials.breadcrumbs')
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    @if (session()->has('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header d-flex justify-content-between align-items-center gap-4 flex-wrap">
                                <h5 class="card-title mb-0 order-lg-1">Hotel List</h5>
                                <input type="text" autocomplete="off" wire:model.live.debounce.1000ms="search"
                                    class="form-control input-search order-3 order-lg-2" placeholder="Search">
                                <a wire:navigate href="{{ route('hotel.create') }}"
                                    class="btn btn-primary order-1 order-lg-3">Create Hotel</a>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Stars</th>
                                            <th scope="col">Check In Time</th>
                                            <th scope="col">Check Out Time</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($hotels) == 0)
                                            <tr>
                                                <th class="text-center" colspan="8">tidak ada data hotel</th>
                                            </tr>
                                        @endif
                                        @foreach ($hotels as $hotel)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $hotel->name }}</td>
                                                <td>{{ $hotel->address }}</td>
                                                <td>{{ $hotel->phone }}</td>
                                                <td>{{ $hotel->email }}</td>
                                                <td>{{ $hotel->stars }}</td>
                                                <td>{{ $hotel->check_in_time }}</td>
                                                <td>{{ $hotel->check_out_time }}</td>
                                                <td>
                                                    <a wire:navigate href="{{ route('hotel.edit', $hotel->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <button wire:click="delete({{ $hotel->id }})"
                                                        wire:confirm="Are you sure to delete this hotel?"
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $hotels->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
