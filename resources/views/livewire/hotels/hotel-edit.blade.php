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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Hotel</h5>
                            <form wire:submit.prevent="update">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input wire:model="name" type="text" class="form-control"
                                                    id="inputName">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPhone" class="col-sm-4 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input wire:model="phone" type="text" class="form-control"
                                                    id="inputPhone">
                                                @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input wire:model="email" type="email" class="form-control"
                                                    id="inputEmail">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label for="inputStars" class="col-sm-4 col-form-label">Stars</label>
                                            <div class="col-sm-8">
                                                <input wire:model="stars" type="number" class="form-control"
                                                    id="inputStars">
                                                @error('stars')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputCheckIn" class="col-sm-4 col-form-label">Checkin
                                                Time</label>
                                            <div class="col-sm-8">
                                                <input wire:model="check_in_time" type="datetime-local"
                                                    class="form-control" id="inputCheckIn">
                                                @error('check_in_time')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputCheckOut" class="col-sm-4 col-form-label">Checkout
                                                Time</label>
                                            <div class="col-sm-8">
                                                <input wire:model="check_out_time" type="datetime-local"
                                                    class="form-control" id="inputCheckOut">
                                                @error('check_out_time')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea wire:model="address" class="form-control" style="height: 100px" id="inputAddress"></textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary my-2 float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
