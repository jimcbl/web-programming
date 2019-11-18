<header class="justify-content-between mt-2 align-items-center">
    <div class="logo-wrapper d-flex ">
        <div class="header-left-wrapper d-flex ">
            <a class="d-block" href="?page=homepage">
                <img src="./images/logo.svg" alt="Company logo" id="logo-company" /></a>

            <nav class="dropdown-m ml-4">
                <ul>
                    <li class="topmenu"><a href="?page=homepage">Home</a></li>
                    <li class="topmenu">
                        <a>Products</a>
                        <ul class="submenu">
                            <li><a>Price</a></li>
                            <li class="divider"></li>
                            <li><a>Name</a></li>
                            <li class="divider"></li>
                            <li>
                                <a>Category</a>
                                <ul class="submenu">
                                    <li><a>Laptop</a></li>
                                    <li class="divider"></li>
                                    <li><a>Desktop</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a>Phones</a>
                                        <ul class="submenu">
                                            <li><a>Apple</a></li>
                                            <li class="divider"></li>
                                            <li><a>Samsung</a></li>
                                            <li class="divider"></li>
                                            <li><a>Others</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a>Others</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="topmenu">
                        <a>Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header-right-wrapper">
            <input class="form-control mr-2" id="header-search-form" type="text" placeholder="Search" aria-label="Search" />
            <div class="user-info name">
                <?php
                echo $_SESSION["fullname"]
                ?>
            </div>
            <a href="?page=logout">
                <button type="button" class="btn btn-outline-secondary btn-sm">
                    Log out
                </button>
            </a>
        </div>
    </div>

    <div class="header d-flex align-items-center justify-content-center"></div>
</header>