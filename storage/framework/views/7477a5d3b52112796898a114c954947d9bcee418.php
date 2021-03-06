<?php $__env->startSection('content'); ?>
<div class="container">
        <div class=" col-md-12 col-sm-12 col-6"> 
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="breadcrumb-link text-white">home</a></li>
                    <li class="breadcrumb-item"><a href="/Profile" class="breadcrumb-link text-white">Profile</a></li>
                    <li class="breadcrumb-item" aria-current="text-white">Change boarding Pictures</li>
                </ol>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Boarding Picture</div>

                
                
                
                <table class="table table hover table-bordered">
                       <thead>
                            <tr>
                                <th width="5">Picture</th>
                                <th width="5">Change Picture</th>
                                <th width="5">Remove Picture</th>
                            </tr>
                       </thead>
                       <tbody>
                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <img src="/uploads/boardingpic/<?php echo e($data1->picture); ?>" class="img-rounded" style="border: 2px solid black; width:150px; height:150px; float:left;  margin-right:25px;"></td>
                                <td>
                                
                                <form enctype="multipart/form-data" action="<?php echo e(URL('/boardingpic'.$data1->id)); ?>" method="POST">
                                <label>Update This Image</label>
                                <input type="file" name="boarding_pic">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit"  class="pull-right btn btn-sm btn-primary">
                                </form>
                                </td>

                                <?php if($data1->main_pic==0): ?>
                                <td>
                                <h4><a href="<?php echo e(URL('/deletePicture'.$data1->id)); ?>"><center><button type="button" class="btn btn-danger">Delete</button></center></a></h4>
                                </td>
                                <?php endif; ?>

                                <?php if($data1->main_pic==1): ?>
                                <td style="color:black">
                                <h4>
                                <b>Main Picture</b>
                                </h4>
                                <h6>
                                This picture can only be replaced
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                           
                           
                       </tbody>
                         </table>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <h3><center><a href ="<?php echo e(URL('/addnewpicture'.$data2->boarding_id)); ?>"><button class="btn btn-primary" >Add new Picture</button></a></center></h3>
                        


                

                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>