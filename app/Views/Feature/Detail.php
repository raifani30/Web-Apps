<?= $this->extend('Layout/_Layout') ?>

<?= $this->section('content'); ?>
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Feature</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Heraio Admin</a>
                        </li>
                        <li class="breadcrumb-item">Feature</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page-title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title" style="margin-bottom:20px">Detail Feature | <span class="sub-title"><?= $data->ftr_id ?></span></h4>
                    
                        <input type="hidden" name="id_qa" value="<?= $data->ftr_id ?>" />
                        <div class="row" style="margin-bottom:50px">
                            <div class="col-md-4">
                                <dt>FEATURE NAME</dt>
                                <dd class="sub-title"><?= $data->ftr_name ?></dd>
                                <dt>FEATURE DESC</dt>
                                <dd class="sub-title"><?= $data->ftr_desc ?></dd>
                                <dt>STATUS</dt>
                                <dd class="sub-title">
                                    <?php if($data->status=='Y'):?>
                                        <span class="badge badge-success">Active</span>
                                    <?php elseif($data->status=='N'):?>
                                        <span class="badge badge-danger">Non-Active</span>
                                    <?php endif ?>
                                </dd>
                            </div>
                            <div class="col-md-4">
                                <dt>CREATED DATE</dt>
                                <dd class="sub-title"><?= $data->created_date ?></dd>
                                <dt>CREATED BY</dt>
                                <dd class="sub-title"><?= $data->created_by ?></dd>
                                <dt>MODIFIED DATE</dt>
                                <dd class="sub-title"><?= $data->modified_date ?></dd>
                                <dt>MODIFIED BY</dt>
                                <dd class="sub-title"><?= $data->modified_by ?></dd>
                            </div>
                        </div>
                        <a href="<?= base_url('Feature/Index');?>" class="btn btn-secondary mb-2">Back</a>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?= $this->endSection('content'); ?>