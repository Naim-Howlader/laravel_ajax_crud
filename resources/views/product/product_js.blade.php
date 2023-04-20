<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
          $(document).ready(function(){
             $(document).on('click', '.btn', function(e){
                
                //console.log('hi');
                e.preventDefault();
                let name = $('#product_name').val();
                let price = $('#product_price').val();
                console.log(name+price);
                $.ajax({
                    url : '/add-product',
                    method : 'post',
                    data : {name:name, price:price},
                    success : function(response){
                        console.log(response);
                    },
                    error : function(err){
                        let error = err.responseJSON;
                        $.each(error.errors, function(index,value){
                            $('.errorMessage').append('<span>'+value+'</span>'+'<br>');
                        });
                    }
                });
             });
          });
    </script>