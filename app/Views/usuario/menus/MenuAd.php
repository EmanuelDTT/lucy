
  
  <link rel="stylesheet" href="CSS/menu.css">

<header>

<div class="heroo">
     <nav class="nave">  
          <h2 class="logo" >Lucy</h2>
          <div class="links">
          <ul class="links-ul ">
               <li> <a href="<?php echo base_url(); ?>inicio">Inicio </a> </li>
               <li> <a href="<?php echo base_url(); ?>acerca">Acerca </a> </li> 
               <li> <a href="<?php echo base_url(); ?>desarrollo">Desarrollo </a> </li>
               <li> <a href="<?php echo base_url(); ?>servicios">Servicio </a> </li>
               <li> <a href="<?php echo base_url(); ?>admin">Gestionar</a> </li>
               <li> <a href="<?php echo base_url(); ?>cerrar">Salir</a> </li>
               
           
               
              
          </ul>
    
          </div>
         
          <img src="<?php echo base_url(); ?>IMG/hambur.png" alt="menu hamburger" class="menu-hamburger">
     </nav>
</div>
</header>

  <script>
     
const menu = document.querySelector(".menu-hamburger");
const navlinks = document.querySelector(".links");
const nav = document.querySelector(".nave");

menu.addEventListener('click', ()=>{
    navlinks.classList.toggle('mobile-menu');
})


  </script>
