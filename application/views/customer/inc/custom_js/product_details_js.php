<script>

    $('#product_detail_dec_btn').click(function() {
        let qty = $('.product_qty').val();
        let product_qty = 0;
        if (qty == 0) {
            $('#product_detail_dec_btn').attr('disabled', 'disabled');
        }
    });

    $('#product_detail_inc_btn').click(function() {
        $('#product_detail_dec_btn').attr('disabled', false);
    });


    function buy_now(element, sale_price, product_id, master_id, vendor_id, brand_id) {

        let qty = $('.product_qty').val();
        let product_qty = 0;
        if (qty == 0) {
            product_qty = parseInt(qty) + 1;
            $('.product_qty').val(product_qty);
        } else {
            product_qty = qty;
            $('.product_qty').val(product_qty);
        }

        let session_id = '';
        if (localStorage.getItem("session_id") && localStorage.getItem("session_id") != 'undefined') {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/add_product_to_cart') ?>",
            data: {
                "qty": product_qty,
                "product_id": product_id,
                "master_id": master_id,
                "vendor_id": vendor_id,
                "brand_id":brand_id,
                "session_id": session_id,
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if (response.success) {
                    var session_id = response.data;
                    remember_user_session_id(session_id);
                    display_cart_items();
                    display_product_price();
                    $('#cartlistfxd').modal('show');
                }
            }
        });
    }

    function remember_user_session_id(session_id) {
        localStorage.setItem("session_id", session_id);
    }

    function change_vendor_of_selected_product(selected_vendor_id, master_id){
        console.log(master_id);
        let vendor_id = 'VENDOR_'+selected_vendor_id;
        $('#checked_vendor_id').val(vendor_id);
    }



    

</script>