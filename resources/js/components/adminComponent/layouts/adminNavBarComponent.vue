<template>
    <div >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand align-baseline" href="#" style="align-self: baseline;">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
            

                    <li class="nav-item">
                        <router-link :to="{name: 'root'}">
                                 <p class="nav-link">Home<span class="sr-only">(current)</span></p>
                        </router-link>
                    </li>

                     <li class="nav-item">
                        <router-link :to="{name:'create'}">
                                 <p class="nav-link">Create</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                    
                    <button class="btn btn-outline-danger" v-on:click="logout()">Logout</button>
                        
                    </li>
                  
                    </ul>
        </div>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        mounted() {
            console.log('navbar Component mounted.')
        },
        methods: {
            logout(){
                    axios.post('/logout',).then(
                        console.log($route)
                    )
            }
        },
    }
</script>