@extends('layout.master')
@section('page-title')
Dashboard
@endsection
@section('main-content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0"> Total Flat</p>
                                <h4 class="my-1">400</h4>
                                <p class="mb-0 font-13"><i class='bi bi-bank align-middle'></i>Flats on Rent are Available</p>
                            </div>
                            <div class="widgets-icons ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                              </svg>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Flat On Rent & Sale</p>
                                <h4 class="my-1">100k</h4>
                                <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>14% Since last Month</p>
                            </div>
                            <div class="widgets-icons ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                              </svg>
                            </div>
                        </div>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Flat Available</p>
                                <h4 class="my-1">60K</h4>
                                <p class="mb-0 font-13"><i class='bx bxs-down-arrow align-middle'></i>50% Flat Available</p>
                            </div>
                            <div class="widgets-icons ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                              </svg>
                            </div>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-xl-2">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-1">Revenue</h4>
                                <p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
                            </div>

                        </div>
                        <div class="row row-cols-1 row-cols-sm-3 mt-4">
                            <div class="col">
                                <div>
                                    <p class="mb-0">Total Funds</p>
                                    <h4 class="my-1 text-white">200K</h4>
                                    <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i> Since last month</p>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <p class="mb-0">Expenses</p>
                                    <h4 class="my-1 text-white">125K</h4>
                                    <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i> Since last month</p>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <p class="mb-0">Profit</p>
                                    <h4 class="my-1 text-white">75K</h4>
                                    <p class="mb-0 font-13"><i class='bx bxs-down-arrow align-middle'></i> Since last month</p>
                                </div>
                            </div>
                        </div>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header border-bottom-0">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Visitors</h5>
                                <p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days</p>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                            <thead class="table-light">
                                <tr>
                                    <th>Visitor Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                <p class="mb-0 font-13">Refrence Id #8547846</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 10, 2021</td>
                                    <td>+256.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                <p class="mb-0 font-13">Refrence Id #9653248</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 12, 2021</td>
                                    <td>+566.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                <p class="mb-0 font-13">Refrence Id #7689524</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 14, 2021</td>
                                    <td>+636.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Declined</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                <p class="mb-0 font-13">Refrence Id #8335884</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 15, 2021</td>
                                    <td>+246.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                <p class="mb-0 font-13">Refrence Id #7865986</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 16, 2021</td>
                                    <td>+876.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                <p class="mb-0 font-13">Refrence Id #8576420</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 18, 2021</td>
                                    <td>+536.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                <p class="mb-0 font-13">Refrence Id #3775420</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 18, 2021</td>
                                    <td>+536.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                                                <p class="mb-0 font-13">Refrence Id #3768920</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 19, 2021</td>
                                    <td>+536.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                                                <p class="mb-0 font-13">Refrence Id #9673520</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 20, 2021</td>
                                    <td>+86.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Declined</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                <p class="mb-0 font-13">Refrence Id #8576420</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 18, 2021</td>
                                    <td>+536.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                <p class="mb-0 font-13">Refrence Id #8576420</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 22, 2021</td>
                                    <td>+854.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img src="assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                                                <p class="mb-0 font-13">Refrence Id #4278620</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jan 18, 2021</td>
                                    <td>+536.00</td>
                                    <td>
                                        <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Complaints</h5>
                                <p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days</p>
                            </div>

                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                <thead class="table-light">
                                    <tr>
                                        <th>Payment Name</th>
                                        <th>Date & Time</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                    <p class="mb-0 font-13">Refrence Id #8547846</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 10, 2021</td>
                                        <td>+256.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                    <p class="mb-0 font-13">Refrence Id #9653248</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 12, 2021</td>
                                        <td>+566.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 18, 2021</td>
                                        <td>+536.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                    <p class="mb-0 font-13">Refrence Id #3775420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 18, 2021</td>
                                        <td>+536.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                                                    <p class="mb-0 font-13">Refrence Id #3768920</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 19, 2021</td>
                                        <td>+536.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                                                    <p class="mb-0 font-13">Refrence Id #9673520</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 20, 2021</td>
                                        <td>+86.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Declined</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 18, 2021</td>
                                        <td>+536.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                    <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 22, 2021</td>
                                        <td>+854.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                                                    <p class="mb-0 font-13">Refrence Id #4278620</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jan 18, 2021</td>
                                        <td>+536.00</td>
                                        <td>
                                            <div class="badge rounded-pill bg-light text-white w-100">Completed</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence chair</p>
                                <h4 class="mb-0">22k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence Table</p>
                                <h4 class="mb-0">10k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence Electric</p>
                                <h4 class="mb-0">5k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence Utility </p>
                                <h4 class="mb-0">15k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence Salary</p>
                                <h4 class="mb-0">100k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Expence Miscellaneous</p>
                                <h4 class="mb-0">60k</h4>
                            </div>
                            <div class="ms-auto">

                                <p class="mb-0 font-13">From Last Month</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">COMPLAINTS</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5" id="chart15"></div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Unresolved<span class="badge bg-light-white-2 rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">In-Progress<span class="badge bg-light-white-3 rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Resolved<span class="badge bg-white rounded-pill text-dark">9</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">All Complaints <span class="badge bg-light-white-4 text-white rounded-pill">10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <p class="font-weight-bold mb-1">Visitors</p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-0">43,540</h4>
                            </div>
                            <div class="">
                                <p class="mb-0 align-self-center font-weight-bold ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
                                </p>
                            </div>
                        </div>
                        <div id="chart21"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Sales Overiew</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5" id="chart20"></div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div>
                                <h6 class="mb-1 font-weight-bold">$289.42</h6>
                                <p class="mb-0">Last Month</p>
                            </div>
                            <div class="mb-1">
                                <h6 class="mb-1 font-weight-bold">$856.14</h6>
                                <p class="mb-0">Last Month</p>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold">$987,25</h6>
                                <p class="mb-0">Last Year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">New Customers</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="customers-list p-3 mb-3">
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Emy Jackson</h6>
                                <p class="mb-0 font-13">emy_jac@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Martin Hughes</h6>
                                <p class="mb-0 font-13">martin.hug@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Laura Madison</h6>
                                <p class="mb-0 font-13">laura_01@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Shoan Stephen</h6>
                                <p class="mb-0 font-13">s.stephen@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-20.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Keate Medona</h6>
                                <p class="mb-0 font-13">Keate@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-16.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Paul Benn</h6>
                                <p class="mb-0 font-13">pauly.b@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="assets/images/avatars/avatar-25.png" class="rounded-circle" width="46" height="46" alt="">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Winslet Maya</h6>
                                <p class="mb-0 font-13">winslet_02@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Orders Summary</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-0 row-cols-1 row-cols-md-3">
                            <div class="col border-end">
                                <div id="chart16"></div>
                            </div>
                            <div class="col border-end">
                                <div id="chart17"></div>
                            </div>
                            <div class="col">
                                <div id="chart18"></div>
                            </div>
                        </div>
                        <div id="chart19"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </div>
</div>
@endsection
