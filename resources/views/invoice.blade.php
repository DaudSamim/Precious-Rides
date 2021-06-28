@extends('layout.default')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h6 class="panel-title">Invoice</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li class="fullscreen_element"><a href="javascript:void(0)"></a></li>
                    <li class="collapse_element"><a class="up" href="javascript:void(0)"></a></li>
                    <li class="refresh_element"><a href="javascript:void(0)"></a></li>
                    <li class="close_element"><a href="javascript:void(0)"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row invoice_v2">
                        <div class="card card-invoice">
                            <div class="card-body">
                                <div class="invoice-header">
                                    <div class="heading-1 invoice-title">ALAR TAXI Invoice</div>
                                    <div class="billed-from">
                                        <h6>Perfectin, INDIA.</h6>
                                        <p>Street Address<br>
                                            City, Zip Code<br>
                                            Phone: (123) 456-7890<br>
                                            Fax: (123) 456-7890<br>
                                            Email: youremail@companyname.com</p>
                                    </div>
                                </div>
                                <div class="row m-t-20">
                                    <div class="col-md-6">
                                        <label>Billed To</label>
                                        <div class="billed-to">
                                            <h6 class="m-b-0"><strong>Company Name</strong></h6>
                                            <p>Street Address<br>
                                                City, Zip Code<br>
                                                Phone: (123) 456-7890<br>
                                                Fax: (123) 456-7890<br>
                                                Email: youremail@companyname.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Invoice
                                            Information</label>
                                        <p class="invoice-info-row">
                                            <span>Invoice No</span>
                                            <span>#0664544PVR</span>
                                        </p>
                                        <p class="invoice-info-row">
                                            <span>Issue Date:</span>
                                            <span>May 30,2018</span>
                                        </p>
                                        <p class="invoice-info-row">
                                            <span>Due Date:</span>
                                            <span>June 04,2018</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table table-invoice">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-right">Unit Price</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet, consectetur</td>
                                            <td class="f-s-12">Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s, when an
                                                unknown printer took a galley of type and scrambled it
                                                to make a type specimen book. It has survived not only
                                                five centuries.
                                            </td>
                                            <td class="text-center">10</td>
                                            <td class="text-right">$10.00</td>
                                            <td class="text-right">$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lorem ipsum dolor</td>
                                            <td class="f-s-12">Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s, when an
                                                unknown printer took a galley of type and scrambled it
                                                to make a type specimen book. It has survived not only
                                                five centuries.
                                            </td>
                                            <td class="text-center">90</td>
                                            <td class="text-right">$50.00</td>
                                            <td class="text-right">$4,500.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet</td>
                                            <td class="f-s-12">Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s, when an
                                                unknown printer took a galley of type and scrambled it
                                                to make a type specimen book. It has survived not only
                                                five centuries.
                                            </td>
                                            <td class="text-center">50</td>
                                            <td class="text-right">$30.00</td>
                                            <td class="text-right">$1,500.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" rowspan="4" class="valign-middle">
                                                <div class="invoice-notes">
                                                    <label>Notes</label>
                                                    <p>Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it
                                                        to make a type specimen book. It has survived
                                                        not only five centuries.</p>
                                                </div>
                                            </td>
                                            <td class="text-right">Sub-Total</td>
                                            <td colspan="3" class="text-right">$6,100.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Paypal Fee (5.4%)</td>
                                            <td colspan="3" class="text-right">$329.40</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Discount</td>
                                            <td colspan="3" class="text-right">-$00.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right tx-uppercase f-w-700">Total Due</td>
                                            <td colspan="3" class="text-right"><h4
                                                        class="tx-primary f-w-700">$6,429.40</h4></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr class="m-b-30">
                                <a href="javascript:void(0)" class="btn btn-primary pull-right">Pay
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection