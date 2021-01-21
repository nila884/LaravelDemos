<template>
    <div >
        <div class="text-center pt-3 pb-3">
                <h1>Add properties</h1>
        </div>
        <div>
            <div v-if="errors" class="bg-red-500 text-white py-2 px-4 pr-0 rounded font-bold mb-4 shadow-lg">
                <div v-for="(v, k) in errors" :key="k">
                    <p v-for="error in v" :key="error" class="text-sm">
                    {{ error }}
                    </p>
                </div>
                </div>
        </div>
    
                    <form class=" pr-5 pl-5 pb-5" @submit.prevent="addProperty">
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                            <label for="rooms">Rooms</label>
                            <input type="number" class="form-control" id="rooms" name="rooms" placeholder="rooms" v-model="property.room">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="bedroom">Bedrooms</label>
                            <input type="number" class="form-control" id="bedroom" name="bedrooms" placeholder="bedroom" v-model="property.bedroom">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="bathrooms">Bathrooms</label>
                            <input type="number" class="form-control" name="bathroom" id="bathrooms" placeholder="bathrooms" v-model="property.bathroom">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="price" v-model="property.price">
                            
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity " placeholder="city" name="city" v-model="property.city">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address" v-model="property.address">
                        </div>
                           
                        </div>
                         <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number" class="form-control" id="area" name="area" placeholder="area" v-model="property.area">
                            
                        </div>
                        <div class="form-group">
                              
                                <label for="description">Description</label>
                                <textarea class="form-control" placeholder="description" id="description" name="description" rows="3" v-model="property.description"></textarea>
                            
                        </div>
                        
                        <div class="form-row">
                            
                                 <div class="form-group col-md-6">
                                     <label for="category">Category</label>
                                    <select class="custom-select" id="category" name="category" v-model="property.category"> 
                                        <option selected>Choose...</option>
                                        <option value="1">House</option>
                                        <option value="2">Business</option>
                                        <option value="3">Officer</option>
                                    </select>
                                </div>
                                 <div class="form-group col-md-6">
                                     <label for="type">Type</label>
                                    <select class="custom-select" id="type" name="type" v-model="property.type">
                                        <option selected>Choose...</option>
                                        <option value="1">To rent</option>
                                        <option value="2">For sale</option>
                                    </select>
                                </div>

                      
                        
                        </div>



                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="available"  name="available" v-model="property.available">
                            <label class="form-check-label" for="available">
                                Available
                            </label>
                            </div>
                        </div>

                            
                            <div class=" form-group">
                                <div class=" custom-file">
                                    <label for="image" class="custom-file-label">Image</label>
                                </div>
                            
                           <input class=" custom-file-input" type="file" name="image" id="image" @change="selectMainImage">
                            </div>
                            <div class=" form-group">
                                                           
                            <div class="form-row" style="width: 100%;" v-show=" main_image.length">
                                <div class=" card-group col-md-4 text-center" style="width: 100%;" v-for="(image, index) in main_image" :key="index">
                                        <div class=" card" style="width: 100%;">
                                <img class="card-img" style="height: 90%;" :src="image" :alt="`Image Uplaoder ${index}`">
                                    <div class="card-body text-center mb-1 mt-1" style="height: 10%;">
                                        <span class="card-text" v-text="property.image.name"></span>
                                        <span class="card-text" v-text="getFileSize(property.image.size)"></span>
                                         
                                         <!-- <button class="btn btn-danger mt-2 mb-2" v-on:click="removeMainImage(index)">remove</button> -->
                                    </div>
                                        </div>
                                </div>
                            </div>
                            
                            </div>

                                    <div class="form-group">
                                            <div class="custom-file">
                                                    <label for="images" class="custom-file-label">Gallery</label>
                                                    <input type="file" multiple class="custom-file-input" name="images" @change="selectFile">
                                            </div>
                                    </div>


                    
                             <div class="form-row">


                                 
                            <div class="form-row" style="width: 100%;" v-show="images.length">
                                <div class=" card-group col-md-2" style="width: 100%;" v-for="(image, index) in images" :key="index">
                                        <div class=" card mt-1 mb-1" style="width: 100%;">
                                <img class=" card-img" style="height: 65%;" :src="image" :alt="`Image Uplaoder ${index}`">
                                    <div class="card-body text-center mb-1 mt-1" style="height: 35%;">
                                        <span class="card-text" v-text="property.files[index].name"></span>
                                        <span class="card-text" v-text="getFileSize(property.files[index].size)"></span>
                                         
                                         <button class="btn btn-danger mt-2 mb-2" v-on:click="removeImage(index)">remove</button>
                                    </div>
                                        </div>
                                </div>
                            </div>
                                    
                            
                            
                         </div>
 <button type="submit" class="btn btn-primary mt-4" >Add</button>
                       
            </form>
            
            
    </div>
</template>

<script>
    export default {

        data() {
            return {
                
                errors:null,
                message:null,
                property:{
                                price:'',
                                room:'',
                                bedroom:'',
                                bathroom:'',
                                area:'',
                                category:'',
                                type:'',
                                address:'',
                                city:'',
                                available:'',
                                description:'',
                                image:null,
                                files: [],
                                
                        },
                main_image:[],
                images: [],
                
            }
        },
        methods: {
            selectMainImage(event){
             const files=event.target.files
             let mainImage=true
             this.main_image=[];
            
               Array.from(files).forEach(file => this.addImage(file,mainImage));
        },
            
            selectFile(event) {
            const files = event.target.files;
            let mainImage=false
                            Array.from(files).forEach(file => this.addImage(file,mainImage));
            
        }, addImage(file,mainImage) {

                            if (!file.type.match('image.*')) { 
                                this.$toastr.e(`${file.name} is not an image`);
                                return;
                                }
                            if(mainImage){
                                        this.property.image=file
                                     const img = new Image(),
                                    reader = new FileReader();
                                    console.log(reader)
                                    reader.onload = (e) => this.main_image.push(e.target.result);
                                    reader.readAsDataURL(file); 
                            }else{
                                
                                    this.property.files.push(file);
                                    const img = new Image(),
                                    reader = new FileReader();
                                    reader.onload = (e) => this.images.push(e.target.result);
                                    reader.readAsDataURL(file);
                            }
                    },
        getFileSize(size) { const fSExt = ['Bytes', 'KB', 'MB', 'GB'];
                            let i = 0;
                            while(size > 900) { size /= 1024; i++; }
                            return `${(Math.round(size * 100) / 100)} ${fSExt[i]}`;
                          },
        removeImage(index){
                this.property.files.splice(index,1);
                this.images.splice(index,1);
               
                },
                removeMainImage(index){
                  this.main_image.splice(index,1);  
                  this.property.image=null
                },
        addProperty(){

            let formData=new FormData();
            formData.append('area',this.property.area)
            formData.append('rooms',this.property.room);
            formData.append('bedrooms',this.property.bedroom);
            formData.append('type',this.property.type);
             formData.append('category',this.property.type);
            formData.append('city',this.property.city);
            formData.append('description',this.property.description);
            formData.append('address',this.property.address);
            formData.append('price',this.property.price);
            formData.append('bathrooms',this.property.bathroom);
            formData.append('available',this.property.available);
            formData.append('image',this.property.image);
            this.property.files.forEach(iterate);

                    function iterate(item, index) {
                    formData.append(`images[${index}]`,item)
                    }

                    this.property.files.forEach(iterate);
              
            
        

                        axios.post('/admin/property',
                                formData,
                                {headers: { "content-Type": "multipart/form-data" }},
                        ).then(
                              response=>this.message=response
                        )
                        // .then(data=>{
                        //     this.property.area=''
                        //     this.property.room=''
                        //     this.property.bedroom=''
                        //     this.property.type=''
                        //     this.property.city=''
                        //     this.property.description=''
                        //     this.property.address=''
                        //     this.property.price=''
                        //     this.property.bathroom=''
                        //     this.property.available=''
                        //     this.property.image=null
                        //     this.main_image=[],
                        //     this.property.files=[],
                        //     this.images=[]
                        // })
                        .catch(error => console.error(error));
                                            
            },
        },
        created() {
                        
        },
        mounted() {
            console.log('jour')
        },
    }
</script>
