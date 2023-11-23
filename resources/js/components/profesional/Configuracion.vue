<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Informacion Personal</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Identificacion</label>
                                    <input type="text" class="form-control" v-model="profesional.identificacion">
                                </div>
                            </div>
                         
                               <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" v-model="profesional.nombres">
                                </div>
                            </div>
                              <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" v-model="profesional.apellidos">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="text" class="form-control" v-model="profesional.correo">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" class="form-control" v-model="profesional.celular">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Ubicacion</label>
                                    <input type="text" class="form-control" v-model="profesional.ubicacion">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="text" class="form-control" v-model="profesional.contrasena">
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"configuracion",
    data(){
        return {
            profesional:{
                identificacion:"",
                nombres:"",
                apellidos:"",
                correo:"",
                celular:"",
                ubicacion:"",
                contrasena:""
                
        }
    }},
    mounted(){
        this.mostrarProfesional()
    },
    methods:{
        async mostrarProfesional(){
            await this.axios.get(`api/profesional/${this.$route.params.id}`).then(response=>{
                const { identificacion,nombres,apellidos,correo,celular,ubicacion,contrasena } = response.data
                this.profesional.identificacion = identificacion
                this.profesional.nombres = nombres
                this.profesional.apellidos = apellidos
                this.profesional.correo = correo
                this.profesional.celular = celular
                this.profesional.ubicacion = ubicacion
                this.profesional.contrasena = contrasena
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`api/profesional/${this.$route.params.id}`,this.profesional).then(response=>{
                this.$router.push({name:"profesional"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>