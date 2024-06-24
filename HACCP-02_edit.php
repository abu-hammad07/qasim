<?php
session_start();
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
include_once('./files_php/database.php');
$db = new Database();
$id = $_GET['id'];
$data = $db->edit_select('HACCP_02', "HACCP_02_id = $id");

while ($row = $data->fetch_assoc()) {
?>
    <main class="nxl-container">
        <div class="nxl-content">
            <form method="post" action="files_php/HACCP-02.php">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><a href="index.html">Home</a></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                            <li class="breadcrumb-item">SSOP-01</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <!-- <a href="javascript:void(0);" class="btn btn-info successAlertMessage">
                        <i class="feather-arrow-right me-2"></i>
                        <span>Back</span>
                    </a> -->
                        <div class="page-header-right-items">
                            <div class="d-flex d-md-none">
                                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                    <i class="feather-arrow-left me-2"></i>
                                    <span>Back</span>
                                </a>
                            </div>
                            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                                <a href="users.html" class="btn btn-light-brand">
                                    <i class="feather-arrow-right me-2"></i>
                                    <span>Back</span>
                                </a>
                                <!-- successAlertMessage -->
                                <button type="submit" name="Update" class="btn btn-primary ">
                                    <i class="feather-save me-2 "></i>
                                    <span>Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="d-md-none d-flex align-items-center">
                            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                                <i class="feather-align-right fs-20"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- [ page-header ] end -->
                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-xl-12"><?php include_once('./includes/alerts.php'); ?></div>
                    </div>
                    <!-- RAW NOT GROUND HACCP RAW MEAT TEMPERATURE LOG -->
                    <div class="card mb-5 shadow-sm">
                        <div class="card-header bg-primary ">
                            <h4 class="mb-0 text-white">RAW NOT GROUND HACCP RAW MEAT TEMPERATURE LOG</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <input type="text" hidden  value="<?= $row['HACCP_02_id']; ?>" required name="id"/>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Form #
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" readonly value="HACCP-02-RawNotGround">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">1. Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" name="date" value="<?= $row['date'] ?>" id="date" placeholder="Select Date">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">2. Time
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="time" class="form-control" name="time" value="<?= $row['time'] ?>" id="time" placeholder="Select Time">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">3. Product name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="product_name" value="<?= $row['product_name'] ?>" id="product-name" placeholder="Enter Product Name">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">4. Internal temp (Chicken 40F)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="internal_temp_chicken_40F" value="<?= $row['internal_temp_chicken_40F'] ?>" id="internal-temp" placeholder="Enter Internal Temperature">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">5. Initials
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="initials" id="initials" value="<?= $row['initials'] ?>" placeholder="Enter Your Initials">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">6. Pre-shipper signature
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="pre_shipper_signature" value="<?= $row['pre_shipper_signature'] ?>" id="pre-shipper-signature" placeholder="Enter Pre-shipper Signature">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">7. Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" name="verification_date" value="<?= $row['verification_date'] ?>" id="verification-date" placeholder="Select Date">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WEEKLY VERIFICATION -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-success ">
                            <h4 class="mb-0 text-white">WEEKLY VERIFICATION</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">1. Verified initials
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="verified_initials" value="<?= $row['verified_initials'] ?>" id="verified-initials" placeholder="Enter Verified Initials">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">2. Verified date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" name="verified_date" value="<?= $row['verified_date'] ?>" id="verified-date" placeholder="Select Verified Date">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">3. Verified time
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="time" class="form-control" name="verified_time" value="<?= $row['verified_time'] ?>" id="verified-time" placeholder="Select Verified Time">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">4. Verified method
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select form-control" name="verified_method"  id="verified-method">
                                        <option value="<?= $row['verified_method'] ?>" selected>Select Method</option>
                                        <option value="Direct observation">Direct observation</option>
                                        <option value="Review records">Review records</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Results
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" name="results" data-select2-selector="icon">
                                        <option value="<?= $row['results'] ?>" selected>Select Results</option>
                                        <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                        <option value="No" data-icon="feather-x text-danger">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md-12">
                            <!-- successAlertMessage -->
                            <button type="submit" name="Update" class="btn btn-primary ">
                                <i class="feather-save me-2"></i>
                                <span>Update</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>
        <!-- [ Footer ] end -->
    </main>
<?php
}
?>
<!--! ================================================================ !-->
<!--! [End] Main Content !-->
<!--! ================================================================ !-->
<!--! ================================================================ !-->
<!--! Footer Script !-->
<!--! ================================================================ !-->
<!--! BEGIN: Vendors JS !-->
<?php
include_once('./includes/footer.php');
?>