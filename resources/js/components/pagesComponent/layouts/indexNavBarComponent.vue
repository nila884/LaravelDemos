<template>
    <div id="nav" style="position: fixed;color: #fff;width: 100%;  z-index: 998; background-image: linear-gradient(to bottom,rgba(0,0,0,.91),transparent);"  >

<ul class="nav justify-content-center pt-3 pb-3" style="color: #1f2633;">
  <li class="nav-item">
    <a class="nav-list nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-list nav-link" href="#">Explore</a>
  </li>
    <li class="nav-item ml-3 mr-3">
    <a class="nav-link logo-container" href="#" tabindex="-1" aria-disabled="true">
        <div class="logo">
            P
        </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-list nav-link" href="#">Contact us</a>
  </li>
  <li class="nav-item">
    <a class="nav-list nav-link" href="#" >About us</a>
  </li>
</ul>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        mounted() {
            this.whenScroll
        },
        methods: {
           
        whenScroll() {
            let nav=document.getElementById('id')
             console.log("kkkk")
            if(scrollY>0){
               
                if(!nav.classList.contains('is-scroll')){
                      nav.classList.add('is-scroll')

            }
            }else{
                nav.classList.remove('is-scroll')
            }
        },
            
        },
    }
</script>
<style >
.logo-container {
    background-color:#ffad33;
    height: 50px;
    border-radius: 50%;
    width: 50px;
    padding-top: 4%;
    text-align: center;
    overflow: hidden;
    color: #fff;
  
}
.logo {
    font-size: 30px;
    font-weight: bold;
    
}
.nav-list {
    font-size: 1.15rem;
    font-weight: 400;
    color: #f9f9f9;
}
a:hover {
    color: #1f2633 ;
    text-decoration: underline;
}
.is-scroll{
    background-color:#1f2633 ;
}
</style>