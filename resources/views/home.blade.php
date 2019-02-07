@extends('edit_dashboard')
@section('right_panel')

        <div class="form-group">
            <section class="disabled">
                <div class="form-group row">
                    <h4 class="col-md-5  text-md-right text-success">Send This link to add refers</h4>
                    <div class="col-md-6">
                        <input id="refers_link" type="text" class="form-control" name="first_name" placeholder="" value="http://localhost/quickpayads/register/refers-id={{$user->id}}" readonly autofocus>
                    </div>
                </div>
            </section>
        </div>

            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                <h3 class="mb-0 fw-r">
                                    <span class="currency float-left mr-1">$</span>
                                    <span class="count">{{$user->account_balance}}</span>
                                </h3>
                                <p class="text-light mt-1 m-0">Account Balance</p>
                            </div><!-- /.card-left -->

                            <div class="card-right float-right text-right">
                                <i class="icon  icon-lg pe-7s-cash"></i>
                            </div><!-- /.card-right -->

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-6">
                        <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                <h3 class="mb-0 fw-r">
                                    <span class="float-left">{{$no_of_refers}}</span>
                                    {{--<span>%</span>--}}
                                </h3>
                                <br>
                                <h4 class="text-light mt-1 m-0">No Of Refers</h4>
                            </div><!-- /.card-left -->
                            <div class="card-right float-right text-right">

                                <div id="flotBar1" class="flotBar1">
                                    <i class="icon  icon-lg ti-user "></i>
                                </div>
                            </div><!-- /.card-right -->

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                <h3 class="mb-0 fw-r">
                                    <span >{{$user->account_type}}</span>
                                </h3>
                                <p class="text-light mt-1 m-0">Account Type</p>
                            </div><!-- /.card-left -->

                            <div class="card-right float-right text-right">
                                <i class="icon icon-lg ti-alarm-clock"></i>
                            </div><!-- /.card-right -->

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                <h3 class="mb-0 fw-r">
                                    <span class="">3</span>
                                </h3>
                                <p class="text-light mt-1 m-0">Duration Month</p>
                            </div><!-- /.card-left -->

                            <div class="card-right float-right text-right">
                                <div id="flotLine1" class="flotLine1">
                                    <i class="icon icon-lg ti-calendar"></i>
                                </div>
                            </div><!-- /.card-right -->

                        </div>

                    </div>
                </div>
                <!--/.col-->
{{--New Widgets End--}}
                <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">My Withdraw - History </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar"></th>
                                            <th>Withdraw Date</th>
                                            <th>Payout Date</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.orders -->
            <!-- Modal - Calendar - Add New Event -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#event-modal -->
            <!-- Modal - Calendar - Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><strong>Add a category </strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#add-category -->
        </div>
        <!-- .animated -->
   <!-- Enn of Animated Div content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; quickpayads
                </div>
            </div>
        </div>
    </footer>
    <!-- /.site-footer -->
    {{-- end of Content Div--}}
@endsection