<template>
    <div >
        <div>
            <div v-if="errors" class="bg-red-500 text-white py-2 px-4 pr-0 rounded font-bold mb-4 shadow-lg">
                <div v-for="(v, k) in errors" :key="k">
                    <p v-for="error in v" :key="error" class="text-sm">
                    {{ error }}
                    </p>
                </div>
                </div>
        </div>
        <h1>Add properties</h1>
                    <form class=" pr-5 pl-5 pb-5" @submit.prevent="updateProperty">
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
                                             <img class="img-thumbnail"  :src="image" :alt="`Image Uplaoder ${index}`">
                                        </div>
                                </div>
                            </div>
                            </div>
                            



                      <div class="form-group">
                               <div class="custom-file">
                                    <label for="images" class="custom-file-label">Images</label>
                                <!-- <input type="file" multiple=true class="form-control-file" id="images" name="image" v-model="property.images"> -->
                           <input type="file" multiple class="custom-file-input" name="images" @change="selectFile">
                               </div>
                            </div>
                             
                             <div class="form-row">
                                 <div class="text-center">
                                     <h3>Current Images</h3>
                                 </div>
                                 <div class="form-row" v-show="images.length">
                                <div class="form-group col-md-2"  v-for="(image, index) in images" :key="index">
                                    <img class="card-img-top" :src="image.filename" :alt="`Image Uplaoder ${index}`">
                                    <div class="card-body">
                                         <button class="btn btn-danger" v-on:click="removeDbImage(image.id,index)">remove</button>
                                    </div>
                                </div>
                            </div>
                             </div>
                              
                            <div v-if="property.files.length>0">
                             <div class="form-row">
                                 <div class="text-center">
                                     <h3>New Images</h3>
                                 </div>
                                 <div class="form-row" v-show="newImage.length">
                                <div class="form-group col-md-2"  v-for="(image, index) in newImage" :key="index">
                                    <img class="card-img-top" :src="image" :alt="`Image Uplaoder ${index}`">
                                    <div class="card-body">
                                        <div>
                                            <span class="card-text" v-text=" property.files[index].name"></span>
                                        <span class="card-text" v-text="getFileSize(property.files[index].size)"></span>
                                        </div>
                                         
                                        <div class="text-center">
                                             <button class="btn btn-danger" v-on:click="removeImage(index)">remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             </div>
                                </div>
                             

                       <div >
                                
                           <div v-if=" validateData ">
                             <div  class=" text-center pt-3 pb-3" v-if="validateMainImage">
                                 <button type="submit" class="btn btn-primary mt-4" >update</button>
                             </div>
                             <div class=" text-center pt-3 pb-3" v-else>
                                 <h6 class="red"> Add a main photo for your property</h6>
                                    <div class="btn btn-danger mt-4" >update</div>
                             </div>
                           </div>
                           <div class=" text-center pt-3 pb-3" v-else>
                               <h6 class="red"> fill all field</h6>
                               <div class="btn btn-danger mt-4" >update</div>
                           </div>
                       </div>
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
                                price:null,
                                room:null,
                                bedroom:null,
                                bathroom:null,
                                area:null,
                                category:null,
                                type:null,
                                address:null,
                                city:null,
                                available:null,
                                image:null,
                                description:null,
                                files: [],
                                
                        },
                main_image:[],
               
                images: [],
                newImage:[],
                
            }
        },
        computed: {
            
                validateMainImage(){
                    if(this.main_image.size>0){
                        return true;
                    }else{
                        if(this.property.image!=null){

                            return true
                        }else{
                            return false
                        }
                    }
                },
                
        validateData(){
                               if(this.property.area!=null&&this.property.room!=null&&
                               this.property.bedroom!=null&&this.property.type!=null&&
                               this.property.description!=null&&this.property.city!=null&&
                               this.property.price!=null&&this.property.bathroom!=null&&
                               this.property.available!=null&&this.property.bedroom!=null){
                                   
                                    return true
                                }else{
                                    return false
                                }
                },

        },
        methods: {
            
                  selectMainImage(event){
             const files=event.target.files
             let mainImage=true
            this.mainImageChange=true
               Array.from(files).forEach(file => this.addImage(file,mainImage));
        },
            
            selectFile(event) {
            const files = event.target.files;
            let mainImage=false
                            Array.from(files).forEach(file => this.addImage(file,mainImage));
                            // Array.from(files).forEach(file => this.addImage(file,mainImage));
            
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
                                    this.main_image=[]
                                    reader.onload = (e) => this.main_image.push(e.target.result);
                                    reader.readAsDataURL(file); 
                            }else{
                                  console.log("noooooo")
                                    this.property.files.push(file);
                                    const img = new Image(),
                                    reader = new FileReader();
                                    reader.onload = (e) => this.newImage.push(e.target.result);
                                    reader.readAsDataURL(file);
                            }
                    },
        getFileSize(size) { const fSExt = ['Bytes', 'KB', 'MB', 'GB'];
                            let i = 0;
                            while(size > 900) { size /= 1024; i++; }
                            return `${(Math.round(size * 100) / 100)} ${fSExt[i]}`;
                          },
        removeMainImage(index){
                  this.main_image.splice(index,1);  
                  this.property.image=null
                },
        removeImage(index){
                
                              
                                   this.property.files.splice(index,1);
                                   this.newImage.splice(index,1);
                                   
                                
                }, 
        removeDbImage(id,index){
                
                               if(confirm('Are you sure')){
                                     this.images.splice(index,1);
                                    axios.delete('/admin/image-delete/'+id)
                                    .then(response=>console.log(response)).catch(error=>console.log(error));
                                }
                }
                ,
        updateProperty(){

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
                    formData.append("_method", "put");
                      
                         axios({
                                method: 'post',
                                url: '/admin/property-update/'+this.$route.params.property,
                                data: formData,
                                headers: {'Content-Type': 'multipart/form-data' }
                                }).catch (error => {
                                console.log(error.response)
                                this.isEditMode = false;
                            }).then(
                            //   response=>this.message=response
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
                        //     this.property.files=[],
                        //     this.images=[],
                        //     this.newImage=[]
                        // })
                        .catch(error => console.error(error));
                                            
            },
        },
        created() {

          
             if(this.$route.params.property){
                axios.get('admin/property/with/'+this.$route.params.property)
                                    .then(response=>{
                                   let resp=response    
                                   console.log(resp.data[0]) 
                        //    console.log(this.properties)
                            this.property.area=parseInt(response.data[0].area)
                            this.property.room=parseInt(response.data[0].rooms)
                            this.property.bedroom=parseInt(response.data[0].bedrooms)
                            this.property.type=parseInt(response.data[0].type)
                            this.property.city=response.data[0].city
                            this.property.description=response.data[0].description
                            this.property.address=response.data[0].address
                            this.property.price=parseInt(response.data[0].price)
                            this.property.bathroom=parseInt(response.data[0].bathrooms)
                            this.property.available=parseInt(response.data[0].available)
                            this.property.category=parseInt(response.data[0].category)
                            this.property.image=response.data[0].image
                            // this.property.main_image =response.data[0].image
                            this.main_image.push(response.data[0].image)
                            // console.log(response.data[0].image)
                           

                            response.data[0].images.forEach(element => {
                                this.images.push(element)
                            });
                             this.property.files=[]
                                    })
                                    .catch(error=>console.log(error));

             }
                        
        },
        mounted() {
            
        },
    }
</script>
