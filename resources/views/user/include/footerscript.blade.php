<!-- Common scripts -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>


<script type="text/javascript">
    $(".remove-from-cart").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart')}}'
                , method: "DELETE"
                , data: {
                    _token: '{{ csrf_token() }}'
                    , id: ele.attr("data-id")
                }
                , success: function(response) {

                    window.location.reload();
                }
            });
        }
    });

</script>
