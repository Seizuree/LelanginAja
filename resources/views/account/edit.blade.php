@extends('template.generic')

@section('title', 'Edit Account')


@section('content')
    <!-- Start edit account Area -->
    <div class="container section">
        <div class="row">
            <div class="col-md-3 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile Information</a>
                            <a class="nav-link" id="v-pills-security-tab" data-bs-toggle="pill" href="#v-pills-security"
                                role="tab" aria-controls="v-pills-security" aria-selected="false">Security</a>
                            <a class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill"
                                href="#v-pills-notification" role="tab" aria-controls="v-pills-notification"
                                aria-selected="false">Notification</a>
                            <a class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill" href="#v-pills-account"
                                role="tab" aria-controls="v-pills-account" aria-selected="false">Account Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="true"><i class="lni lni-user"></i></a></li>
                            <li class="nav-item"> <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-security" role="tab" aria-controls="v-pills-security"
                                    aria-selected="true"><i class="lni lni-protection"></i></a></li>
                            <li class="nav-item"> <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-notification" role="tab" aria-controls="v-pills-notification"
                                    aria-selected="true"><i class="lni lni-alarm"></i></a></li>
                            <li class="nav-item"> <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-account" role="tab" aria-controls="v-pills-account"
                                    aria-selected="true"><i class="lni lni-cog"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <h6>YOUR PROFILE INFORMATION</h6>
                                <hr>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">address</label>
                                        <input type="address" class="form-control" id="address"
                                            placeholder="Enter your address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control" id="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-security" role="tabpanel"
                                aria-labelledby="v-pills-security-tab">
                                <h6>SECURITY SETTINGS</h6>
                                <hr>
                                <form>
                                    <div class="mb-3">
                                        <label for="current-password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="current-password"
                                            placeholder="Enter your current password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new-password"
                                            placeholder="Enter your new password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            placeholder="Confirm your new password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-notification" role="tabpanel"
                                aria-labelledby="v-pills-notification-tab">
                                <h6>NOTIFICATION SETTINGS</h6>
                                <hr>
                                <form>
                                    <div class="form-group"> <label class="d-block mb-0">Security Alerts</label>
                                        <div class="small text-muted mb-3">Receive security alert notifications via email
                                        </div>
                                        <div class="custom-control custom-checkbox"> <input type="checkbox"
                                                class="custom-control-input" id="customCheck1" checked=""> <label
                                                class="custom-control-label" for="customCheck1">Email each time a
                                                vulnerability is found</label></div>
                                        <div class="custom-control custom-checkbox"> <input type="checkbox"
                                                class="custom-control-input" id="customCheck2" checked=""> <label
                                                class="custom-control-label" for="customCheck2">Email a digest summary of
                                                vulnerability</label></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                                aria-labelledby="v-pills-account-tab">
                                <h6>ACCOUNT SETTINGS</h6>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label class="d-block text-danger">Delete Account</label>
                                        <p class="text-muted font-size-sm">Once you delete your account, there is no going
                                            back. Please be certain.</p>
                                    </div>
                                    <button type="submit" class="btn btn-danger">Delete Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End edit account Area -->
@endsection
