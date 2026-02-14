<div class="line"></div>

</div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- Popper.JS -->
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script>
    if ($('#dataTable').length > 0) {
        let table = new DataTable('#dataTable');
    }
</script>

<script src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>


@if ($errors->any())
    <script>
        sweetAlert("Oops...", {!! "'" . $errors->first() . "'" !!}, "error");
    </script>
@endif

@if ($message = Session::get('success'))
    <script>
        swal("Success!", {!! "'" . $message . "'" !!}, "success")
    </script>
@endif

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });

    $('.confirm').on('click', () => {
        return confirm('Are you sure you want to perform this action');
    });
</script>
