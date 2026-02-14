
<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/gd-pharmacy.js')}}"></script>

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

<script>
    var comma_add = $('.comma-add');
    for(var i=0;i<comma_add.length;i++) {
        var real_value= parseFloat(comma_add[i].innerText);
        console.log(real_value.toLocaleString('en-US'))
        comma_add[i].innerText = real_value.toLocaleString('en-US');
    }

</script>
