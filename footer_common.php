<footer class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="footer_logo">
          <img loading="lazy" src="./assets/images/logo.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-md-3">
         <div class="footer_logo_name">
         <h3>NEXTOC</h3>
         <p>Nextoc is stock trader company, we have advised clients on their investment and stock trading decisions and financial options.</p>
         <p>Copyright by <b>NEXTOC</b>, All Right Reserved</p> 
         <ul class="footer-social-links list-unstyled">
            <li data-aos-offset="61" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li data-aos-offset="61" data-aos="fade-left" data-aos-duration="900" data-aos-delay="300"><a href="https://www.instagram.com/nextoc_" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li data-aos-offset="61" data-aos="fade-left" data-aos-duration="900" data-aos-delay="500"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
            <li data-aos-offset="61" data-aos="fade-left" data-aos-duration="900" data-aos-delay="700"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
         </div>
       </div>
       <div class="col-md-3">
         <div class="footer_end_section">
            <h4>Contact</h4>
            <ul>
               <li>Mobile: <a href="tel:+917994400907">&nbsp;+91 7994400907</a></li>
               <li>Email: <a href="mailto:nextocofficial@gmail.com">&nbsp;nextocofficial@gmail.com</a></li>
               <li>Website: <a href="#header">&nbsp;www.nextoc.in</a></li>
               <li>Address: <a href="#header">&nbsp;Calicut, Kerala - India</a></li>
               </ul>
           </div>
       </div>
      <div class="col-md-3">
        <div class="footer_end_section">
         <h4>Services</h4>
         <ul>
            <li>- &nbsp; Investment Advisory </li>
            <li>- &nbsp; Crypto suggestion  </li>
            <li>- &nbsp; Personal trading support </li>
            <li>- &nbsp; Education Programs </li>
            </ul>

            <p class="made">Made by 💖 <a href="https://www.mentegoz.com" target="_blank">Mentegoz Technologies -</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <h6 class="modal-title">Register your number</h6>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         
       </div>
       <div class="modal-body">
         <form action="form.php" class="myForm">
           <input type="tel" id="phone" name="phone" placeholder="Enter number" class="form-control mobile_input" pattern="[0-9]{10}" required autocomplete="off" title="Type 10 digits only" autofocus>
           <i class="fa fa-check-square" aria-hidden="true"></i>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <div class="submitArea">
             <input type="submit" class="btn btn-success" value="Proceed">
            <i class="fa fa-chevron-circle-right"></i>
            </div>
            </div>
         </form>
       </div>
 
     </div>
 
   </div>
 </div>

 <a href="https://wa.me/917994400907?text=Hi Nextoc, help me get started! 😊" class="float" target="_blank" data-toggle="tooltip" data-placement="right" title="WhatsApp">
<i class="fa fa-whatsapp my-float"></i>
</a>

<!-- script-area    -->
<script src="./assets/js/jquery-2.0.0.js"></script>
<script src="./assets/js/app.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/SmoothScrollMouseWheel.js"></script>
<script src="./assets/js/swiper.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/wow_cusome.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.3.4/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.3.4/dist/ScrollTrigger.js"></script>
<script src="./assets/js/aos.js"></script>
<script>
   gsap.registerPlugin(ScrollTrigger);
 gsap.to('progress', {
   value: 100,
   ease: 'none',
   scrollTrigger: { scrub: 0.3 }
 });
 </script>

<script>
   $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();   
   });
</script>

<script>
   let humbergur = document.querySelector(".hamburger_menu");
   let menu_section = document.querySelector(".menu_section");
   let closeMenu = document.querySelector('.close_menu');

   humbergur.addEventListener('click', ()=> {
      menu_section.classList.add("burger_active");
   })

   closeMenu.addEventListener('click', ()=> {
      menu_section.classList.remove("burger_active");
   })

   document.addEventListener("keyup", function(e) {
    if(e.keyCode === 27)  {
        menu_section.classList.remove("burger_active");
      }
	})
</script>

<script>
  //AOS
AOS.init();
</script>