@extends('layout.master')
@section('content')
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>All Contact Data</h4>
                        <h2>let’s stay in touch!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->


<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="w-100">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>All Contact Data</h2>
                                </div>
                                <div class="content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($contacts as $c)
                                            <tr>
                                                <td>{{ $c->name }}</td>
                                                <td>{{ $c->email }}</td>
                                                <td>{{ $c->subject }}</td>
                                                <td>{{ $c->message }}</td>
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
        </div>
    </div>
</section>
@endsection