<template>
    <div >
      
            <section>
                <div class="hero-container" style="background: url(images/heroTwo.jpg) center no-repeat;background-size: cover; height:80vh;">
                  <div class="hero-bg">
                     <div class=" hero-text">
                            <p>Real estate advice for real local</p>
                            <p>whith architects</p>
                     </div>
                  </div>
                </div>
            </section>     
                
    </div>
</template>

<script>
    export default {

        data() {
            return {
             
            }
        },
        methods: {
       
        },
        created() {
                        
        },
        mounted() {
            console.log('home')
        },
    }
</script>
<style>
    .hero-container{
        height:80vh;
    }

.hero-text {
    color: #f9f9f9;
    font-size: 2.5rem;
    padding-top: 7rem;
}
.hero-bg {
    text-align: center;
    line-height: 2.8rem;
    padding-top: 2rem;
    width: 100%;
    /* background: #000000b8; */
     background-image: linear-gradient(to bottom,rgba(0,0,0,.91),transparent);
    height: 100%;
}

</style>