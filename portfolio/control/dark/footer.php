<footer class="footer">
			© <?= date("Y")==2021 ? "2021" : "2021-".date("Y") ?> CodeMaster
		</footer>
		</div>
	<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap popper Core JavaScript -->
	<script src="../assets/node_modules/popper/popper.min.js"></script>
	<script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
	<!--Wave Effects -->
	<script src="dist/js/waves.js"></script>
	<!--Menu sidebar -->
	<script src="dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="dist/js/custom.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!--morris JavaScript -->
	<script src="../assets/node_modules/raphael/raphael-min.js"></script>
	<script src="../assets/node_modules/morrisjs/morris.min.js"></script>
	<script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!-- Popup message jquery -->
	<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
	<!-- Chart JS -->
	<?php  if($General->PageNameGet()=="index"){?>
	<script src="dist/js/dashboard1.js"></script>
	<?php }?>
	<?php  if($General->PageNameGet()=="portfolio-kat" || $General->PageNameGet()=="portfolio-kat-siyahi" ){?>
	<script src="dist/js/portfolio-kat.js"></script>
	<?php }?>
    <?php  if($General->PageNameGet()=="portfolio-siyahi" ){?>
	<script src="dist/js/portfolio.js"></script>
	<?php }?>
    <?php  if($General->PageNameGet()=="blog-kat-list" || $General->PageNameGet()=="blog-list" ){?>
	<script src="dist/js/blog.js"></script>
	<?php }?>
    <?php  if($General->PageNameGet()=="portfolio-kat-siyahi" || $General->PageNameGet()=="portfolio-siyahi"){?>
	<script src="dist/js/port.js"></script>
	<?php }?>
    <?php  if($General->PageNameGet()=="slider-list"){?>
	<script src="dist/js/slider.js"></script>
	<?php }?>
    <?php  if($General->PageNameGet()=="admin-add" || $General->PageNameGet()=="profile" || $General->PageNameGet()=="admin-list"){?>
	<script src="dist/js/admin.js"></script>
	<?php }?>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="dist/js/script.js"></script>
	<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>


	<?php  if($General->PageNameGet()=="portfolio-kat-siyahi" || $General->PageNameGet()=="portfolio-siyahi" || $General->PageNameGet()=="blog-kat-list" ||  $General->PageNameGet()=="blog-list"){?>
	<script src="../assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>
     <script src="../assets/node_modules/dropify/dist/js/dropify.min.js"></script>
	<?php }?>
       <!-- icheck -->
       <script src="../assets/node_modules/icheck/icheck.min.js"></script>
    <script src="../assets/node_modules/icheck/icheck.init.js"></script>
</body>
</html>