<template>
    <div >
      <hero-component></hero-component>
      <!-- <nav-show-property-component></nav-show-property-component> -->
            <div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">revues</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

        </div>  
        <div>
            <property-show-profile-component></property-show-profile-component>
             <suggest-property-component></suggest-property-component>   
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
            console.log('property show')
        },
    }
</script>
