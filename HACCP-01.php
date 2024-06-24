<?php 
include_once('./includes/header.php');
include_once('./includes/sidebar.php');
include_once('./includes/navbar.php');
?>
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"><a href="index.html">Home</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="users.html">Users</a></li>
                        <li class="breadcrumb-item">HACCP-02-RawNotGround</li>
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
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </a>
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
                    <div class="col-lg-3">
                        <div class="mb-4">
                            <label class="form-label"><strong>Date:</strong></label>
                            <input type="date" class="form-control" id="date" placeholder="Select Date">
                        </div>
                    </div>
                </div>
                <!-- Date Selection -->


                <!-- CCP#1-FECAL CONTAMINATION results -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-primary ">
                        <h5 class="text-white">CCP#1 - FECAL CONTAMINATION RESULTS</h5>
                        <!-- <span>(V: no fecal contamination, X: fecal contamination)</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">1. Time</label>
                                <input type="time" class="form-control" placeholder="Enter Time">
                            </div>
                            <div class="col-xl-8  mt-3">
                                <label class="form-label">2. Results</label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 mt-3">
                                <label class="form-label">3. Monitor Verifier</label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">4. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">5. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">6. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>

                            <div class="col-xl-4 mt-3 ">
                                <label class="form-label">8. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                            <!-- 10 Checkboxes for Results -->
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">7. Results</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCPH2-CARCASS CHILL LOG -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-success ">
                        <h5 class="text-white">CCP#2 - CARCASS CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCP 3 GIBLET CHILL LOG -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-warning ">
                        <h5 class="text-white">CCP 3 - GIBLET CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCP#4-REWORK FECAL CONTAMINATION results -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-danger ">
                        <h5 class="text-white">CCP#4 - REWORK FECAL CONTAMINATION RESULTS</h5>
                        <!-- <span>(V: no fecal contamination, X: fecal contamination)</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">1. Time</label>
                                <input type="time" class="form-control" placeholder="Enter Time">
                            </div>
                            <div class="col-xl-8  mt-3">
                                <label class="form-label">2. Results</label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 mt-3">
                                <label class="form-label">3. Monitor Verifier</label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">4. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">5. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">6. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>

                            <div class="col-xl-4 mt-3 ">
                                <label class="form-label">8. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                            <!-- 10 Checkboxes for Results -->
                            <div class="col-xl-4 mt-3">
                                <label class="form-label">7. Results</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCP#5-REWORK PRODUCT CHILL LOG -->
                <div class="card mb-5 shadow-sm">
                    <div class="card-header bg-info ">
                        <h5 class="text-white">CCP#5 - REWORK PRODUCT CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">OK</option>
                                    <option value="X">Not OK</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
<?php
include_once('./includes/footer.php');
?>