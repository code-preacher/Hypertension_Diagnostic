
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';

?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
$check=$crud->compareDiagnosis($_POST);

if($check){
$crud->addReport($_SESSION['id'],$check['id']) ; 
$result=$check['result'];
$advice=$check['advice'];
header("location:result.php?result=$result&advice=$advice");
}
else{
$result='No Result';
$advice='No Result';
header("location:result.php?result=$result&advice=$advice");  
}

}


?>



<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">DIAGNOSIS : <?php $lib->msg();?></h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Diagnosis</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <p>

            <?php if (!empty($_SESSION['dgmsg'])) {
                echo $_SESSION['dgmsg'];

            } 
            ?>
        </p>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-diagnose.php" method="POST">
                                       <div class="row p-t-20">
 <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Age Range: </label>
                                                    <select class="form-control custom-select" name="age" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="0-17">0-17</option>
                                                        <option value="18-35">18-35</option>
                                                        <option value="36-50">36-50</option>
                                                        <option value="50-70">50-70</option>
                                                        <option value="70-120">70-120</option>
                                                    </select>
                                                     </div>
                                            </div>


                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Are you experencing Headache: </label>
                                                    <select class="form-control custom-select" name="f1" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Loss of Vision / Double Vision:</label>
                                                    <select class="form-control custom-select" name="f2" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->


                                          
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Chest Pain:</label>
                                                    <select class="form-control custom-select" name="f3" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Abdominal Pain:</label>
                                                    <select class="form-control custom-select" name="f4" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Breathing Problem:</label>
                                                    <select class="form-control custom-select" name="f5" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Nausea:</label>
                                                    <select class="form-control custom-select" name="f6" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Swelling of hands and feet:</label>
                                                    <select class="form-control custom-select" name="f7" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you experencing Change in urine:</label>
                                                    <select class="form-control custom-select" name="f8" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->

                                             <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you suffering from Ulcer:</label>
                                                    <select class="form-control custom-select" name="ulcer" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Are you Pregnant:</label>
                                                    <select class="form-control custom-select" name="preg" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->

            <div class="offset-sm-4 col-md-10">
                <button type="submit" class="btn btn-success" name="sub"> <i class="ti-plus"></i> Diagnose </button>

            </div>
        </div>

    </form>
</div>
</div>
</div>
</div>
<!-- /# column -->
</div>
<!-- End PAge Content -->

<p><!-- CODE --></p>

</div>
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<?php
include 'inc/footer.php';
?>

<script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>