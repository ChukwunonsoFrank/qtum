<script src="{{asset('assets/js/polyfill.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/headhesive.min.js')}}"></script>
<script src="{{asset('assets/js/site.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>


@if($errors->any())

    <script>
        sweetAlert("Oops...",{!! "'".$errors->first()."'" !!}, "error");
    </script>

@endif

@if ($message = Session::get('success'))

    <script>
        swal("Success!", {!! "'".$message."'" !!}, "success")
    </script>

@endif


<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '3fc32f4d1ca7b9be95433304a820dbff25ee64b9';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
