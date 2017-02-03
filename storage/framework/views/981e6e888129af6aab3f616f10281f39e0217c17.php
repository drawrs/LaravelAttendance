<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($info['status']); ?></div>

                <div class="panel-body">
                    <table class="table table-responsive">
                        <form action="/absen" method="post">
                            <?php echo e(csrf_field()); ?>

                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="keterangan..." name="note">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="btnIn" <?php echo e($info['btnIn']); ?>>ABSEN MASUK</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="btnOut" <?php echo e($info['btnOut']); ?>>ABSEN KELUAR</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat Absensi</div>

                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($absen->date); ?></td>
                                    <td><?php echo e($absen->time_in); ?></td>
                                    <td><?php echo e($absen->time_out); ?></td>
                                    <td><?php echo e($absen->note); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4"><b><i>TIDAK ADA DATA UNTUK DITAMPILKAN</i></b></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo $data_absen->links(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>