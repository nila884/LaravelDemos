<template>
    <div >
      
            <section>
                <div class="properties-container pl-5 pr-5" >
                      <div class="property-title mt-4 mb-4 text-center h3">
                          Similar property
                      </div>
<div class="row jus row-cols-1 row-cols-md-3 g-4 pr-4 pl-4" >
        <router-link :to="{name: 'show', params:{property: 1}}">
            <div class="col mt-3 mb-3">
          <div class="card " style="max-width: 24rem;">
            <img src="images/house.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </router-link>

 
    <div class="col mt-3 mb-3">
    <div class="card" style="max-width: 24rem;">
      <img src="images/house.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
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
.property-title{
  color: #1f2633;
}
</style>