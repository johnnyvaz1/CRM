<?php
/*******************************************************************************
 *
 *  filename    : Include/Footer.php
 *  last change : 2002-04-22
 *  description : footer that appear on the bottom of all pages
 *
 *  http://www.churchcrm.io/
 *  Copyright 2001-2002 Phillip Hullquist, Deane Barker, Philippe Logel
  *
 ******************************************************************************/

use ChurchCRM\dto\SystemURLs;
use ChurchCRM\Service\SystemService;

$isAdmin = $_SESSION['user']->isAdmin();

?>
</section><!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right">
        <b><?= gettext('Version') ?></b> <?= $_SESSION['sSoftwareInstalledVersion'] ?>
    </div>
    <strong><?= gettext('Copyright') ?> &copy; <?= SystemService::getCopyrightDate() ?> <a href="http://www.churchcrm.io" target="_blank"><b>Church</b>CRM</a>.</strong> <?= gettext('All rights reserved') ?>.
    | <a href="https://twitter.com/church_crm" target="_blank"><i class="fa fa-twitter"></i> <?= gettext("Follow us on Twitter") ?></a>
</footer>

<!-- The Right Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
        <div class="tab-pane active" id="control-sidebar-tasks-tab">
            <?= gettext('You have') ?> &nbsp; <span class="label label-danger"><?= $taskSize ?></span>
            &nbsp; <?= gettext('task(s)') ?>
            <br/><br/>
            <ul class="control-sidebar-menu">
                <?php foreach ($tasks as $task) {
    $taskIcon = 'fa-info bg-green';
    if ($task['admin']) {
        $taskIcon = 'fa-lock bg-yellow-gradient';
    } ?>
                    <!-- Task item -->
                    <li>
                        <a href="<?= $task['link'] ?>">
                            <i class="menu-icon fa fa-fw <?= $taskIcon ?>"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading"
                                    title="<?= $task['desc'] ?>"><?= $task['title'] ?></h4>
                            </div>
                        </a>

                    </li>
                    <!-- end task item -->
                    <?php
} ?>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- The sidebar's background -->
<!-- This div must placed right after the sidebar for it to work-->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</div><!-- ./wrapper -->

<!-- Bootstrap 3.3.5 -->


<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/dist/js/app.min.js"></script>

<!-- InputMask -->
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/timepicker/bootstrap-timepicker.js"></script>

<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" ></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/datatables/extensions/Select/dataTables.select.min.js"></script>

<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/chartjs/Chart.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/pace/pace.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/adminlte/plugins/select2/select2.full.min.js"></script>

<script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/fullcalendar/fullcalendar.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootbox/bootbox.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/fastclick/fastclick.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootstrap-toggle/bootstrap-toggle.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/i18next/i18next.min.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/locale/js/<?= $localeInfo->getLocale() ?>.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/external/bootstrap-validator/validator.min.js"></script>

<script src="<?= SystemURLs::getRootPath() ?>/skin/js/IssueReporter.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/js/DataTables.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/js/Tooltips.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/js/Events.js"></script>
<script src="<?= SystemURLs::getRootPath() ?>/skin/js/Footer.js"></script>

<?php if (isset($sGlobalMessage)) {
        ?>
    <script nonce="<?= SystemURLs::getCSPNonce() ?>">
        $("document").ready(function () {
            showGlobalMessage("<?= $sGlobalMessage ?>", "<?=$sGlobalMessageClass?>");
        });
    </script>
    <?php
    } ?>

<?php  include_once('analyticstracking.php'); ?>
</body>
</html>
<?php

// Turn OFF output buffering
ob_end_flush();

// Reset the Global Message
$_SESSION['sGlobalMessage'] = '';

?>
