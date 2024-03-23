<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-white pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-muted d-inline-block mb-0">Review Order #<?php echo $review->order_number; ?></h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-light">
                  <li class="breadcrumb-item"><a class="text-primary" href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-primary" href="<?php echo site_url('admin/review'); ?>">Review</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order #<?php echo $review->order_number; ?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md-8">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="mb-0 text-white">Review Order #<?php echo $review->order_number; ?></h3>
                <?php if ($flash) : ?>
                <span class="float-right text-success font-weight-bold" style="margin-top: -30px;"><?php echo $flash; ?></span>
                <?php endif; ?>
              </div>
              <div class="card-body p-0">
              <table class="table align-items-center table-flush table-hover">
              <tr>
                        <td>Judul</td>
                        <td><b><?php echo $review->title; ?></b></td>
                    </tr>
                    <tr>
                        <td>Order</td>
                        <td><b>#<?php echo $review->order_number; ?></b></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><b><?php echo get_formatted_date($review->review_date); ?></b></td>
                    </tr>
                    <tr>
                        <td>Review</td>
                        <td><b><?php echo $review->review_text; ?></b></td>
                    </tr>
                </table>
              </div>
              
            </div>
            
          </div>

        </div>
        <div class="col-md-4">
            <div class="card card-primary">
              <div class="card-header bg-primary">
                  <h3 class="mb-0 text-white">Tindakan</h3>
              </div>
              <div class="card-body">
              <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">
                <i class="fa fa-trash"></i> Hapus
            </a>
              </div>
              
            </div>
        </div>
      </div>

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="card-header bg-primary">
          <h3 class="card-heading text-white text-center mt-2" id="modal-title-default">Hapus Kategori</h3>
        </div>
        <form action="#" id="deleteCustomer" method="POST">

          <input type="hidden" name="id" value="" class="deleteID">

          <div class="modal-body">
            <p>Anda yakin ingin menghapus review?</p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
            <button type="button" class="btn btn-primary my-4 ml-auto addPackageBtn" data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
