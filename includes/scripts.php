<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="owlcarousel/dist/owl.carousel.min.js"></script>
<!-- Bootstrap core JavaScript -->

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/aurora.min.js"></script>
<script src="js/app.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            margin:15,
            autoplay:true,
            autoplayTimeout:1500,
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                    
                },
                600:{
                    items:3
                    
                },
                1000:{
                    items:4
                    
                }
            }
            
                
            });
});
</script>
