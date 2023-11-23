<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Historial</h4></div>
                <div class="card-body">
                   <form @submit.prevent="actualizar">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre del profesional</label>
                                    <input type="text" class="form-control" v-model="historial.nombreProfesional">
                                </div>
                            </div>
                            <!-- <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" v-model="profesional.contenido" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Contenido</label>
                                </div>
                            </div> -->
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre del paciente</label>
                                    <input type="text" class="form-control" v-model="historial.nombrePaciente">
                                </div>
                            </div>
                              <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="dateTime" class="form-control" v-model="historial.fecha">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Estado actual del Paciente</label>
                                    <input type="text" class="form-control" v-model="historial.estadoPaciente">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Antecedentes</label>
                                    <input type="text" class="form-control" v-model="historial.antecedentes">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Evolucion Final</label>
                                    <input type="text" class="form-control" v-model="historial.evolucionFinal">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Concepto y recomendaciones</label>
                                    <input type="text" class="form-control" v-model="historial.concepto">
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>  
                        {{historial}}                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editarHistorial",
    data(){
        return {
            historial:{
                nombreProfesional:"",
                nombrePaciente:"",
                fecha:"",
                estadoPaciente:"",
                antecedentes:"",
                evolucionFinal:"",
                concepto:""
                
        }
    }},
    mounted(){
        this.mostrarHistorial()
    },
    methods:{
        async mostrarHistorial(){
            await this.axios.get(`api/historial/${this.$route.params.id}`).then(response=>{
                const { nombreProfesional,nombrePaciente,fecha,estadoPaciente,antecedentes,evolucionFinal,concepto } = response.data
                this.historial.nombreProfesional = nombreProfesional
                this.historial.nombrePaciente = nombrePaciente
                this.historial.fecha = fecha
                this.historial.estadoPaciente = estadoPaciente
                this.historial.antecedentes = antecedentes
                this.historial.evolucionFinal = evolucionFinal
                this.historial.concepto = concepto
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`api/historial/${this.$route.params.id}`,this.historial).then(response=>{
                this.$router.push({name:"historial"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>