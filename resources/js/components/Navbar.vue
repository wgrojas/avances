<template>
  <v-app>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">
                  
                    <a href="/"><img src="https://www.shutterstock.com/image-vector/medicine-logo-260nw-715548160.jpg" alt="" width="30" height="24"></a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                    <!-- <li class="nav-item">
                        <router-link exact-active-class="active" to="/register" class="nav-link">Registrarse</router-link>
                    </li>    -->
                     <li class="nav-item">
                        <router-link exact-active-class="active" to="/login" class="nav-link">Login</router-link>
                    </li>            
                </ul>
                
                </div>
            </div>
        </nav>
       
<v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

 
<script>
    export default {
        name:'Home'
    }
</script>
 
       
        
