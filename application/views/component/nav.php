<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">ITSAJ</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ITSAJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('/page/home'); ?>">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url('/page/services/sap'); ?>">SAP</a></li>
                        <li><a href="<?php echo site_url('/page/services/datawarehousing'); ?>">Data Warehousing</a></li>
                        <li><a href="<?php echo site_url('/page/services/cloudcomputing'); ?>">Cloud Computing</a></li>
                        <li><a href="<?php echo site_url('/page/services/sharepoint'); ?>">Sharepoint</a></li>
                        <li><a href="<?php echo site_url('/page/services/hadoop'); ?>">Java & Hadoop</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('/page/products'); ?>">Products</a></li>
                <li><a href="<?php echo site_url('/page/partners'); ?>">Partners</a></li>
                <li><a href="<?php echo site_url('/page/careers'); ?>">Careers</a></li>
                <li><a href="<?php echo site_url('/page/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>