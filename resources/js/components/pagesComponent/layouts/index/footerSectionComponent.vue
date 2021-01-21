<template>
    <div >
      
            <section>

       
                       <div class="contact-container">
            <div class="contact">

                <div class="service-text">

                    <div class="services-title service-provider-title contact-text">
    
                        <h1>Lets work together</h1>
                    </div>
    
                        <div class="contact-text">
                            <p>
                                We’re currently taking on new projects.
                                 Would you like to
                                 discuss yours ? Call us at +1-123-456-7890 or
                                  mail us at [email protected]
                            </p>
                        </div>
                        <div class="button-contact button-more button-service">

                            <a href="#">en savoir plus</a>
                    
                        </div>
                </div>
            </div>
        </div>
            </section>    
            <footer>
                <p>Copyright Brand Exponents 2018. All Rights Reserved</p>
        </footer> 
                
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

.contact {
    margin-left: 25%;
    margin-right: 25%;
    background-color: #6c7689;
    padding-top: 5%;
    padding-bottom: 5%;
    margin-top: 2%;
    border-radius: 20px;
}
footer{
    text-align: center;
    background-color:#f9f9f9  ;
    color: #1f2633;
}
footer p{
    margin-bottom: 0;
}
.contact-text{
    color: #f9f9f9;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: 4%;
    text-align: center;
}
.button-contact{
    background-color: #ffad33;
}
.button-contact a{
    color: #1f2633;
}
.button-service {
    margin-top: 50px;
    margin-left: 40%;
    margin-right: 40%;
    text-align: center;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

</style>