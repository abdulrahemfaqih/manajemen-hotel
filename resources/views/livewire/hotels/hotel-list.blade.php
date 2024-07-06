<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            @include('partials.breadcumbs')
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hotel List</h5>
                            <table class="table table-hover">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Hotel Purabaya</td>
                                        <td>Surabaya, jl singaraja no 45</td>
                                        <td>72457237</td>
                                        <td>purabaya-hotel@gmail.com</td>
                                        <td>4.5/5</td>
                                        <td>jam 8</td>
                                        <td>jam 12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
