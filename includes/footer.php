        <div class="footer">

            <h3 class="credit">contact info</h3>
            <div class="box-container">
                
                <div class="box">
                    <p> <i class="fas fa-map-marker-alt"></i> Kingston, Jamaica </p>
                    <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
                </div>
                <div class="box">
                    <p> <i class="fas fa-phone"></i> +876-555-5555 </p>
                    <p> <i class="fas fa-phone"></i> +876-222-3333 </p>
                </div>
            </div>

            <h1 class="credit">
                Copyright &copy; - Foodie’s <?php echo date('Y'); ?>
            </h1>

        </div>

        <script>
        $( function() {
            $( "#dob" ).datepicker( {
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0",
                dateFormat: "yy-mm-dd"
            });

        } );
    </script>

    </body>
</html>