<template>



    <div class="container text-center">
        <h1>Properties</h1>

            <div v-if="properties.length">
                  

               <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4" v-for="property in properties" v-bind:key="property.id">
                    <div class="card" >
                        
                            <img class="card-img-top" v-bind:src='property.image' alt="image">
                            <div class="card-body">
                            <h5 class="card-title">{{property.category}}</h5>
                            <p class="card-text"> 
                                    <span>{{property.address}}</span> 
                                    <span>{{property.rooms}} rooms</span> 
                                    <span>{{property.bathrooms}} bathrooms</span> 
                                    <span>{{property.bedrooms}} bedrooms</span> 
                            </p>

                            </div>
                                <div class="card-footer">
                            <p class=" text-muted">
                                <span><router-link :to="{name: 'edit', params:{property: property.id}}" class="btn btn-primary">edit</router-link></span>
                                <span><button class="btn btn-danger" @click="removeProperty(property.id)">remove</button></span>
                            </p>
                                </div>
                        
                        </div>
                </div>
            </div>
            </div>
            <div class=" text-center " style=" color:red;" v-else>
              no property yet
            </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                properties:[],
            }
        },
        mounted() {
            console.log('index admin')
        },
        created() {
            this.getProperties();
        },
        methods: {
            editProperty(property){},
            removeProperty(id){
                if(confirm('Are you sure')){
                    axios.delete('/admin/property/'+id)   
                        // .then(res=>res.json())
                        .then(response=>console.log(response)).catch(error=>console.log(error));
                }
            },
            getProperties(){
                     axios.get('admin/',)     
                        // .then(res=>res.json())
                        .then(response =>{ 
                            
                            axios.get('admin/properties',)
                            .then(response=>{
                            this.properties=response.data;
                            console.log(response)
                            })     
                         });
            },

        },

    }
</script>