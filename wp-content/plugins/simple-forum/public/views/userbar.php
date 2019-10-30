<?php if (SPF_Auth::is_auth()): ?>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            Welcome <strong><?php echo $_SESSION['account']->username;?></strong>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url() . '/spf-profile'; ?>">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url() . '/spf-logout'; ?>">Logout</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
</div>
<?php else: ?>
    
<?php endif; ?>