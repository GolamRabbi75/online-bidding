
        <div class="footer">
            <p>@Developed By Golam Rabbi</p>
        </div>
        <style>

    .footer {
    text-align: center;
    width: 100%;
    padding: 10px;
    background: gray;
    float: left;
    color: white;
    font-size: 15px;
    margin-top: 120px;

    }

        </style>

    <!--<footer>Developed By Shanta</footer>-->


<script>
    $(document).ready(function(){
        $('.col-md-3').hover(
            //triger when mouse
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },100);
            },
            function() {
                $(this).animate({
                    marginTop: "0%"
                },100);
            }

        );

    });



</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>