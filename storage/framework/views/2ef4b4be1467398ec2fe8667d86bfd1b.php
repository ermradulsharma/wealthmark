<style>
/*body {*/
/*  background-color: white;*/
/*  color: black;*/
/*}*/

.dark-mode {
  background-color: #212529!important;
  color: white!important;
}
</style>
<section class="logo-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="<?php echo e(url('')); ?>" class="navbar-brand">
                    <img src="<?php echo e(url('assets/img/wealthmark-logo.svg')); ?>" alt="" class="wealthmark-logo" />
                </a>
            </div>
            <div class="col mynav-sec">
                <nav class="navbar navbar-expand-lg py-0">
                    <div class="ms-auto">
                        <ul class="navbar-nav mydrop">
                            <?php if(Auth::check()): ?>
                            <?php
                                function hideEmailAddress($email)
                                {
                                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                                    {
                                        list($first, $last) = explode('@', $email);
                                        $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
                                        $last = explode('.', $last);
                                        $last_domain = str_replace(substr($last['0'], '10'), str_repeat('*', strlen($last['0'])-1), $last['0']);
                                        $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
                                        return $hideEmailAddress;
                                    }
                                }
                            ?>
                            <li class="nav-item dropdown user-dropdown-li">
                                <a class="nav-link dropdown-toggle user-dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="icon"> <i class="bi bi-person-circle"></i> </span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="bi bi-phone-fill me-2"></i> <b>
                                        <?php if(Auth::user()->is_phone_verified==1): ?>
                                            <?php echo e(substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4)); ?>

                                        <?php else: ?>
                                            <?php echo e(hideEmailAddress(Auth::user()->email)); ?>

                                        <?php endif; ?>
                                        </b></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item verify-status-main" href="#">
                                            <div class="verify-box-dropdown">
                                                <span class="user-type"> <i class="bi bi-wifi me-2"></i> Regular User </span>
                                                <?php if(Auth::user()->government_id_verified==0): ?>
                                                   <span class="verify-status">
                                                   <i class="bi bi-wifi me-2"></i> Unverified
                                                   </span>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->government_id_verified==1): ?>
                                                   <span class="verify-status" style="background-color:green;color:white;font-size:12px !important;">
                                                   <!--<i class="bi bi-wifi me-2" style="font-size:12px;"></i> -->
                                                   Verified
                                                   </span>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(url(app()->getLocale())); ?>/user/dashboard"><i class="bi bi-person-circle me-2"></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(url(app()->getLocale())); ?>/user/logout"><i class="bi bi-box-arrow-left me-2"></i>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <li class="nav-item"><a class="nav-link language-text" href="#" data-bs-toggle="modal" data-bs-target="#currLangModal">English&nbsp;<?php if(Cookie::get('country_name')!=""): ?>(<?php echo e(Cookie::get('country_name')); ?>) <?php endif; ?></a></li>
                            <i class="nav-devider d-none d-sm-block"></i>
                            <li>
                                <a class="nav-link ps-0" href="javascript:void(0);">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" id="darkSwitch" checked="checked" onclick="myFunction()"/>

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\Laravel Project\wealthMark\resources\views/template/custom_header.blade.php ENDPATH**/ ?>