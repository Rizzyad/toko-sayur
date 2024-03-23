<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-muted">Review Saya</h1>
                </div>
                <div class="col-sm-2"> 
                    <button class="btn btn-primary"><a class="text-white" href="<?php echo base_url('customer/reviews/write'); ?>">Tulis Review Baru</a></button>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a class="text-primary" href="<?php echo base_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Review</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-body<?php echo ( count($reviews) > 0) ? ' p-0' : ''; ?>">
            <?php if ( count($reviews) > 0) : ?>
                <div class="table-responsive">
                    <table class="table table-striped m-0">
                        <tr class="bg-primary">
                            <th scope="col">No.</th>
                            <th scope="col">Order</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Review</th>
                        </tr>
                        <?php foreach ($reviews as $review) : ?>
                        <tr>
                            <td><?php echo $review->id; ?></td>
                            <td><?php echo anchor('customer/reviews/view/'. $review->id, '#'. $review->order_number); ?></td>
                            <td><?php echo get_formatted_date($review->review_date); ?></td>
                            <td><?php echo $review->review_text; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php else : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            Belum ada review yang ditulis. Silahkan tulis baru.
                        </div>

                        <?php echo anchor('customer/reviews/write', 'Tulisan review baru'); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($pagination) : ?>
            <div class="card-footer">
                <?php echo $pagination; ?> 
            </div>
            <?php endif; ?>

        </div>
    </section>

</div>