<?php
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Event Management";

include 'include/header.php';
// include 'config/controller.php'; 
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Event Management</h1>
        <div class="flex">
            <div>
                <!-- <input type="date" class="form-control text-center"> -->
                <select name="" id="" class="form-control text-center">
                    <option disabled selected>Please Select Date To show</option>
                    <option value="">sass</option>
                </select>
            </div>
            <div class="sm:ml-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#create-event">Create event</button>
            </div>
        </div>
    </div>


    <div class="add-box flex justify-center grid-cols-1 h-fit-content">
        <div class="card shadow mb-4 flex justify-center w-[100%] ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Event Name</th>
                                <th>Barangay</th>
                                <th>Event Venue</th>
                                <th>Participant</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="text-center">61</td>
                                <td class="text-center">61</td>
                                <td>2011/04/25</td>
                                <td class="text-center"><a href="attendance.php" class=" btn btn-success ">100</a></td>
                                <td class="text-center">09/05/2023</td>
                                <td class="text-center">REQUEST FOR APPROVAL</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






</div>
<!-- /.container-fluid -->

<?php include 'include/in-footer.php'; ?>
<!-- add Organization-->
<div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create event</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <form action="" method="post">

                        <div class="grid sm:grid-cols-2">
                            <div class="form-group">
                                <label for="event_name">Event Name</label>
                                <input type="text" class="form-control" id="event_name" id="event_name"
                                    placeholder="Enter event name" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="brgy">Barangay</label>
                                <select name="brgy" id="brgy" class="form-control text-center" required>
                                    <option disabled selected> Please Select Barangay </option>
                                    <option value="Barangy 1">Barangy 1</option>
                                    <option value="Barangy 2">Barangy 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="venue">Event Venue</label>
                                <input type="text" id="venue" name="venue" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control text-center" required>
                            </div>
                            <div class="">
                                <label for="event-status">Event Status</label>
                                <select name="status" id="event-status" class="form-control text-center" required>
                                    <option value="">Please Select Status</option>
                                    <option value="Approve" class="btn-success">Approve</option>
                                    <option value="Diapprove" class="btn-danger">Disapprove</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-start mb-2">
                                <h4>Select Event Schedule</h4>
                            </div>
                            <div>
                                <!-- onchange="select(this)" -->
                                <select name="schedule" id="schedule" class="form-control text-center mb-3" required>
                                    <option selected value="">Please Select Schedule</option>
                                    <option value="Whole">Whole Day</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternonn">Afternoon</option>
                                </select>
                            </div>

                            <div class="mt-3 selected" id="showWhole">
                                <div class="flex justify-center mb-3">
                                    <h4>SCHEDULE</h4>
                                </div>
                                <hr class="mb-3">
                                <div class="flex justify-center">
                                    <!-- <h5>Morning</h5> -->
                                </div>
                                <div class="flex justify-center">
                                    <div>
                                        <label for="Start-time">Start Time</label>
                                        <input type="time" id="Start-time" name="start_event" class="form-control">
                                    </div>
                                    <div class="sm:ml-3">
                                        <label for="end-time">End Time</label>
                                        <input type="time" id="end-time" name="end-time" class="form-control">
                                    </div>
                                </div>                              
                             
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button class="btn btn-danger text-white" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary">Submit</button>
                <!-- <a class="btn btn-primary" href="#">Create</a></form> -->
            </div>
        </div>