

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/dashboard-2.init.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <!-- jquery.vectormap map -->
    <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> --}}

    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#select-region').on('change',function(){
                var region_id = $('option:selected', this).attr('data-id');
                $.ajax({
                    url : 'http://myancity.devsm.net/api/region/' + region_id,
                    data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'get',
                    dataType: 'json',
                    success: function( result )
                    {
                        $('#select-township').empty();
                        $.each( result, function(k, v) {
                            $('#select-township').append($('<option>', {value:v.name, text:v.name}));
                        });
                    },
                    error: function()
                {
                    //handle errors
                    alert('Township API Errors!!!');
                }
                });
            });
        })
    </script>




</body>

</html>
<script>
    $(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Confirm',
        off: 'Cancel'
        });
    });

    $('.toggle-class').on('change',function(){
        var status = $(this).prop('checked')==true ? 1 : 0;
        var id=$(this).data('id');
        $.ajax({
            type:'GET',
            dataType:'json',
            url:'{{route('change.status')}}',
            data:{'status':status, 'id':id},
            success:function(data){
                $('#message').html('<p class="alert alert-danger">'+data.success+'</p>');
            }
        });
    });

</script>
