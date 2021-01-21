<template>
    <div >
      
<section class="our-services">

    <div class="service-provider-container">
        <div class="service-provider" >

            <div class="service-text">

                <div class="services-title service-provider-title">

                    <h1 class="card-title font-weight-bold">What to know</h1>
                </div>

                    <div class="service-text-content provider-title-description">
                        <p class="card-text">
                            Il doit être possible d'hydrater chacun
                            des objets 
                            grâce à une méthode hydrate qui a pour 
                            rôle d'assigner les valeurs
                            passées en paramètre
                            aux attributs correspondant.
                        </p>
                    </div>
            </div>

            <div class="row service-provider-items">
                <div class="col-sm-4">
                        <div class="card service-provider-item">
                <div class="provider-icone-container">

                        <img src="images/rectGreen.svg" alt="icon">
                    </div>
                    <div class="services-title provider-title">

                        <h1 class="card-title" style="font-size: 1.6rem;">web design</h1>
                    </div>
    
                        <div class="service-text-content provider-text">
                            <p class="card-text">
                                Il doit être possible d'hydrater chacun
                                des objets 
                                grâce à une méthode hydrate qui a pour 
                                
                            </p>
                        </div>

                        </div>
                </div>

                <div class="col-sm-4">
                        <div class="card service-provider-item">
                <div class="provider-icone-container">

                        <img src="images/rectPink.svg" alt="icon">
                    </div>
                    <div class="services-title provider-title">

                        <h1 class="card-title" style="font-size: 1.6rem;">web design</h1>
                    </div>
    
                        <div class="service-text-content provider-text">
                            <p class="card-text">
                                Il doit être possible d'hydrater chacun
                                des objets 
                                grâce à une méthode hydrate qui a pour 
                                
                            </p>
                        </div>

                        </div>
                </div>

                <div class="col-sm-4">
                        <div class="card service-provider-item">
                <div class="provider-icone-container">

                        <img src="images/rectGreen.svg" alt="icon">
                    </div>
                    <div class="services-title provider-title">

                        <h1 class="card-title" style="font-size: 1.6rem;">web design</h1>
                    </div>
    
                        <div class="service-text-content provider-text">
                            <p class="card-text">
                                Il doit être possible d'hydrater chacun
                                des objets 
                                grâce à une méthode hydrate qui a pour 
                                
                            </p>
                        </div>
                            
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
img{
    width: 100%;
}
h1{
    font-size: 2rem;
}
  .services-container {
    /* background-color: var(--body-color-white-secondary); */
    padding-bottom: 10%;
}
.service-text {
    flex: 1;
   
}
.service-image-container {
    flex: 1;
}
.service-image-container img{
    border-radius: 10px;
}
.content-container {
    display: flex;
    padding: 100px 30px 100px 30px;
}
.services-title {
    text-align: center;
    margin-top: 4%;
}

.service-text-content  {
    /* margin-top: 50px; */
    text-align: center;


}

.button-service {
    margin-top: 50px;
    margin-left: 43%;
}


.our-services {
    position: relative;
    
}
.service-provider-container {
    width: 100%;
    height: auto;
    padding-bottom: 5%;
  
}




.provider-text {
margin-top: 4%;
padding-left: 4%;
padding-right: 4%;
    font-size: 1rem;
}
.service-provider {
     
        box-sizing: border-box;
        
}

.service-provider-items {
  
    margin-top: 5%;
        padding-left: 15%;
        padding-right: 15%;  
}
.provider-title-description {
    width: 100%;
    text-align: center;
    margin-right: 0;
    margin-left: 0;
    text-align: center;
    padding-left: 20%;
    padding-right: 20%;
    font-size: 1.2rem;
}


.provider-icone-container {
    max-width: 50px;
    background-color:white;
    padding: 10px;
    border: 1px solid rgba(196, 196, 196, 0.3);
    box-sizing: border-box;
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.15);
    border-radius: 50%;
   margin-left: 40%;
}

.service-provider-item {
    border: 1px solid rgba(196, 196, 196, 0.3);
    box-sizing: border-box;
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.15);
    padding-top: 5%;
    padding-bottom: 5%;
    padding-left: 1%;
    padding-right: 1%;
}


</style>