<!DOCTYPE html>
<html class="js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta content="Quantum Sure Ledger" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."
          name="description">
    <link href="/demo7/images/favicon.png" rel="shortcut icon">
    <title>Page Expired | Quantum Surge Ledger</title>
    <link href="{{asset('assets/css/dashlite.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.css')}}" id="skin-default" rel="stylesheet">

</head>
<body class="nk-body ui-rounder npc-default pg-error">
<div class="nk-app-root">
    <div class="nk-main ">
        <div class="nk-wrap nk-wrap-nosidebar">
            <div class="nk-content ">
                <div class="nk-block nk-block-middle wide-xs mx-auto">
                    <div class="nk-block-content nk-error-ld text-center"><h1 class="nk-error-head">Page Expired</h1>
                        <h3 class="nk-error-title">Oops! Why you’re here?</h3>
                        <p class="nk-error-text">You have left this page open for too long. Reload the page to continue your operation. </p>
                        <a class="btn btn-lg btn-primary mt-2" href="{{url('index')}}">Back
                            To Home</a>
                        <button class="btn btn-lg btn-primary mt-2" id="back">Back
                            To Previous Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/demo-settings.js')}}"></script>

<script>
    $('#back').on('click',()=>{
        history.back()
    });
</script>
</body>
</html>
