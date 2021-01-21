<template>
    <div >
         <div class="justify-content-between row pl-5 ml-3 mr-3 pr-5">
              <div class="col-md-5">
                 
                   <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                            <p class="card-text">Some quick example text to build on the
                                Some quick example text to build on the
                                Some quick example text to build on the
                                 card title and make up the bulk of the card's content.</p>
                          
                        </div>
                    </div>
               
              
                   <div class="card mt-3" >
                    <div class="card-header">
                        Details
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>rooms</div><div>8</div>
                            </div>
                            
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>areas</div><div>128m</div>
                            </div>
                            
                        </li>
                        <li class="list-group-item">
                            
                            <div class="d-flex justify-content-between">
                                <div>bathrooms</div><div>3</div>
                            </div>
                            
                        
                        </li>
                        <li class="list-group-item">
                            
                            <div class="d-flex justify-content-between">
                                <div>bedrooms</div><div>3</div>
                            </div>
                        </li>
                    </ul>
                    
               </div>
               
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Category</h5>
                        <div class="provider-icone-container">

                        <img src="images/rectGreen.svg" alt="icon">
                    </div>
                    <div style="text-align: center;padding-top: 5%;">
                        house
                    </div>
                        </div>
                    </div>
               
         </div>
       
               <div class="col-md-7">

                    <div id="carouselExampleIndicators" class="carousel slide card" data-ride="">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="images/heroOne.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="images/heroTwo.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="images/heroOne.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                                           <div class="card mt-3 pl-5 pr-5 mr-5 ml-5" >
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                            <p class="card-text">Some quick example text to build on the
                                Some quick example text to build on the
                                Some quick example text to build on the
                                 card title and make up the bulk of the card's content.</p>
                          
                        </div>
                    </div>
               
               </div>
              
         </div>
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
            console.log('property profile')
        },
    }
</script>
<style>
img{
    width: 100%;
    height: 100%;
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
</style>