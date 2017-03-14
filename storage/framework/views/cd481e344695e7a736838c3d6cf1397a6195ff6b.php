<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body pb1">
                   <ul class="list-group" role="tablist">
                    <li role="presentation" class="list-group-item"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active">Reservations</a></li>
                    <li role="presentation" class="list-group-item"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New reservation</a></li>
                    <li role="presentation" class="list-group-item"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Checkouts</a></li>
                    <li role="presentation" class="list-group-item"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Customers</a></li>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body pb1">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">

                                <div class="dashboard col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            Reservations
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <th>Customer</th>
                                                        <th>Contact</th>
                                                        <th>Checkin</th>
                                                        <th>Checkout</th>
                                                        <th>Charge</th>
                                                        <th>Services</th>
                                                        <th>Staff</th>

                                                        <?php for($i = 0; $i < 3; $i++): ?>
                                                        <tr>
                                                            <td>Juan Dela Cruz</td>
                                                            <td>09215233140</td>
                                                            <td>07/01/12</td>
                                                            <td>07/01/12</td>
                                                            <td>1000</td>
                                                            <td>
                                                                <ul>
                                                                    <li><small>Service 1</small></li>
                                                                    <li><small>Service 2</small></li>
                                                                    <li><small>Service 3</small></li>
                                                                </ul>
                                                            </td>
                                                            <td>John</td>
                                                        </tr>
                                                        <?php endfor; ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                        
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">New reservation</div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" role="form" method="POST" action="/new-reservation">
                                                <?php echo e(csrf_field()); ?>


                                                <div class="form-group">
                                                    <label for="name" class="col-md-4 control-label">Name</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" name="name" required autofocus>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="contact" class="col-md-4 control-label">Contact</label>

                                                    <div class="col-md-6">
                                                        <input id="contact" type="number" class="form-control" name="contact" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="checkin" class="col-md-4 control-label">Checkin date</label>

                                                    <div class="col-md-6">
                                                        <input id="checkin" type="date" class="form-control" name="checkin" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="checkout" class="col-md-4 control-label">Checkout date</label>

                                                    <div class="col-md-6">
                                                        <input id="checkout" type="date" class="form-control" name="checkout" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="services" class="col-md-4 control-label">Services</label>

                                                    <div class="col-md-6">
                                                        <input id="services" type="text" class="form-control" name="services" required autofocus>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="charge" class="col-md-4 control-label">Charge</label>

                                                    <div class="col-md-6">
                                                        <input id="charge" type="number" class="form-control" name="charge" required autofocus>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                                                                       
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="messages">
                            
                            <div class="dashboard col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Checkouts
                                    </div>
                                </div>                                                        
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="settings">
                            
                            <div class="dashboard col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Customers
                                    </div>
                                </div>                                                        
                            </div>

                        </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>