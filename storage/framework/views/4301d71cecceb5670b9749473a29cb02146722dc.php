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
                                            Reservations   <b><?php echo e($array[0]); ?></b>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <th><span class="glyphicon glyphicon-edit"></span>Edit</th>
                                                        <th>Customer</th>
                                                        <th>Contact</th>
                                                        <th>Checkin</th>
                                                        <th>Checkout</th>
                                                        <th>Charge</th>
                                                        <th>Services</th>
                                                        <th>Staff</th>

                                                        <?php if($array[0] == 0): ?> 
                                                            <center>
                                                                <tr>
                                                                    <td colspan="8">
                                                                        <h2>No reservations.</h2>
                                                                    </td>
                                                                </tr>
                                                            </center>
                                                        <?php else: ?> 
                                                            <?php $__currentLoopData = $array[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                   <form method="DELETE" action="destroy/<?php echo e($data->id); ?>">
                                                                        <input type="submit" class="btn btn-danger" value="X">
                                                                   </form>
                                                                </td>
                                                                <td><?php echo e($data->customer); ?></td>
                                                                <td><?php echo e($data->contact); ?></td>
                                                                <td><?php echo e($data->checkin); ?></td>
                                                                <td><?php echo e($data->checkout); ?></td>
                                                                <td><?php echo e($data->charge); ?></td>
                                                                <td>
                                                                    <p>
                                                                        <?php echo e($data->services); ?>

                                                                    </p>
                                                                </td>
                                                                <td><?php echo e($data->staff); ?></td>

                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
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
                                                        <input id="contact" type="text" class="form-control" name="contact" required>
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
                                                        <button type="submit" class="btn btn-primary" name="staff" value="<?php echo e(Auth::user()->name); ?>">
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
                                    <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <th>Customer</th>
                                                        <th>Contact</th>
                                                        <th>Services</th>
                                                        <th>Date out</th>

                                                        <?php if($array[0] == 0): ?> 
                                                            <center>
                                                                <tr>
                                                                    <td colspan="7">
                                                                        <h2>No Checkouts.</h2>
                                                                    </td>
                                                                </tr>
                                                            </center>
                                                        <?php else: ?> 
                                                            <?php $__currentLoopData = $array[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($data->customer); ?></td>
                                                                <td><?php echo e($data->contact); ?></td>
                                                                <td>
                                                                    <p>
                                                                        <?php echo e($data->services); ?>

                                                                    </p>
                                                                </td>
                                                                <td><?php echo e($data->checkout); ?></td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </table>
                                                </div>
                                            </div>
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
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                         <table class="table">
                                            <th>Customer</th>
                                            <th>Contact</th>
                                            <th>Services</th>

                                            <?php if($array[0] == 0): ?> 
                                                <center>
                                                    <tr>
                                                        <td colspan="7">
                                                            <h2>No Customers.</h2>
                                                        </td>
                                                    </tr>
                                                </center>
                                            <?php else: ?> 
                                                <?php $__currentLoopData = $array[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($data->customer); ?></td>
                                                    <td><?php echo e($data->contact); ?></td>
                                                    <td>
                                                        <p>
                                                            <?php echo e($data->services); ?>

                                                        </p>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </table>
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