  <!-- Topbar End -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm rounded-4 p-0 ">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 "><img src="img/wisepaq.jpg" alt="" width="60" height="60" style="margin-right: 5px;">WISEPAQ</h2>
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        $query = "SELECT * FROM tbl_menu";
        $fetch_data = mysqli_query($connection, $query);

        if (mysqli_num_rows($fetch_data) == 0) {
          //echo "<h1 class='text-center'>No content Found</h1>";
        } else {
          while ($Row_menu = mysqli_fetch_assoc($fetch_data)) {
            $menu_id = $Row_menu['id_menu'];
            // $menu_title = ($_SESSION['lang'] == 'en') ? $Row_menu['menu_name'] : $Row_menu['menu_name_thai'];
            $link = $Row_menu['link'];
            if ($_SESSION['lang'] == 'en') {
              $menu_title = $Row_menu['name'];
            } else {
              $menu_title = $Row_menu['menuTH'];
            }
            $query_sub = "SELECT * FROM tbl_menu_dd WHERE id_menu = $menu_id";
            $fetch_data_sub = mysqli_query($connection, $query_sub);

            if (mysqli_num_rows($fetch_data_sub) == 0) {
              // ไม่มีเมนูย่อย
        ?>
              <a href="<?php echo $link; ?>" class="nav-item nav-link  <?php echo ($current_page == basename($link)) ? 'active' : ''; ?>">
                <?php echo $menu_title; ?>
              </a>
            <?php
            } else {
              // มีเมนูย่อย
            ?>
              <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <?php echo $menu_title; ?>
                </a>
                <div class="dropdown-menu  m-0 ps-2 py-0">
                  <?php
                  while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
                    // $menu_title_sub = ($_SESSION['lang'] == 'en') ? $Row_sub['menu_subname'] : $Row_sub['menu_subname_thai'];
                    $link_sub = $Row_sub['link_dd'];
                    if ($_SESSION['lang'] == 'en') {
                      $menu_title_sub = $Row_sub['name_dd'];
                    } else {
                      $menu_title_sub = $Row_sub['menuTH_dd'];
                    }
                  ?>
                    <a href="<?php echo $link_sub; ?>" class="dropdown-item text-uppercase  text-dark  py-2   <?php echo ($current_page == basename($link_sub)) ? 'active' : ''; ?>">
                      <?php echo $menu_title_sub; ?>
                    </a>
                  <?php
                  }
                  ?>
                </div>
              </div>
        <?php
            }
          }
        }
        ?>
      Language selector
      <li class="nav-item">
                  <select id="select_lang" onchange="change_lang(this.value)" class="form-select form-select-sm" style="font-size: 10px;">
                    <option value="" selected disabled hidden><?php echo constant("web_option_select"); ?></option>
                    <option value="th">ไทย</option>
                    <option value="en">English</option>
                  </select>
                </li> 
       test
      <div class="mobile-lang ">
                <div class="btn-group btn-group-toggle me-4 nav-mobile-lang" data-toggle="buttons">
                    <label class="btn btn-primary text-light ps-0 fs-6 <?php if ($_SESSION['lang'] == 'th') {
                                                                            echo 'active';
                                                                        } ?>">
                        <input type="radio" style="appearance: none;" id='select_lang' onchange="change_lang(this.value)" autocomplete="off" value="th">
                        <img src="img/flag.png" alt="TH Flag" style="width: 23px; height: 23px; margin-left: 5px; object-fit:cover;"> TH
                    </label>
                    <label class="btn btn-primary text-light ps-1 fs-6 <?php if ($_SESSION['lang'] == 'en') {
                                                                            echo 'active';
                                                                        } ?>">
                        <input type="radio" style="appearance: none;" id='select_lang' onchange="change_lang(this.value)" autocomplete="off" value="en">
                        <img src="img/united-kingdom.png" alt="EN Flag" style="width: 23px; height: 23px; margin-left: 0px; object-fit:cover;"> EN
                    </label>
                </div>
            </div>
            <div class="pc-lang my-auto me-4">
                <div class="text-box" id="dropdown">
                    <span class="text-content">
                        <img id="selected-flag" src="img/flag.png" alt="TH Flag" class="lang-select">
                        <span id="current-language">TH</span>
                    </span>
                    <i class="arrow"></i>
                    <ul class="dropdown-menu-lang">
                        <li data-lang="th" data-flag="img/flag.png" id="th" onclick="change_lang('th')">
                            <img src="img/flag.png" alt="TH Flag" class="lang-option">
                            <span>TH</span>
                        </li>
                        <li data-lang="en" data-flag="img/united-kingdom.png" id="en" onclick="change_lang('en')">
                            <img src="img/united-kingdom.png" alt="EN Flag" class="lang-option">
                            <span>EN</span>
                        </li>
                    </ul>
                </div>
            </div>
      </div>                                                        
    </div>
  </nav>
  <!-- End Navber -->