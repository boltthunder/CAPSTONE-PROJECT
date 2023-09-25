<?php
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Event Management";

include 'include/header.php'; 

 ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Attendance Management</h1>
        <div class="flex">
        <div>
            <select name="" id="" class="form-control text-center">
            <option disabled selected>Please Select Date To show</option>
            <option value="">sass</option>
        </select>
        </div>
        <div class="sm:ml-2">
            <button class="btn btn-primary" data-toggle="modal" data-target="#attendance-management">Add Attendance</button>
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
                                <th>Name</th>
                                <th>Event Name</th>
                                <th>Barangay</th>
                                <th>Event Venue</th>
                                <th>Date</th>
                                <!-- <th>Present/Absent</th> -->
                                <th>Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Filip A. Jabungan</td>
                                <td>Lebre kwarta</td>
                                <td>Barangay 1</td>
                                <td>Gym</td>
                                <td class="text-center">09/05/2023</td>
                                <!-- <td>Present</td> -->
                                <td>View</td>
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
<div class="modal fade" id="attendance-management" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <div class="sm:flex">
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="sm:ml-3">
                                <label for="name">Middle Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="sm:ml-3">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control">
                            </div>                           
                        </div>
                        <div class="flex justify-center">
                            <div class="form-group " style="width:100% !important;">
                            <div class="flex justify-center">
                                <label for="event_name">Event Name</label>
                            </div>
                                <select name="" id="" class="form-control text-center" >
                                    <option value="">Please Select Event</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group flex justify-center">
                            <div class="" style="width:100% !important;">
                            <div class="flex justify-center">
                                <label for="brgy">Date</label>                                
                            </div>
                                <input type="date" id="brgy" class="text-center form-control">
                            </div>
                        </div>
                        <!-- <div class="sm:flex form-group" >
                            <div class="">
                                <label for="venue">Event Venue</label>
                                <input type="text" id="venue" name="venue" class="form-control " style="width:232px;" required>
                            </div>
                            <div class="form-group ml-3">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" class="form-control text-center" style="width:220px;" required>
                        </div>
                        </div> -->
                        <div>
                           

                            <div class="mt-3 hidden selected" id="Whole">
                                <div class="flex justify-center">
                                    <h4>WHOLE DAY SCHEDULE</h4>
                                </div>
                                <hr>
                                <div class="flex justify-center">
                                    <h5>Morning</h5>
                                </div>
                                <div class="flex justify-center">
                                    <div>
                                        <label for="Start-time">Start Time</label>
                                        <input type="time" id="Start-time" name="start_event" class="form-control">
                                    </div>
                                    <div class="sm:ml-3" >
                                        <label for="end-time">End Time</label>
                                        <input type="time" id="end-time" name="end-time" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-center mt-3">
                                    <h5>Afternoon</h5>
                                </div>
                                <div class="flex justify-center">
                                    <div>
                                        <label for="after-in">Start Time</label>
                                        <input type="time" id="after-in" name="after-in" class="form-control">
                                    </div>
                                    <div class="sm:ml-3" >
                                        <label for="out-time">End Time</label>
                                        <input type="time" id="out-time" name="out_time" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 hidden selected" id="Morning" >
                                <div class="flex justify-center">
                                    <h5>Morning Schedule</h5>
                                </div>
                                <div class="flex justify-center">
                                    <div>
                                        <label for="Start-time">Start Time</label>
                                        <input type="time" id="Start-time" name="start_event"class="form-control">
                                    </div>
                                    <div class="sm:ml-3">
                                        <label for="end-time">End Time</label>
                                        <input type="time" id="end-time"  name="ebd_time" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 hidden selected" id="Afternonn" >
                                <div class="flex justify-center">
                                    <h5>Afternoon Schedule</h5>
                                </div>
                                <div class="flex justify-center">
                                    <div>
                                        <label for="after-in">Start Time</label>
                                        <input type="time" id="after-in" name="after-in" class="form-control">
                                    </div>
                                    <div class="sm:ml-3">
                                        <label for="out-time">End Time</label>
                                        <input type="time" id="out-time" name="out_time" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button class="btn btn-danger text-white"  type="button"
                    data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary">
                <!-- <a class="btn btn-primary" href="#">Create</a>--></form> 
            </div>
        </div>