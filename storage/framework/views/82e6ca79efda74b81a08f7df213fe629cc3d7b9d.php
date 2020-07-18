
<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Chat</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-3 ">


    <div class="col-md-8 ">
        <div class="card direct-chat direct-chat-primary   ">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto chat-syb2" style="display: block;">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages h-100">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="https://lorempixel.com/640/480/?50746" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            I would love to.
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                                    <span class="contacts-list-msg">Where is your new...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img class="contacts-list-img" src="https://lorempixel.com/640/480/?50746">

                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                                    <span class="contacts-list-msg">Never mind I found...</span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="display: block;">
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                    </div>
                </form>
            </div>
            <!-- /.card-footer-->
        </div>
    </div>
    <div class=" col-md-4 ">
        <div class="overflow-auto ct-mn-lst h-100">
            <div class="chat-syb card mb-0 ">
                <div class="card-header">
                    <h5 class="mb-0 text-center">
                        Contacts   <i class="fas fa-id-card-alt"></i>
                    </h5>
                </div>
                <div class="card-body overflow-auto">
                    <ul class="list-unstyled p-0">
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="">
                                <div class="d-flex justify-content-between contact-chat-list" dir="ltr">
                                    <div class="d-flex alight-items-center">
                                        <img class="urs-img-ch" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress.png" alt="">
                                        <p class="main-chat-usr d-flex align-items-center">User name</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="bdg-num ">10</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="card-footer bg-white">
                    <div>
                        <button class="more-cht-btn"> المزيد  <i class="fas fa-plus"></i> </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Messages/chat.blade.php ENDPATH**/ ?>