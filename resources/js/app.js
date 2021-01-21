require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)


Vue.component('index-navbar-component', require('./components/pagesComponent/layouts/indexNavBarComponent.vue').default);
Vue.component('admin-navbar-component', require('./components/adminComponent/layouts/adminNavBarComponent.vue').default);
Vue.component('admin-property-component', require('./components/adminComponent/layouts/propertyComponent.vue').default);

Vue.component('hero-component', require('./components/pagesComponent/layouts/index/heroSectionComponent.vue').default);
Vue.component('services-component', require('./components/pagesComponent/layouts/index/ourServiceComponent.vue').default);
Vue.component('hero-two-component', require('./components/pagesComponent/layouts/index/hero2SectionComponent.vue').default);
Vue.component('top-property-component', require('./components/pagesComponent/layouts/index/topPropertySectionComponent.vue').default);
Vue.component('testmoney-component', require('./components/pagesComponent/layouts/index/testmonySectionComponent.vue').default);
Vue.component('footer-component', require('./components/pagesComponent/layouts/index/footerSectionComponent.vue').default);
Vue.component('nav-show-property-component', require('./components/pagesComponent/layouts/propertyShow/navShowPropertyComponent.vue').default);
Vue.component('property-revues-component', require('./components/pagesComponent/layouts/propertyShow/propertyRevuesComponents.vue').default);
Vue.component('property-show-profile-component', require('./components/pagesComponent/layouts/propertyShow/propertyShowProfileComponent.vue').default);
Vue.component('property-contact-component', require('./components/pagesComponent/layouts/propertyShow/propertyContactComponent.vue').default);
Vue.component('suggest-property-component', require('./components/pagesComponent/layouts/propertyShow/suggestPropertySectionComponent.vue').default);
import propertiesList from './components/adminComponent/indexComponent.vue';
import propertyCreate from './components/adminComponent/addComponent.vue';
import propertyEdit from './components/adminComponent/editComponent.vue';
import index from './components/pagesComponent/indexComponent.vue';
import about from './components/pagesComponent/aboutComponent.vue';
import propertyShow from './components/pagesComponent/layouts/propertyShow/propertyShowComponent.vue';






const routes = [

  {
    path: '/', 
    component: index,
    name:'index'
     },
     
     { 
         path: '/about',
         component: about,
         name: 'about'

       },
       { 
        path: '/show/:property',
        component: propertyShow,
        name:'show'

      }
       ,
         { 
          path: '*',
          redirect: '/'
  
        },

      { 
        path: '/', 
        component: propertiesList,
        name:'root'
         },
         { 
             path: '/property-create',
             component: propertyCreate,
             name: 'create'
    
           },
           { 
            path: '/property-edit/:property',
            component: propertyEdit,
            name:'edit'
    
          }
          ,
       
     
  ]
  
 
if (document.getElementById('admin')){
  
  routes.splice(0,2)

    let router = new VueRouter({
      routes 
    })
    const app = new Vue({
      el: '#app',
      router: router,
  });
  
  }else {

    let router = new VueRouter({
      routes 
    })

  const app = new Vue({
    el: '#app',
    router: router,
});
console.log('app')
  }



