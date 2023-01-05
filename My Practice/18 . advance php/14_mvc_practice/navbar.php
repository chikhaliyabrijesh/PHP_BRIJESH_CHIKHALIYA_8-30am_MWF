
<!-- navigation -->
<div class="navigation-agileits">
<div class="container-fluid">
<nav class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header nav_2">
    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div> 
                
<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $mainurl;?>" class="act">Home</a></li>	
        <!-- Mega Menu -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <h6>All Groceries</h6>
                            <li><a href="<?php $mainurl;?>groceries">Dals & Pulses</a></li>
                            <li><a href="<?php $mainurl;?>groceries">Almonds</a></li>
                            <li><a href="<?php $mainurl;?>groceries">Cashews</a></li>
                            <li><a href="<?php $mainurl;?>groceries">Dry Fruit</a></li>
                            <li><a href="<?php $mainurl;?>groceries"> Mukhwas </a></li>
                            <li><a href="<?php $mainurl;?>groceries">Rice & Rice Products</a></li>
                        </ul>
                    </div>	
                </div>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <h6>All Household</h6>
                            <li><a href="<?php $mainurl;?>household">Cookware</a></li>
                            <li><a href="<?php $mainurl;?>household">Dust Pans</a></li>
                            <li><a href="<?php $mainurl;?>household">Scrubbers</a></li>
                            <li><a href="<?php $mainurl;?>household">Dust Cloth</a></li>
                            <li><a href="<?php $mainurl;?>household"> Mops </a></li>
                            <li><a href="<?php $mainurl;?>household">Kitchenware</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <h6>Baby Care</h6>
                            <li><a href="<?php $mainurl;?>personalcare">Baby Soap</a></li>
                            <li><a href="<?php $mainurl;?>personalcare">Baby Care Accessories</a></li>
                            <li><a href="<?php $mainurl;?>personalcare">Baby Oil & Shampoos</a></li>
                            <li><a href="<?php $mainurl;?>personalcare">Baby Creams & Lotion</a></li>
                            <li><a href="<?php $mainurl;?>personalcare"> Baby Powder</a></li>
                            <li><a href="<?php $mainurl;?>personalcare">Diapers & Wipes</a></li>
                        </ul>
                    </div>  	
                </div>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Packaged Foods<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <h6>All Accessories</h6>
                            <li><a href="<?php $mainurl;?>packagedfoods">Baby Food</a></li>
                            <li><a href="<?php $mainurl;?>packagedfoods">Dessert Items</a></li>
                            <li><a href="<?php $mainurl;?>packagedfoods">Biscuits</a></li>
                            <li><a href="<?php $mainurl;?>packagedfoods">Breakfast Cereals</a></li>
                            <li><a href="<?php $mainurl;?>packagedfoods"> Canned Food </a></li>
                            <li><a href="<?php $mainurl;?>packagedfoods">Chocolates & Sweets</a></li>
                        </ul>
                    </div>	
                </div>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <h6>Tea & Coeffe</h6>
                            <li><a href="<?php $mainurl;?>beverages">Green Tea</a></li>
                            <li><a href="<?php $mainurl;?>beverages">Ground Coffee</a></li>
                            <li><a href="<?php $mainurl;?>beverages">Herbal Tea</a></li>
                            <li><a href="<?php $mainurl;?>beverages">Instant Coffee</a></li>
                            <li><a href="<?php $mainurl;?>beverages"> Tea </a></li>
                            <li><a href="<?php $mainurl;?>beverages">Tea Bags</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </li>

        <li><a href="<?php $mainurl;?>gourmet">Gourmet</a></li>
        <li><a href="<?php $mainurl;?>offers">Offers</a></li>
        <li><a href="<?php $mainurl;?>contact">Contact</a></li>


        <?php
        if(!isset($_SESSION["register_id"]))
        {
        ?>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <li><a href="<?php $mainurl;?>register">Create Account</a></li>
                            <li><a href="<?php $mainurl;?>login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </li>


        <?php
        }
        else
        {
        ?>


        <li class="dropdown" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Welcome : <?php echo ucfirst($_SESSION["fname"]);?></a>
            <ul class="dropdown-menu" style="width:200px">
                <div class="row">
                    <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            <li  style="margin-left: 40px;"><a href="<?php $mainurl;?>manageprofile">Manage Profile</a></li>

                            <li style="margin-left: 40px;"><a href="<?php $mainurl;?>">Manage Notifications</a></li>

                            <li style="margin-left: 40px;"><a href="<?php $mainurl;?>">Manage Order</a></li>
                            
                            <li style="margin-left: 40px;" ><a href="<?php $mainurl;?>changepassword">Change Password</a></li>
                            
                            <li style="margin-left: 40px;"><a href="<?php $mainurl;?>manageprofile?deleteprofile_id=<?php echo $shwprof[0]["register_id"];?>" onclick="return confirm('Are You Sure To Delete Your Account ?')">Delete Account</a></li>
                            
                            <li style="margin-left: 40px;"><a href="<?php $mainurl;?>?logout-here" onclick="return confirm('Are You Sure To Logout ?')">Logout</a></li>
                        </ul>        
                    </div> 
                </div>                
            </ul>
        </li>


        <?php
        }
        ?>

    </ul>
</div>
</nav>
</div>
</div>
		
<!-- //navigation -->