<script type="text/javascript">

    var australiaOptions = {
        @foreach($auState as $key => $value)
        '{{ $key }}': '{{ $value }}',
        @endforeach
    };

    var newzealandOptions = {
        @foreach($nzRegion as $key => $value)
        '{{ $key }}': '{{ $value }}',
        @endforeach
    };

</script>