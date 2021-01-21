<template>
    <div >
      
            <section>
                <div class="properties-container" >
                      <div class="property-title mt-4 mb-4 text-center h3">
                          Top property
                      </div>




   <div v-if="properties.length">
                  

               <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4" v-for="property in properties" v-bind:key="property.id">
                    
                      <router-link :to="{name: 'show', params:{property: 1}}">              

                                <div class="card">
                          <img  class="card-img-top" v-bind:src='property.image' alt="image">
                          <div class="card-body">
                            <h5 class="card-title">{{property.houseType(property.type)}}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>

                    
                       </router-link>
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
             properties:[],
            }
        },
        methods: {
       
        },
        created() {
                                   axios.get('/property/get')
                .then(response=>console.log(response))
                .catch(error=>console.log(error))
        
        },
        mounted() {
            this.getProperties();
        },
        methods: {
          getProperties(){
                             axios.get('/property/get')
                            .then(response=>{
                            this.properties=response.data;
                            console.log("mounted"+response)
                            })     
                         
            },
        },
    }
</script>
<style>
.property-title{
  color: #1f2633;
}
</style>