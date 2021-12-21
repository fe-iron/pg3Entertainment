<style type="text/css">
 


.navbar_mobile {
    background: -webkit-linear-gradient( 
5deg, #f73347 0%, rgba(18, 1, 248, 0.2) 100%);
    background: -webkit-linear-gradient( 
5deg, #1a0305cc 0%, rgb(4 2 28 / 70%) 100%);
    background: -ms-linear-gradient(5deg, #f73347 0%, rgba(18, 1, 248, 0.2) 100%);
}

.navbar_mobile .nav{
   padding: 0rem 1rem;
}


.navbar_mobile .nav .nav-link {
    display: block;
    padding: 0.5rem 0rem;
    font-size: 12px;
    color: white;
}


/*.navbar_mobile .nav .vertical_line{
  position: relative;
}

.navbar_mobile .vertical_line:after{
    content:"";
    position: absolute;
    width: 1px;
    height: 100%;
    top: 0px;
    right: -50px;
    background: white;
}
*/

/*@media(max-width: 576px){
  .navbar_mobile .vertical_line:after{
    content:"";
    position: absolute;
    width: 1px;
    height: 100%;
    top: 0px;
    right: -15px;
    background: white;
}

.navbar_mobile .nav{
   padding: 0rem .8rem;
}

*/



  @media (min-width: 992px){
     .navbar_mobile{
      display: none;
     }
  }
</style>


<div class="navbar_mobile">
  <ul class="nav justify-content-around">
  <li class="nav-item vertical_line">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item vertical_line">
    <a class="nav-link" href="about.php">About</a>
  </li>
  <li class="nav-item vertical_line">
    <a class="nav-link" href="media_coverage.php">Media Coverage</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Stay Connected</a>
  </li>
</ul>
</div>