@extends('layout.default')

@section('content')
    <div class="table-responsive">
        <table class="table table-separate table-extended">
            <tbody>
            <tr>
                <td class="text-center w-40">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/default-avatar.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Tech Admin</span>
                            <span class="f-s-11">andrew.heston@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been logged in.
                </td>
                <td>
                    User logged-in to the CRM...
                </td>
                <td class="w-70">
                    09:59
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-1.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Admin</span>
                            <span class="f-s-11">michel.newton@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been logged out.
                </td>
                <td>
                    User logged-out to the CRM...
                </td>
                <td>
                    10:47
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-2.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Vehicle Alloted
                </td>
                <td>
                    VID: 645 Has been Alloted for PNR: PVR201873894 From: GANDHIPURAM To: VADAVALLI PICKUP TIME: 04:00 ETD: 04:23
                </td>
                <td>
                    15:30
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-3.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been Pickedup
                </td>
                <td>
                    VID: 645 Has been pickedup Cust Name: Kadhirvel From: GANDHIPURAM To: VADAVALLI ETD is: 04:23
                </td>
                <td>
                    18:24
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-4.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been Droped
                </td>
                <td>
                    VID: 403 Has Dropped Cust Name: Venkatraman in Railway Station at 04:29
                </td>
                <td>
                    17:05
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-5.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Tech Admin</span>
                            <span class="f-s-11">andrew.heston@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    New CRM Bookings
                </td>
                <td>
                    New CRM Bookings, Cust Name: Chandran Nair PNR: PVR201873895 From: CENTRAL STUDIO To: GANDHIPURAM PICKUP TIME: 06:20
                </td>
                <td>
                    17:05
                </td>
            </tr>
            <tr>
                <td class="text-center w-40">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/default-avatar.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Tech Admin</span>
                            <span class="f-s-11">andrew.heston@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been logged in.
                </td>
                <td>
                    User logged-in to the CRM...
                </td>
                <td>
                    09:59
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-1.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Admin</span>
                            <span class="f-s-11">michel.newton@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been logged out.
                </td>
                <td>
                    User logged-out to the CRM...
                </td>
                <td>
                    10:47
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-2.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Vehicle Alloted
                </td>
                <td>
                    VID: 645 Has been Alloted for PNR: PVR201873894 From: GANDHIPURAM To: VADAVALLI PICKUP TIME: 04:00 ETD: 04:23
                </td>
                <td>
                    15:30
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-3.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been Pickedup
                </td>
                <td>
                    VID: 645 Has been pickedup Cust Name: Kadhirvel From: GANDHIPURAM To: VADAVALLI ETD is: 04:23
                </td>
                <td>
                    18:24
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-4.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Arumugam</span>
                            <span class="f-s-11">arumugam478@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    Has been Droped
                </td>
                <td>
                    VID: 403 Has Dropped Cust Name: Venkatraman in Railway Station at 04:29
                </td>
                <td>
                    17:05
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>

                        </label>
                    </div>
                </td>
                <td>
                    <div class="user_box">
                        <div class="user-with-avatar">
                            <img alt="" src="{{ asset('assets/images/avatar/user-5.jpg') }}">
                        </div>
                        <div class="user_email">
                            <span>Tech Admin</span>
                            <span class="f-s-11">andrew.heston@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td>
                    New CRM Bookings
                </td>
                <td>
                    New CRM Bookings, Cust Name: Chandran Nair PNR: PVR201873895 From: CENTRAL STUDIO To: GANDHIPURAM PICKUP TIME: 06:20
                </td>
                <td>
                    17:05
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection