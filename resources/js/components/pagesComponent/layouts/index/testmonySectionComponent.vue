<template>
    <div >
      
            <section>
                <div class="testimoney-container" style="margin-top:3%;margin-left: 4%;margin-right: 4%;padding: 2%;text-align: center;color: #6c7689;">
                      <div class="property-title">
                        <div class="h3">
                             Our testimoney
                        </div>
                      </div>
                          <div class="row" style="margin-top: 4%;">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="testmoney-name card-title">Special title treatment</h5>
        <p class="testmoney-text card-text">" With supporting text below as a natural lead-in to additional content text below as. "</p>
              <div class="testmoney-pic">
          <img class="rounded-circle w-100 h-100" src="images/testPic.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="testmoney-name card-title">Niyera Asaph</h5>
        <p class="testmoney-text card-text">" With supporting text below as a natural lead-in to additional content text below as. "</p>
        <div class="testmoney-pic">
          <img class="rounded-circle w-100 h-100" src="images/testPic.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="testmoney-name card-title">Special title treatment</h5>
        <p class="testmoney-text card-text">" With supporting text below as a natural lead-in to additional content text below as. "</p>
                     <div class="testmoney-pic">
          <img class="rounded-circle w-100 h-100" src="images/testPic.jpg" alt="">
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
.title {
    color: #ffad33;
}
.carou-button-container {
    display: flex;
    padding-right: 10%;
    padding-left: 10%;
    position: relative;
}
.testmoney-pic{
  width: 100px;
height: 100px;
margin-left: 35%;
}
.testmoney-name{
  font-weight: bold;
  color: #1f2633;

}
.testmoney-text{
  font-style: italic;
font-size: 1rem;
font-weight: 400;
margin-top: 10%;
margin-bottom: 10%;
color: #6c7689;
}
.next-cont {
    margin-left: 90%;
}

.carou-button-img {
    width: 30px;
    padding: 6px;
    cursor: pointer;
}

.team-items {
    flex: 1;
}


.member-pic {
    width: 200px;
    height: 200px;
    margin-left: 40%;
    margin-right: 60%;
}


.team-member-profil {
   
    padding-top: 3%;
    padding-bottom: 10%;
}
.member-name a{

    /* color: var(--main-font-color-dark); */
    font-size: 1.5rem;
    font-weight: 150;
      color: #fff;
    /* margin-left: 30px; */
}
.member-name {
    padding-left: 15%;
    padding-right: 15%;
}
.team-contact {
    padding-top: 5%;
    padding-bottom: 15%;
}
.member-message {
    
    margin-top: 2%;
}



</style>