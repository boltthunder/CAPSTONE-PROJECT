<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Store';

include 'include/header.php'
    ?>

<div class="container-fluid">

    <div class="card mt-2 profile-holder">
        <div class="card-body card-profile ">

            <div class="container d-flex justify-content-center con-prof ">
                <div class="form-group">
                    <div class="flex  ">
                        <div class="card" style="background-color:: #6c757d !important">
                            <div class="card-body d-flex gap-4 ">
                                <img src="images/1.jpeg" alt="" class="image-box">
                                <div>
                                    <div>
                                        <label for="fullname" class="">Full Name: Filip Jabungan</label>
                                    </div>
                                    <div>
                                        <label for="fullname" class="">Birthday: October 04-2000</label>
                                    </div>
                                    <div>
                                        <label for="fullname" class="">Age: 23</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-center  gap-4">
                <div class="form-group mt-3  ">
                    <button class="text-white btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Create Post</button>
                </div>
                <div class="form-group mt-3  ">
                    <button class="text-white btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Update Profile</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="card flex justify-center"
            style="width:1000px !important;background-color:#524691; box-shadow: 0 0 10px white;">
            <div class="card-body row gap-4 p-5">



                <div class="card flex justify-center p-3" style="width:440px">
                    <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade btn-adjust " >
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="images/1.jpeg" class="img-caro" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/2.jpg" class="img-caro" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/3.jpg" class="img-caro" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->

                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="images/1.jpeg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="images/2.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="images/3.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>

                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>
                            <!-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                                data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                                data-carousel-slide-to="4"></button> -->
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="card-body">
                        sample text
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group sm:flex gap-4">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" id="price" class="form-control" placeholder="Php 100.00">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <select id="description" class="form-control text-center">
                            <option disabled selected>-----Please Select-----</option>
                            <option value="">For Rent</option>
                            <option value="">For Barter</option>
                            <option value="">For Trade</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>