@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
            <div class="left-sidebar">
                <ul class="nav flex-column sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd" />
                            </svg>
                            My Apartments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd" />
                            </svg>
                            Inbox
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd" />
                            </svg>
                            Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd" />
                            </svg>
                            Ads
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd" />
                            </svg>
                            Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h3>Candidates</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Back-end developer</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Raghunandan</td>
                            <td>Vempati</td>
                            <td>JS developer</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Suresh</td>
                            <td>Mohan</td>
                            <td>Project Manager</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Syam</td>
                            <td>Babu</td>
                            <td>Scrum master</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Karthik</td>
                            <td>Ravichandran</td>
                            <td>Back-end developer</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3>Invoice</h3>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Invoice #184382</h5>
                            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            <a href="#" class="btn btn-info">Print</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Invoice #184386</h5>
                            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            <a href="#" class="btn btn-info">Print</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Invoice #184389</h5>
                            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            <a href="#" class="btn btn-info">Print</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Invoice #184391</h5>
                            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            <a href="#" class="btn btn-info">Print</a>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>


@endsection