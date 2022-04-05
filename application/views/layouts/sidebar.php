<div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo site_url(); ?>dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Today's Word
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>manage-todays_word" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Manage Today's Word</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>add-todays_word" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Add Words</p>
                </a>
              </li>
              
            </ul>
          </li>
         
          
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>manage-users" class="nav-link">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Manage Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>add-users" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Add User</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                News & Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>manage-news_event" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Manage News & Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>add-news_event" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add News & Events</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>manage-gallery" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Manage Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>add-gallery" class="nav-link">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Add Image</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Birthdays
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url(); ?>manage-birthdays" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Manage Birthdays</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>add-birthdays" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Add Birthday</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>